<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
    $pdo=new PDO('mysql:host=mysql218.phy.lolipop.lan;dbname=LAA1518837-team;charset=utf8'
    ,'LAA1518837'
    ,'inhome');
    $sql=$pdo->prepare(
        'update Customer set delete_apply=1 where c_id=?');
    $sql->execute([$_SESSION['customer']['c_id']]);
    unset($_SESSION['customer']);
?>
<h1 class="has-text-centered is-size-3">削除完了</h1><br>
<p class="has-text-centered">削除が完了しました。</p><br>
<a href="">トップ</a>
<?php require 'footer.php'; ?>