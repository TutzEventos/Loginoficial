<?php 
include 'conexao/conecta.inc';
echo '<meta charset=UTF-8>';

$server   = 'localhost';
$user     = 'root';
$password = '12345678';
$database = 'tabelatutz';

// valores a serem cadastrados:

$nome      =  $_REQUEST['nome'];
$email     =  $_REQUEST['email'];
$senha     =  $_REQUEST['senha'];
$endereco  =  $_REQUEST['endereco'];
$telefone  =  $_REQUEST['telefone'];


$sql = "INSERT INTO usuario (NOME_USUARIO,
                             EMAIL_USUARIO,
                             SENHA_USUARIO,
                             ENDERECO_USUARIO,
                             TELEFONE_USUARIO)";
                          
$sql.=" VALUES  ('$nome'
                '$email'
                '$senha'
                '$endereco'
                '$telefone')";
    
      

/*$sql = mysql_query("UPDATE FROM usuario WHERE USUARIO "); linha para cadastrar no banco de dados.*/
/*if($sql) { // verificação para saber se foi cadastrado
echo "Falha ao cadastrar.
".mysql_error();
} else { // caso dê erro
echo "Falha ao atualizar.
".mysql_error();
}*/
  
     if (mysql_query($sql)) { // verificação para saber se foi cadastrado
    echo "Dados Atualizados com Sucesso!";

              
          }else{ 
   echo      mysql_error();
      echo "Falha ao atualizar.";

      
}

echo '<a href=index.php> Pagina Inicial </a> ';


