<?php

//include_once 'conexao/conecta.inc';
//int array [$email] = {'$para', '$assunto', '$mensagem', '$cabecalho'};

/*$email = $_POST['email'];
/*
 * Rotina 1 (Recuperando do banco de dados)
 * 
 */

/*
$query = "SELECT SENHA_USUARIO FROM usuario WHERE EMAIL_USUARIO='$email'";
$result = mysql_query($query);
$usuario = mysql_fetch_array($result);
$senha = $usuario['SENHA_USUARIO'];

$para = $email;
$assunto = "Recuperação de Senha";
$mensagem = "Sua senha cadastrada é: " . $senha;
$cabecalho = "MIME-Version: 1.0" . "\r\n";
$cabecalho .= "Content-type: text/html; charset=ISO 8859-1". "\r\n";
$cabecalho .= "from: Rogério<rogercaetanos@gmail.com>" . "\r\n" .
"Reply-to: rogercaetanos@gmail.com" . "\r\n";


function recupera ($email){
if($email)
//($para, $assunto, $mensagem, $cabecalho))/
{
echo "Email enviado com sucesso.<br/>";
echo $mensagem;
}
}


/*
 * Rotina 2 (Gerando uma senha provisória)
 * 
 */
/*$novaSenha = rand();
$novaSenha.=rand();
//echo $novaSenha;
 $queryUpdate = "UPDATE usuario SET SENHA_USUARIO= '$novaSenha' WHERE EMAIL_USUARIO='$email'";
 $result2 = mysql_query($queryUpdate);
 $usuarios = mysql_fetch_assoc($result2);
 $senha = $usuarios['SENHA_USUARIO'];
 
$para = $email;
$assunto = "Recuperação de Senha";
$menssagem = "Sua senha temporária é: " . $senha;
$cabecalho = "MIME-Version: 1.0" . "\r\n";
$cabecalho .= "Content-type: text/html; charset=ISO 8859-1". "\r\n";
$cabecalho .= "from: Rogério<rogercaetanos@gmail.com>" . "\r\n" .
"Reply-to: rogercaetanos@gmail.com" . "\r\n";
//mail($para, $assunto, $menssagem, $cabecalho);// Na escola não está funcionado (verificar com os tecnicos)
echo "Email enviado com sucesso.<br/>";
 * 
 */

include_once "conexao/conecta.inc";

$senha = $_REQUEST['SENHA_USUARIO'];
$query = mysql_query("SELECT * FROM usuario WHERE SENHA_USUARIO = '".$senha."'  ");


function recupera($query){
    
if(mysql_num_rows($query) > 0){

	$recuperasenha = mysql_fetch_array($query);
	
	$senha_usuario = $recuperasenha["senha"];
	$senha = 'SENHA_USUARIO';
	$msg = "<font face=\"Verdana\" size=\"2\">Recuperação de senha</font><br><br>";
	$msg .="<font face=\"Verdana\" size=\"2\"><strong>Sua senha é: </strong>".$senha_usuario."</font><br><br>";
	
	$mensagem = $msg;
	$destinatario = $email;
	$assunto = "Recupeação de senha";
	$headers = "Bcc: [email]faleconosco@tutzeventos.com[/email]";
	
	ini_set('sendmail_from', 'faleconosco@tutzeventos.co');
	mail($destinatario, $assunto, $mensagem, $headers);
	
	$erro = "Mensagem enviada com sucesso!";
	}
	else{
	$erro = "Sua senha não consta em nossa base de dados!";
}
 

}




