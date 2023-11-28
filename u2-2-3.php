<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php';?>
<?php require 'menu.php'; ?>

<h1>登録完了</h1>
<?php
$id = $_SESSION['customer']['c_id'];
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare( 'insert into Credit values(?,?,?,?,?,?)');
$sql->execute([$id,$_SESSION['toroku']['card_num'],$_SESSION['toroku']['card_name'],
$_SESSION['toroku']['dl_m'],$_SESSION['toroku']['dl_y'],$_SESSION['toroku']['code']]);

$_SESSION['Credit']=[
    'c_id'=>$id, 'card_num'=>$_SESSION['toroku']['card_num'],
    'card_name'=>$_SESSION['toroku']['card_name'],'dl_m'=>$_SESSION['toroku']['dl_m'],
     'dl_y'=>$_SESSION['toroku']['dl_y'],'code'=>$_SESSION['toroku']['code']];

unset($_SESSION['toroku']);
echo 'クレジット情報を登録しました';
echo '<p><a href="U1.php"><button type="button">ホーム</button></p>';

?>
<?php require 'footer.php';?>

