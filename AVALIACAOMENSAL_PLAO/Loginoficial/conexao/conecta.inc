<?php
echo '<meta charset=UTF-8>';
//Configuração
$server   = 'localhost';
$user     = 'root';
$password = '12345678';
$database = 'connectioncadastro';


//Estabelecendo a conexão
$connection = mysql_connect($server,$user,$password);
if ($connection === FALSE)    
{
    echo 'Não foi possível a conexão com Mysql <br/> ';
    echo mysql_error();
}else{
    
    //Selecionando o banco de dados 
   if(!mysql_select_db($database,$connection))
    
   {
       echo 'Não foi possível selecionar o banco de dados '.$database. '<br/>';
       echo mysql_error();
    }
}

