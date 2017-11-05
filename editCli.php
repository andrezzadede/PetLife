<?php
session_start();
if(!isset($_SESSION['Cliente'])){
    die("Fique a vontade, não tem ninguém logado");
}else{
    $nome=$_SESSION['Cliente'];
    $id=$_SESSION['id'];
    require_once("conexao.php");
    $con=open_database();
    selectDb();
    $sql="select * from cliente where id=$id";
    $rs=mysql_query($sql);
    $row=mysql_fetch_array($rs);
    

}
?>

<html>
    <head>
      
        <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <link rel="icon" type="jpg" href="logo.jpg" />
        <title>Meu Cadastro</title>
        <style>  
         .form-group input{background: rgba(255,255,255,0); box-shadow:3px 2px 3px rgba(0,0,0,.3);}
        .panel{background:rgba(255,255,255,0);}
        body {background-image: url("imagens/311.jpg"); background-size:; background-repeat: no-repeat;}
        .input-group input {background: rgba(255,255,255,0);}
        </style>
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        
    </head>
    <body >
            <div class="container" style="margin-top: 1%;">
                    <div class="col-md-6 col-md-offset-3">
                        
        <h2 style="text-align:center;">Conta</h2>
      
        <form class="form-horizontal" method="POST" action="editarConta.php">
        <div class="form-group">
                <label for="lblid" class="col-sm-2 control-label">ID</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="txtID" id="textID" required 
                  value="<?php echo $row['id']?>" readonly>
                </div>
              </div>
            <div class="form-group">
                <label for="lblnome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="txtNome" id="textNome" required 
                  value="<?php echo $row['nome']?>" >
                </div>
              </div>
              <div class="form-group">
                  <label for="lblSobrenome" class="col-sm-2 control-label">Sobrenome</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtSobrenome" id="textSobrenome" required 
                    value="<?php echo $row['sobrenome']?>" >
                  </div>
                </div>
                <div class="form-group">
                    <label for="lblnascimento" class="col-sm-2 control-label">Nascimento</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="txtNascimento" id="textNascimento" required
                      value="<?php echo $row['nascimento']?>"  >
                    </div>
                  </div>
            <div class="form-group">
              <label for="lblemail" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="txtEmail" id="textEmail" required 
                value="<?php echo $row['email']?>" >
              </div>
            </div>
            <div class="form-group">
                <label for="lblCidade" class="col-sm-2 control-label">Cidade</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="txtCidade" id="textCidade" required 
                  value="<?php echo $row['cidade']?>" >
                </div>
              </div>
              <div class="form-group">
                  <label for="lblUf" class="col-sm-2 control-label">UF</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtUf" id="textUF" required 
                    value="<?php echo $row['UF']?>" >
                  </div>
                </div>
                <div class="form-group">
                    <label for="lblCelular" class="col-sm-2 control-label">Celular</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="txtCelular" id="texCelular" required
                      value="<?php echo $row['celular']?>"  >
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="lblTelefone" class="col-sm-2 control-label">Telefone</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtTelefone" id="texTelefone" required 
                        value="<?php echo $row['telefone']?>" >
                      </div>
                    </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="txtSenha" id="txtSenha" required 
                value="<?php echo $row['senha']?>" >
              </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Confirme a Senha</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="txtSenha2" required onblur="Vsenha();" 
                  value="<?php echo $row['senha']?>" >
                </div>
              </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                  <center>
                <input type="submit" style="background: rgba(255,255,255,0); box-shadow:3px 2px 3px rgba(0,0,0,.3);" class="btn btn-default" value="Alterar">
              </center>
              </div>
            </div>
          </form>
</div>
 
    <script>
        function Vsenha(){
            var s1=document.getElementById("txtSenha").value;
            var s2=document.getElementById("txtSenha2").value;
            if (s1!=s2){
                document.getElementById("txtSenha2").value="";
                alert("Hey senha diferente!");
            }

        }
        </script>
    </body>
</html>