<?php
//INSERIR DADOS


echo '<meta charset=UTF-8>';
include 'conexao/conecta.inc';
$nome_usuario               = $_REQUEST['nome'];
$email_usuario              = $_REQUEST['login'];
$senha_usuario              = $_REQUEST['senha'];
//$tipo_usuario               = $_REQUEST['tipo_usuario'];
//$endereco_usuario           = $_REQUEST['endereco_usuario'];
//$telefone_usuario           = $_REQUEST['telefone_usuario'];
$confirmeEmail_usuario      = $_REQUEST['conflogin'];
$confirmeSenha_usuario      = $_REQUEST ['confsenha'];
//$sexo_usuario               = $_REQUEST ['sexo_senha_usuario'];
 $aceitocondicoes          = $_REQUEST[];
//Montando a string (query) de inserção de dados 

$sql = "INSERT INTO usuario (NOME_USUARIO, 
                             EMAIL_USUARIO,
                             SENHA_USUARIO)"; 

$sql.= "VALUES(  '$nome_usuario',
                 '$email_usuario',
                 '$senha_usuario')";
          
             

if (mysql_query($sql))
{
    echo 'Dados inseridos com sucesso !';
}
else{
     echo mysql_error();
}
echo '<a href=index.php>Pagina Inicial </a></br>';
echo '<a href=listaUsuarios.php>Listar Usuarios </a><br/>';

?>
