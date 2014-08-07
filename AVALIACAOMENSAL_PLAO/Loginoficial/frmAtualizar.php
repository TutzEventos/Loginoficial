<!DOCTYPE html>
<html>
    <head>
        <title> Formulário</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="#">
    </head>    
    <body>
        <?php
        include 'includes/funcoesuteis.inc';     
        ValidaAutenticacao('frmlogin.php','RES');
        
        
        //*    $codigo_usuario = $_REQUEST['codigo'];*/
              
              //echo '<h1>'.$codigo_usuario.'</h1>';
             
              $email = $_SESSION['email'];
              $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO ='$email'";
              $result = mysql_query($query);
              $usuario = mysql_fetch_array($result);
        ?>
        <h3> Aréa de Atulização de dados </h3> <br>
        <form action="Atualizar.php" method="post">
           Nome: <input type="text" name="nome" required  value="<?php echo $usuario['NOME_USUARIO'] ?>"> <br/>
           Email: <input type="email" name="email" required value="<?php echo $usuario['EMAIL_USUARIO']?>"> <br/>
           Senha: <input type="password" name="senha" required value="<?php echo $usuario['SENHA_USUARIO']?>"> <br/>
           Endereco: <input type="text" name="endereco" required="<?php echo $usuario['ENDERECO_USUARIO'] ?>"> <br/>
           Telefone: <input type="text" name="telefone" required ="<?php echo $usuario['TELEFONE_USUARIO'] ?>">  <br/>
          
           <input type="submit" value="Atualizar" >
         
           
           </form>
        <a href="index.php" > Pagina Inicial </a>
        
    </body>
</html>