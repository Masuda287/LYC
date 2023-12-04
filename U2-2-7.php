<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php';?>
<?php require 'menu.php'; ?>
<div class="has-text-centered">
<h1 class="is-size-3 pb-3">更新完了</h1>
<?php

echo '<div  class="pt-6">クレジット情報を更新しました</div>';
echo '<div class="pt-6">';
echo '<a href="U2.php" class="button is-info ">戻る</a>';
echo '</div>'

?>
<?php require 'footer.php';?>