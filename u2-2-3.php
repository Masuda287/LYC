<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php';?>
<h1>登録完了</h1>
<?php
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare( 'insert into customer values(?,?,?,?,?,?)');
$sql->execute([$_SESSION['customer'],$_POST['card_num'],$_POST['card_name'],
$_POST['dl_m'],$_POST['dl_y'],$_POST['code']]);
echo 'クレジット情報を登録しました';
?>
<?php require 'footer.php';?>

