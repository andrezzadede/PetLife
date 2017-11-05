<?php

    require_once('conexao.php'); 
    $id= trim($_POST['txtid']);
    $Nome  = trim($_POST['txtNome']);
    $Raca = trim($_POST['txtRaca']); 
    $Cor = trim($_POST['txtCor']);
    $Tipo = trim($_POST['txtTipo']); 
    $Porte = trim($_POST['txtPorte']);
    $Nasci = trim($_POST['txtNasci']);

      $con = open_database(); 
      selectDb();   
      $sql = "update pet set nome='$Nome', raca='$Raca', cor='$Cor', tipo='$Tipo', porte='$Porte', nasci='$Nasci'"; 
      $sql.= " where id=$id";
      $ins = mysql_query($sql); 
       
      if ($ins==FALSE){
         $msg = "Consulta inserir produtos deu erro..."; 
      }else {
         $msg = "Foi inserido" . mysql_affected_rows() . " registros <br/>";
      
      }
      echo $msg; 
         unset($Nome, $Raca, $Cor, $Tipo, $Porte, $Nasci); 
         close_database($con);
       header("location: menuCli.php");
  
  
?>

