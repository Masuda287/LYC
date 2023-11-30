<?php session_start();?>
<?php require 'db-connect.php';?>
<?php $pdo=new PDO($connect,USER,PASS); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'U1-3-1.php'; ?>
<?php require 'footer.php'; ?>