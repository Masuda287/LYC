<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php 
  $pdo=new PDO($connect,USER,PASS);
    if(isset($_SESSION['Credit'])){
        header("Location:U1-3-2.php"); 
    }else{
        header("Location:U2-2-1.php"); 
    }
     ?>  