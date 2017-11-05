<?php
    $loginemail=trim($_POST["loginemail"]);
    $password=trim($_POST["password"]);
    $pasmd5=md5($password);

    require_once "conexao.php";

    $con=open_database();
    selectDb();
    $sql="select * from administrador where email='$loginemail' and senha='$pasmd5'";
    $rs=mysql_query($sql);
    
    if(mysql_affected_rows()>0){
        $nome=mysql_fetch_array($rs);
        close_database($con);
        session_start();
        $_SESSION['admin']=$nome['nome'];
        header("location:administrador.php");
     }else{
         $sql="select * from cliente where email='$loginemail' and senha='$pasmd5'";
         $rs=mysql_query($sql);
            if(mysql_affected_rows()>0){
            $nome=mysql_fetch_array($rs);
            close_database($con);
            session_start();
            $_SESSION['Cliente']=$nome['nome'];
            $_SESSION['id']=$nome['id'];
            header("location:menuCli.php");
         }else {
             header("location:principal.html");
         }
} 

    




















?>