<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
  $pdo=new PDO($connect,USER,PASS);
if(isset($_SESSION['customer'])){
    $sql1=$pdo->prepare('delete from Cart where c_id=? and s_id=?');
    $sql1->execute([$_SESSION['customer']['c_id'],$_POST['s_id']]);
    echo    'カートから商品を削除しました。';
}else{
    unset($_SESSION['product'][$_POST['s_id']]);
    echo    'カートから商品を削除しました。';
}
echo    '<hr>';
require 'U1-3-1.php';
?>
<?php require 'footer.php'; ?>