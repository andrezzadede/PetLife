<?php
session_start();
if(!isset($_SESSION['Cliente'])){
    die("Fique a vontade, não tem ninguém logado");
}else{
    $nome=$_SESSION['Cliente'];
    $id=$_SESSION['id'];
    $pet=$_GET['pet'];
    require_once('conexao.php'); 
    $con = open_database(); 
    selectDb();   
    $sql="select * from pet where id='$pet'";
    $rs=mysql_query($sql);
    if($rs){
        $row=mysql_fetch_array($rs);
    }else{
        die("Desculpe, algo deu errado");
    }
    close_database($con);     
}
?>

<html lang="PT-BR">
<head>

        <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <link rel="icon" type="jpg" href="logo.jpg" />
        <title>Cadastro Pet</title>
        
        <style>  
        
        .panel{background:rgba(255,255,255,0);}
        body {background-image: url("imagens/311.jpg"); background-size:; background-repeat: no-repeat;}
        .input-group input {background: rgba(255,255,255,0);}
        </style>
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    </head>
    <body >
            <div class="container" style="margin-top: 1%;">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel">
                          
        <h2 style="text-align:center;">Identifique seu Pet</h2> 
<form class="form-horizontal" method="POST" action="atualizaPet.php">
<div class="form-group">
                <label for="lblnome" class="col-sm-2 control-label">ID</label>
                <div class="col-sm-10">
                  <input type="text" style="background: rgba(255,255,255,0); box-shadow:3px 2px 3px rgba(0,0,0,.3);" class="form-control" name="txtid" id="txid" readonly required
                  value="<?php echo $row['id']?>" >
                </div>
              </div>
        <div class="form-group">
                <label for="lblnome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                  <input type="text" style="background: rgba(255,255,255,0); box-shadow:3px 2px 3px rgba(0,0,0,.3);" class="form-control" name="txtNome" id="txtNome" required
                  value="<?php echo $row['nome']?>" >
                </div>
              </div>
              <div class="form-group">
                  <label for="lblRaca" class="col-sm-2 control-label">Raça</label>
                  <div class="col-sm-10">
                    <input style="background: rgba(255,255,255,0); box-shadow:3px 2px 3px rgba(0,0,0,.3);" type="text" class="form-control" name="txtRaca" id="txtRaca" required
                    value="<?php echo $row['raca']?>" >
                  </div>
                </div>
                <div class="form-group">
                    <label for="lblCor" class="col-sm-2 control-label">Cor</label>
                    <div class="col-sm-10">
                      <input style="background: rgba(255,255,255,0); box-shadow:3px 2px 3px rgba(0,0,0,.3);" type="text" class="form-control" name="txtCor" id="txtCor" required
                      value="<?php echo $row['cor']?>" >
                    </div>
                  </div>
            <div class="form-group">
              <label for="lblTipo" class="col-sm-2 control-label">Tipo</label>
              <div class="col-sm-10">
                <input style="background: rgba(255,255,255,0); box-shadow:3px 2px 3px rgba(0,0,0,.3);" type="text" class="form-control" name="txtTipo" id="txtTipo" required
                value="<?php echo $row['tipo']?>" >
              </div>
            </div>
            <div class="form-group">
                <label for="lblPorte" class="col-sm-2 control-label">Porte</label>
                <div class="col-sm-10">
                  <input  style="background: rgba(255,255,255,0); box-shadow:3px 2px 3px rgba(0,0,0,.3);" type="text" class="form-control" name="txtPorte" id="txtPorte" required 
                  value="<?php echo $row['porte']?>">
                </div>
              </div>
              <div class="form-group">
                  <label for="lblNasci" class="col-sm-2 control-label">Aniversário</label>
                  <div class="col-sm-10">
                    <input style="background: rgba(255,255,255,0); box-shadow:3px 2px 3px rgba(0,0,0,.3);" type="date" class="form-control" name="txtNasci" id="txtNasci" required
                    value="<?php echo $row['nasci']?>" >
                  </div>
                </div>
                <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
                <center>
                        <input type="submit" style="background: rgba(255,255,255,0); box-shadow:3px 2px 3px rgba(0,0,0,.3);" class="btn btn-default" value="Alterar">
                        <a style="background: rgba(255,255,255,0); box-shadow:3px 2px 3px rgba(0,0,0,.3);" 
                        onclick="deletar(<?php echo $pet?>)" class="btn btn-default">Deletar</a>
                      </center>
          </div>
        </div>
      </form>
      </div>
<script>
    function deletar(id){
        if(confirm("Para desfazer do animal, click em confirmar")){
            window.location.href="deletpet.php?pet="+id;
        }

    }
</script>
    </body>

    </html>


