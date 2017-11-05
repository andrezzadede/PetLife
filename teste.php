<?php


require_once('conexao.php'); 
$con = open_database(); 
selectDb();   

$sql="select pet.raca, pet.cor, pet.tipo, pet.porte, pet.nasci from rastreador ";
$sql.=" inner join pet on rastreador.pet=pet.id where cliente=5 and pet.id=6";
$rs=mysql_query($sql);
if($rs){
   
   $row=mysql_fetch_array($rs);
  // echo "<span>".$row['raca']."</span>";
  $cor=$row['cor'];
  echo "<span>".$cor."</span>";


   
}else{
    echo "<span>nao deu certo</span>";
}
?>




