<?php
$id=$_GET['id'];
echo "$id";
require_once('conexao.php'); 
$con = open_database(); 
selectDb();   
$sql="delete from rastreador where cliente=$id";
$rs=mysql_query($sql);
if($rs){
    $sql="delete from pet where dono=$id";
    $rs=mysql_query($sql);
    $sql="delete from cliente where id=$id";
    $rs=mysql_query($sql);

}else {
    die ("Algo deu errado");
}
close_database($con);

header("location: administrador.php");
?>