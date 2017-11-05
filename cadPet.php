<?php

    require_once('conexao.php'); 

    $Nome  = trim($_POST['txtNome']);
    $Raca = trim($_POST['txtRaca']); 
    $Cor = trim($_POST['txtCor']);
    $Tipo = trim($_POST['txtTipo']); 
    $Porte = trim($_POST['txtPorte']);
    $Nasci = trim($_POST['txtNasci']);

      $con = open_database(); 
      selectDb();   
      $sql = "INSERT INTO pet (nome, raca, cor, tipo, porte, nasci)"; 
      $sql.= " VALUES  ('$Nome', '$Raca', '$Cor', '$Tipo', '$Porte', '$Nasci');";
      $ins = mysql_query($sql); 
       
      if ($ins==FALSE){
         $msg = "Consulta inserir produtos deu erro..."; 
      }else {
         $msg = "Foi inserido" . mysql_affected_rows() . " registros <br/>";
      
      }
      echo $msg; 
      session_start();
         if(isset($_SESSION['id'])){
         $id=$_SESSION['id'];
         $sql="select * from pet where nome='$Nome'";
         $rs=mysql_query($sql);
         $pet=mysql_fetch_array($rs);
         $idpet=$pet['id'];
         $sql="insert into rastreador (cliente, pet) values ($id, $idpet);";
         $rs=mysql_query($sql);
         unset($Nome, $Raca, $Cor, $Tipo, $Porte, $Nasci); 
         close_database($con);
       header("location: menuCli.php");
  }
  
?>

