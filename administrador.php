<?php
session_start();
if(!isset($_SESSION['admin'])){
    die("Fique a vontade, não tem ninguém logado");
}else{
    $nome=$_SESSION['admin'];
   
    require_once "conexao.php";
    
        $con=open_database();
        selectDb();
        $sql="select * from cliente order by nome";
        $rs=mysql_query($sql);
        if(!$rs){
            die ("Desculpe, algo diferente ocorreu");
        }
}
?>
<html lang="PT-BR">
<head>

        <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <link rel="icon" type="jpg" href="logo.jpg" />
        <title>Administrador</title>
        
        <style>  
        
        .panel{background:rgba(255,255,255,0);}
        body {background-image: url("imagens/311.jpg"); background-size:; background-repeat: no-repeat;}
        .input-group input {background: rgba(255,255,255,0);}
        </style>
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    </head>
    <body>
        <div class="container" >
        <a href="sair.php"  style=" float:right; background: rgba(255,255,255,0); box-shadow:3px 2px 3px rgba(0,0,0,.3);" class="btn btn-default">Sair</a>
<br><br>
            <h2>Clientes<h2>
                <div class="col-md-8">
                    <table class="table">
                        <th>Nome</th><th>Sobrenome</th><th>Editar</th>
                        <?php 
                            while($row=mysql_fetch_array($rs)){
                                
                                echo "<tr>";
                                echo "<td>".$row['nome']."</td>";
                                echo "<td>".$row['sobrenome']."</td>";
                                $id=$row['id'];
                                echo "<td><a href='editCliADM.php?id=$id'><i class='material-icons'>build</i></a></td>";
                                echo "<tr>";
                             

                            }
                        
                        
                        ?>


                    </table>
                </div>
        </div>
    </body>

</html>