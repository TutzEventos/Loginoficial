<?php
echo '<meta charset=UTF-8>';
include 'classes/Bcrypt.class.php';
include 'conexao/conecta.inc';
$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";

$result = mysql_query($query);
$usuario = mysql_fetch_assoc($result);
$hash = $usuario['SENHA_USUARIO'];

if(Bcrypt :: check($senha, $hash))
{
    echo 'Senha OK !';
    echo '<script language= "JavaScript">
            location.href="indexrestrito.php"
            </script>';
}else{
    echo 'Senha Incorreta !';
}
