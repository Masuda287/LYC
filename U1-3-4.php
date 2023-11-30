<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>


<h1>購入完了</h1>
<p>ご購入ありがとうございます。</p>



<?php
  $pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare('insert into Purchase values(null,?,now())');
$sql->execute([$_SESSION['customer']['c_id']]);
$i=$pdo->lastInsertId();
$sql=$pdo->prepare('select * from Cart where c_id=?');
$sql->execute([$_SESSION['customer']['c_id']]);
foreach($sql as $row){
    $sql=$pdo->prepare('insert into Purchase_detail values(?,?)');
        $sql->execute([$i,$row['s_id']]);
}
$sql=$pdo->prepare('delete from Cart where c_id=?');
$sql->execute([$_SESSION['customer']['c_id']]);
?>
<?php require 'footer.php'; ?>



