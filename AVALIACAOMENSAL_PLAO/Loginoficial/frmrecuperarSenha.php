<!doctype html>
<html>
    <head>
        <title> Formulário de Login  </title>
        <meta charset="UTF-8">
        <script type="text/javascript">
          
            function ValidacaoSenha(){
                if(Inserir.senha.value !==Inserir.consenha.value){
                    alert('Senha não confere!');
                    return false;
                }
            }
            </script>
           
        
       </head>
            <body>
                <form method="post" action="frmlogin.php">
                   <label>Email: </label><input type="email" name="email"><br/> <br/> 
                   <!--  <label>Senha : </label><input type="password" name="senha"><br/> <br/> -->
                




 <?php

function gerarSaltsDinamicos($tamanho = 6){
    
    return substr(sha1(mt_rand()),0,$tamanho);
    
}

  
/*$saltDinamico = gerarSaltsDinamicos(6);
echo 'Salt Dinâmico '. $saltDinamico . '</br>';
$senhaCriptografada_md5_salt_Dinamico = md5($senha,$saltDinamico);
echo 'Senha Original é: '. $senha . '</br>';
echo 'Senha Criptografada: '. $senhaCriptografada_md5_salt_Dinamico .
    strlen($senhaCriptografada_md5_salt_Dinamico) . ' letras<br/>';
 
 */
                 
               
      ?>             
                   
                   
                   
                   
                   
                  <input type="submit" onclick="return ValidacaoSenha()" value="Enviar">
                </form>
             </body>
      </html>


