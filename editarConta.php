<?php
require_once('conexao.php'); 
$id=trim($_POST['txtID']);
$nome  = trim($_POST['txtNome']);
$sobrenome = trim($_POST['txtSobrenome']); 
$nascimento = trim($_POST['txtNascimento']); 
$email = trim($_POST['txtEmail']);
$cidade = trim($_POST['txtCidade']);
$uf = trim($_POST['txtUf']);
$celular = trim($_POST['txtCelular']);
$telefone = trim($_POST['txtTelefone']);
$senha = trim($_POST['txtSenha']);


    function validacao($senha, $id){
        $con = open_database(); 
        selectDb();  
        $sql="select * from cliente where senha='$senha' and id='$id'";
        $rs=mysql_query($sql);
        close_database($con);
        if(mysql_affected_rows()>0){
            return $senha;
        }else{
            return md5($senha);
        }
    }
    $senhamd5=validacao($senha, $id);
  $con = open_database(); 
  selectDb();   
  $sql = "update cliente set nome='$nome', sobrenome='$sobrenome', nascimento='$nascimento', email='$email', cidade='$cidade', uf='$uf', celular='$celular', telefone='$telefone', senha='$senhamd5'"; 
  $sql.= " where id=$id";
  $ins = mysql_query($sql); 
  close_database($con); 
  if ($ins==FALSE)
     $msg = "Consulta inserir produtos deu erro..."; 
  else {
     $msg = "Foi inserido" . mysql_affected_rows() . " registros <br/>";
     unset($nome, $sobrenome, $nascimento, $email, $cidade, $uf, $celular, $telefone, $senha); 
  }
  echo $msg; 

header("location: menuCli.php")
?>
