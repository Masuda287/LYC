<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php';?>
<?php require 'menu.php'; ?>
<h1>更新完了</h1>
<?php
$pdo=new PDO($connect,USER,PASS);

$id = $_SESSION['Credit']['c_id'];
$sql=$pdo->prepare( 'update Credit set card_num=?,card_name=?,dl_m=?,dl_y=?,code=? where c_id=?');
$sql->execute([$_SESSION['kosin']['card_num'],$_SESSION['kosin']['card_name'],
$_SESSION['kosin']['dl_m'],$_SESSION['kosin']['dl_y'],$_SESSION['kosin']['code'],$id]);

$_SESSION['Credit']=[
    'c_id'=>$id,'card_num'=>$_SESSION['kosin']['card_num'],'card_name'=>$_SESSION['kosin']['card_name'],
    'dl_m'=>$_SESSION['kosin']['dl_m'],'dl_y'=>$_SESSION['kosin']['dl_y'],'code'=>$_SESSION['kosin']['code']
];
unset($_SESSION['kosin']);
echo 'クレジット情報を登録しました';
echo '<p><a href="U1.php"><button type="button">ホーム</button></p>';


?>
<?php require 'footer.php';?>

