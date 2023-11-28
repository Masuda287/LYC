<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
echo  '<form action="U1-1-4.php" method="post">';
echo  '<h1>入力情報確認</h1>';
echo  '<p>姓名：',$_SESSION['kyaku']['u_name'],'</p>';
echo  '<p>ユーザー名：',$_SESSION['kyaku']['login'],'</p>';
echo  '<p>生年月日：',$_SESSION['kyaku']['b_day'],'</p>';
echo  '<p>メールアドレス：',$_SESSION['kyaku']['mail'],'</p>';
echo  '<p>パスワード：', substr_replace($_SESSION['kyaku']['password'],'*',1,5),'</p>';   
echo  '<p><input type="submit" value="登録"></p>';
echo  '</form>';
?>

<?php require 'footer.php'; ?>
<?php
// $_GET['password'] echo preg_replace('/0-9{1}/', '*', $GET['password']);
?>