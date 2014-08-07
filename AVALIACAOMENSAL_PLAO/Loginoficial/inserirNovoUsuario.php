<?php
echo '<meta charset=UTF-8>';
include 'conexao/conecta.inc';
include 'classes/Bcrypt.class.php';





$nome      = $_POST['nome'];
$email     = $_POST['login'];
$senha     = $_POST['senha'];
$endereco  = $_POST['endereco'];
$telefone  = $_POST['telefone'];
$sexo      = $_POST['sexo'];
$tipoUsuario = 'RES';
$senha = Bcrypt::hash($senha);


$query = "INSERT INTO usuario(
                              NOME_USUARIO,
                              EMAIL_USUARIO,
                              SENHA_USUARIO,
                              ENDERECO_USUARIO,
                              TELEFONE_USUARIO,
                              SEXO_USUARIO,
                              TIPO_USUARIO)";

$query.= " VALUES('$nome',
                  '$email',
                  '$senha',
                  '$endereco',
                  '$telefone',
                  '$sexo',
                  '$tipoUsuario')";





if(mysql_query($query)){
    
    echo '<script> 
        alert ("Usuário Cadastrado com Sucesso!")
    
     </script>';
echo  '<a href=frmlogin.php>Efetuar Login</a>';

    
}else{
  
    mysql_error();
    echo '<script> 
    alert("Não foi possivel efetuar seu cadastro!")
   location.href="index.php"
    </script>';
    
    
}







