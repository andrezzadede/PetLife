<?php
session_start();
if(isset($_SESSION["admin"])or isset($_SESSION["Cliente"])){
    session_destroy();
    header("location:principal.html");
}
?>