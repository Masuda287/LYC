<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php';?>
<div class="has-text-centered">
<h1 class="is-size-3">登録完了</h1>
<?php
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare('insert into Credit values(?,?,?,?,?,?)');
$sql->execute([$_SESSION['customer']['c_id'],$_GET['card_num'],$_GET['card_name'],
$_GET['dl_m'],$_GET['dl_y'],$_GET['code']]);
echo '<div class="pt-6">クレジット情報を登録しました</div>';
echo '<div class="pt-6">';
echo '<a href="U2.php" class="button is-info ">ホーム</a>';
echo '</div>';
?>
</div>
<?php require 'footer.php';?>

