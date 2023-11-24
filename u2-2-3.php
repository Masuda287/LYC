<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php';?>
<?php require 'menu.php'; ?>

<h1>登録完了</h1>
<?php
$id = $_SESSION['customer']['c_id'];
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare( 'insert into Credit values(?,?,?,?,?,?)');
$sql->execute([$id,$_GET['card_num'],$_GET['card_name'],
$_GET['dl_m'],$_GET['dl_y'],$_GET['code']]);
echo 'クレジット情報を登録しました';
?>
<?php require 'footer.php';?>

