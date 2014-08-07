<!doctype html>
<html>
    <head>
        <title> Formulário de Login  </title>
        <meta charset="UTF-8">
        <script type="text/javascript">
            function Validacao(){
                if(Inserir.email.value !==Inserir.conemail.value){
                    alert('Email não confere!');
                    return false;
                }
            }
            </script>
        
       </head>
            <body>
                <form method="post" action="login.php">
                   <label>Nome: </label><input type="text" name="nome"><br/><br/>
                   <label>Email: </label><input type="email" name="email"><br/> <br/>
                   <label>Confirmar Email: </label><input type="email" name="email"><br/><br/>
                   <label>Senha: </label><input type="password" name="senha"><br/><br/>
                   <label>Confirmar senha: </label><input type="password" name="senha"><br/><br/>
                   <label>Endereço: </label><input type="text" name="endereco"><br/> <br/>
                   <label>Telefone: </label><input type="number" name="telefone"><br/> <br/>
                   <label>Sexo: </label>
                   <input type="radio" name="sexo" value="M">Masculino
                   <input type="radio" name="sexo" value="F">Feminino <br/><br/>
                  <input type="submit" onclick="return Validacao()" value="Enviar">
                </form>
             </body>
      </html>


