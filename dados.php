<?php
$id=$_POST["id"];
$pet=$_POST["pet"];
//echo "<span>$id, $pet</span>";


require_once('conexao.php'); 
$con = open_database(); 
selectDb();   

$sql="select pet.raca, pet.cor, pet.tipo, pet.porte, pet.nasci from rastreador ";
$sql.=" inner join pet on rastreador.pet=pet.id where cliente=$id and pet.id=$pet";
$rs=mysql_query($sql);
if($rs){
   
   $row=mysql_fetch_array($rs);
   echo "<table class='table'>";
   echo "<tr>";
   echo "<td>Nome</td>";
   echo "<td>".getnamepet($pet)."</td>";
   echo "</tr>";

   echo "<tr>";
   echo "<td>Raça</td>";
   echo "<td>".$row['raca']."</td>";
   echo "</tr>";

   echo "<tr>";
   echo "<td>Cor</td>";
   echo "<td>".$row['cor']."</td>";
   echo "</tr>";

   echo "<tr>";
   echo "<td>Tipo</td>";
   echo "<td>".$row['tipo']."</td>";
   echo "</tr>";

   echo "<tr>";
   echo "<td>Porte</td>";
   echo "<td>".$row['porte']."</td>";
   echo "</tr>";

    $na=new DateTime($row['nasci']);
   
   echo "<tr>";
   echo "<td>Nascimento</td>";
   echo "<td>".$na->format("d-m-Y")."</td>";
   echo "</tr>";

   echo "<tr>";
   echo "<td><a href='alterarPet.php?pet=$pet'><i class='material-icons'>build</i></a></td>";
   echo "<td></td>";
   echo "</tr>"; 
   echo "</table>";

   
}else{
    echo "<span>nao deu certo</span>";
}
?>




