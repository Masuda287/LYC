<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<p class="has-text-centered"><a href="M1.php" class="button is-default is-size-2">inHome管理画面</a></p><br>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare(
        'delete from Shohin where s_id=?');
    $sql->execute([$_POST['s_id']]);
?>
<h1 class="has-text-centered is-size-3">削除完了</h1><br>
<br><br>
<p class="has-text-centered">商品を削除しました。</p><br>
<br><br>
<b class="level">
<c class="level-item">
<a href="M2-2.php" class="button is-info">商品一覧へ</a>
</c>
</b>
<?php require 'footer.php'; ?>