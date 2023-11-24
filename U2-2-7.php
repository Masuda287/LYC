<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php';?>
<h1>更新完了</h1>
<?php
$pdo=new PDO($connect,USER,PASS);

$id = $_SESSION['Credit']['c_id'];
$sql=$pdo->prepare( 'update Credit set card_num=?,card_name=?,dl_m=?,dl_y=?,code=? where c_id=?');
$sql->execute([$_GET['card_num'],$_GET['card_name'],
$_GET['dl_m'],$_GET['dl_y'],$_GET['code'],$id]);

$_SESSION['Credit']=[
    'c_id'=>$id,'card_num'=>$_GET['card_num'],'card_name'=>$_GET['card_name'],
    'dl_m'=>$_GET['dl_m'],'dl_y'=>$_GET['dl_y'],'code'=>$_GET['code']
];

echo 'クレジット情報を登録しました';
?>
<?php require 'footer.php';?>

