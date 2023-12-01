<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php';?>
<?php require 'menu.php'; ?>
<h1 class="has-text-centered is-size-3">ユーザー削除</h1><br>
<p class="has-text-centered">こちらのユーザー情報を削除してもよろしいでしょうか。</p><br>
<p class="has-text-danger has-text-centered">一度削除してしまうとアカウントの修復はできません</p><br>
<?php
echo '<p>姓名：',$_SESSION['customer']['u_name'],'</p>';
echo '<br>';
echo '<p>ユーザー名：',$_SESSION['customer']['login'],'</p>';
echo '<br>';
echo '<p>生年月日：',$_SESSION['customer']['b_day'],'</p>';
echo '<br>';
echo '<p>メールアドレス：',$_SESSION['customer']['mail'],'</p>';
echo '<br>';
echo '<p>パスワード：',$_SESSION['customer']['password'],'</p>';
echo '<br>';
?>
<nac class="level">
<b class="level-item">
<a href="U2.php" class="button is-medium">戻る</a>
<p class="has-text-white">______________</p>
<a href="U2-5-2.php" class="button is-info is-medium">削除</a>
</b>
</nac>