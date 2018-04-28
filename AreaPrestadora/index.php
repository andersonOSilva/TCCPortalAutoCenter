<?php
session_start();
if (isset($_GET['out'])) {
 session_destroy();
 header('location:../index.php');
} else if (isset($_SESSION['idPrestadora'])){
   require_once("views/home.php");
   // header("location:home.php?pag=home");
 }else {
   header('location:../index.php');
 }
  //require_once("views/home.php");
?>
