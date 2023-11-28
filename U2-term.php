<?php session_start();?>
<?php require 'db-connect.php'; ?>
<?php 


if(empty($_SESSION['Credit'])){
    header("Location:U2-2-1.php");
}else{
    header("Location:U2-2-4.php?");
}

?>