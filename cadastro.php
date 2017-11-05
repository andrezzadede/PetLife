<?php

    require_once('conexao.php'); 

    $nome  = trim($_POST['txtNome']);
    $sobrenome = trim($_POST['txtSobrenome']); 
    $nascimento = trim($_POST['txtNascimento']); 
    $email = trim($_POST['txtEmail']);
    $cidade = trim($_POST['txtCidade']);
    $uf = trim($_POST['txtUf']);
    $celular = trim($_POST['txtCelular']);
    $telefone = trim($_POST['txtTelefone']);
    $senha = trim($_POST['txtSenha']);
    $senhamd5=md5($senha);

      $con = open_database(); 
      selectDb();   
      $sql = "INSERT INTO cliente (nome, sobrenome, nascimento, email, cidade, uf, celular, telefone, senha)"; 
      $sql.= " VALUES  ('$nome', '$sobrenome', '$nascimento', '$email', '$cidade', '$uf', '$celular', '$telefone', '$senhamd5');";
      $ins = mysql_query($sql); 
      close_database($con); 
      if ($ins==FALSE)
         $msg = "Consulta inserir produtos deu erro..."; 
      else {
         $msg = "Foi inserido" . mysql_affected_rows() . " registros <br/>";
         unset($nome, $sobrenome, $nascimento, $email, $cidade, $uf, $celular, $telefone, $senha); 
      }
      echo $msg; 
    
    header("location: principal.html")
?>