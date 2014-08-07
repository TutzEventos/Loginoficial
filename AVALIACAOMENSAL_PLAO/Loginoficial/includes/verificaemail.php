<?php
// recebendo a informação do formulário
$email = $_GET['login'];


// configuração para conexão com o mysql
$server = 'localhost';
$user ='root';
$password = '12345678';
$database = 'connectioncadastro';

// Estabelecendo a conexão, selecionando o banco de dados e executando a query
$connection = mysql_connect($server,$user,$password);
mysql_select_db($database,$connection);
$query = "SELECT EMAIL_USUARIO FROM usuario WHERE EMAIL_USUARIO ='$email'";
$result = mysql_query($query);

// Criando uma "matriz" para armazenar os emails cadastrados no banco
$emailsCadastrados= array();

// Guardando os emails na matriz $emailsCadastrados
while($usuarios = mysql_fetch_array($result))
{
    $emailsCadastrados[] = $usuarios['EMAIL_USUARIO'];    
}



// A função in_array(), verifica se determinado valor faz parte de uma matriz. A função recebe dois parâmetros:
// o "valor a ser pesquisado" e a "matriz"
if (in_array($email, $emailsCadastrados))
{
    echo 'false';
}else{
    echo 'true';
}
exit();
