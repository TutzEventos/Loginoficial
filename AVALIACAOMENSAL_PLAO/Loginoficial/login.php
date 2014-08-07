<?php
//o include_once é responsavel em incluir um arquivo apena quando for necessario, ou seja, se o arquivo já estiver sido 
//incluindo anteriormente o include_once não é executado.
include_once 'conexao/conecta.inc';
echo '<meta charset=UTF-8>';
session_start();
// a linha 8 é para saber se esses 2 itens foram cadastrados correto e  depois ele lê a linha 10 e 11 para poder acessar o banco de dados para saber se 
//esse usuario existe 
// se sim ele  ja entra na linha 39 a 41 senao ele volta para frmlogin linha 55 a 57.
if(isset($_POST['email']) and isset($_POST['senha']))
{
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
    $result = mysql_query($query);
    $totalUsuario = mysql_num_rows($result);
       if($totalUsuario === 0 ){
         echo 'Usuario não encontrado !<br/>';
    }else{
    
//recuperando a senha do usuário       
    $array = mysql_fetch_array($result);
    $senhaUsuario = $array['SENHA_USUARIO'];
   $tipoUsuario = $array['TIPO_USUARIO'];
   
// echo $senhaUsuario . '<br/>'
    if ($senha !== $senhaUsuario)
     {
        echo 'Senha não confere !';
    }else{
        $_SESSION['email_usuario'] = $email;
        $_SESSION['senha_usuario'] = $senha;
        $_SESSION['tipoUsuario'] = $tipoUsuario;
       if($tipoUsuario === 'RES')
           { 
         echo '<script language= "JavaScript">
            location.href="indexrestrito.php"
            </script>';
           
           }elseif ($tipoUsuario === 'ADM')
           {
              echo '<script language= "JavaScript">
                    location.href="Admin/indexadmin.php"
                    </script>';       
    }else {
        echo 'Tipo de Usuário inválido!';
        }
        
    }  
 }
}else{
        echo '<script language= "JavaScript">
          location.href="frmlogin.php"
         </script>';
}
