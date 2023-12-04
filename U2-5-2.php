<?php session_start(); ?>
<?php require 'db-connect.php';?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare( 'update Customer set delete_apply=1 where c_id=?');
    $sql->execute([$_SESSION['customer']['c_id']]);
    unset($_SESSION['customer']);
?>
<h1 class="has-text-centered is-size-3">削除完了</h1><br>
<p class="has-text-centered">削除が完了しました。</p><br>
<a href="U1.php">トップ</a>
<?php require 'footer.php'; ?>