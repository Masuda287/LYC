<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php';?>
<div class="has-text-centered"><div level>
    <h1 class="is-size-3">登録情報確認<h1><br>
    <p class="pb-4">以下の内容で登録します。</p>
<?php
  $num=$_POST['card_num'];
  $name=$_POST['card_name'];
  $month=$_POST['dl_m'];
  $year=$_POST['dl_y'];
  $code=$_POST['code'];
  $URL="U2-2-3.php?card_num={$num}&card_name={$name}&dl_m={$month}&dl_y={$year}&code={$code}";
  echo '<table class="level-item">';
  echo '<tr><td class="pb-3">カード番号</td><td>';
  echo $_POST['card_num'];
  echo '</td></tr>';
  echo '<tr><td class="pb-3">名義</td><td>';
  echo $_POST['card_name'];
  echo '</td></tr>';
  echo '<tr><td class="pb-3">有効期限</td><td>';
  echo $_POST['dl_m'],'月',$_POST['dl_y'],'年';
  echo '</td></tr>';
  echo '<tr><td class="pb-3">セキュリティーコード</td><td>';
  echo $_POST['code'];
  echo '</td></tr>';
  echo'</table>';
  echo '<nac class="level">';
  echo '<b class="level-item">';
  echo '<a href="U2-2-1.php" class="button is-medium">戻る</a>';
  echo '<p class="has-text-white">______________</p>';
  echo '<a href="',$URL,'" class="button is-info is-medium">確認</a>';
  echo '</b>';
  echo '</nac>';
?>
<?php require 'footer.php';?>


