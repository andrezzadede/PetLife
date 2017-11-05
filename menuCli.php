<?php
session_start();
if(!isset($_SESSION['Cliente'])){
    die("Fique a vontade, não tem ninguém logado");
}else{
    $nome=$_SESSION['Cliente'];
    $id=$_SESSION['id'];
}
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link rel="icon" type="jpg" href="logo.jpg" />
<style> 
            body {
            background-image: url("imagens/311.jpg"); background-size: ; background-repeat: no-repeat;           
}
.rast{
    padding:10px;
    border:3px solid black;
    
}
        </style>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <?php
            echo "Bem vindo Sr(a) $nome";
            ?>
            
            <input style="opacity:0;" type="text" readonly value="<?php echo $id ?>" id="id" class="btn btn-default">
      <span style="padding-left:110px;">My Pets</span>
            <select style="margin-right:240px; background: rgba(255,255,255,0); box-shadow:3px 2px 3px rgba(0,0,0,.3);" id="pet">
           <?php
           require_once('conexao.php'); 
           $con = open_database(); 
           selectDb();   
           $sql="select * from rastreador where cliente=$id";
           $rs=mysql_query($sql);
           while($row=mysql_fetch_array($rs)){
               $idpet=$row['pet'];
               echo "<option value='$idpet'>";
               echo getnamepet($row['pet'] );
               echo "</option>";
           }
           close_database($con); 
           ?>
              </select>
            <button onclick="javascript:location.href='cadPet.html'" style="background: rgba(255,255,255,0); box-shadow:3px 2px 3px rgba(0,0,0,.3);" type="submit"  class="btn btn-default">Cadastrar</button>
<a href="sair.php"  style=" float:right; background: rgba(255,255,255,0); box-shadow:3px 2px 3px rgba(0,0,0,.3);" class="btn btn-default">Sair</a>
<button onclick="javascript:location.href='editCli.php'"  style=" float:right; background: rgba(255,255,255,0); box-shadow:3px 2px 3px rgba(0,0,0,.3);" class="btn btn-default">Conta</button>
</div>
<center>
<div class="col-md-12">
    <div class="col-md-6 " style="padding:20px" >  <h4>Dados My Pet</h4>
    </div>
    <div class="col-md-6 " style="padding:20px" >  <h4>Rastreador</h4>
    </div>
</div>

        </center>
<div class="col-md-6 " id="dados" >   
</div>   
<div class="col-md-6 " >   
    <div class="rast" >
        <h5 style="text-align:center;">Fora do Ar! </h5>
    </div>
</div>     
</div>
<script src="jquery/jquery.js">
</script>
<script>
    function dadospet(id, idpet){
        var pag="dados.php";
        $.ajax
        ({
            type:'POST',
            dataType:'html',
            url:pag,
            beforeSend: function(){
                $("#dados").html("Carregando");
            },
            data:{id:id, pet:idpet},
            success:function(msg){
                $("#dados").html(msg);
            }

        });
    } 
    $('#pet').change(function(){
        dadospet($("#id").val(), $("#pet").val());

    });
</script>
</body>
</html>

