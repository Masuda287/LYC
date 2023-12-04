<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<p class="has-text-centered"><a href="M1.php" class="button is-default is-size-2">inHome管理画面</a></p><br>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('insert into Shohin() values(null,?,?,?,?,?,now())');
    $sql->execute([$_POST['s_name'],$_POST['category1'],$_POST['category2'],$_POST['s_detail'],$_POST['s_price']]);
?>
<h1 class="has-text-centered is-size-3">登録完了</h1><br>
<br><br>
<p class="has-text-centered">商品を登録しました。</p><br>
<br><br>
<b class="level">
<c class="level-item">
<a href="M2-2" class="button is-large">商品一覧へ</a>
</c>
</b>
<?php require 'footer.php'; ?>