<?php
$id=$_GET['pet'];
require_once('conexao.php'); 
$con = open_database(); 
selectDb();   
$sql="delete from rastreador where pet=$id";
$rs=mysql_query($sql);
if($rs){
    $sql="delete from pet where id=$id";
    $rs=mysql_query($sql);

}else {
    die ("Algo deu errado");
}
close_database($con);

header("location: menuCli.php");
?>