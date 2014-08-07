<?php
function ValidaAutenticacao($link,$tipo) 
{
    echo '<meta charset=UTF-8>'; 
    include 'classes/Bcrypt.class.php';
    session_start();
    if(!isset($_SESSION['email']) or !isset($_SESSION['senha']))
    {
        session_destroy();
        echo '<script type"text/javascript">
                 alert ("Acesso Negado! \n Usuário não efetuou Login ")
              </script>';
        echo '<script type="text/javascript">
                location.href= "'.$link.'"
               </script>';                                                  
    }     
    else{
    $email       = $_SESSION['email'];
    $senha       = $_SESSION['senha'];
    $tipoUsuario = $_SESSION['tipoUsuario'];
    if($tipo === 'RES')
    {
    include_once 'conexao/conecta.inc';
    }elseif ($tipo === 'ADM'){
        include_once'../conexao/conecta.inc';
    }
    $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
    $result = mysql_query($query);
    $usuarios = mysql_fetch_array($result);
    if($email !== $usuarios['EMAIL_USUARIO'])
    {
        session_destroy();
        echo '<script type="text/javascript">
        alert("Acesso Negado! \n Usuário não confere ")
        </script>';
        echo '<script type="text/javascript">
             location.href = "'.$link.'"
                 </script>';
        
    }elseif( !Bcrypt::check($senha, $usuarios['SENHA_USUARIO']))
    {
        session_destroy();
       echo '<script type="text/javascript">
          alert("Acesso Negado! \n Senha nã confere ")
          </script>';
        
       echo '<script type="text/javascript">
               location.href = "'.$link.'"
                   </script>';
    }elseif ($tipoUsuario !== $tipo) {
    session_destroy();
    echo '<script type="text/javascript">
          alert ("Acesso Negado! \n Acesso Negado para seu tipo de Usuário")
    </script>';
    
    echo '<script type="text/javascript">
        location.href ="'.$link.'"
            </script>';
      }
    }
 } 
    