<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php';?>
<?php require 'menu.php';?>
<div class="has-text-centered">
<h1 class="is-size-3">クレジットカード情報</h1>
<div level>
<?php
$card_num=$card_name=$dl_m=$dl_y=$code='';
if (isset($_SESSION['customer'])){
    $card_num=$_SESSION['customer']['card_num'];
    $card_name=$_SESSION['customer']['card_name'];
    $dl_m=$_SESSION['customer']['dl_m'];
    $dl_y=$_SESSION['customer']['dl_y'];
    $code=$_SESSION['customer']['code'];
}
  echo '<table class="level-item">';
  echo '<tr><td class="pb-3">カード番号</td><td>';
  echo $card_num;
  echo '</td></tr>';
  echo '<tr><td class="pb-3">名義</td><td>';
  echo $card_name;
  echo '</td></tr>';
  echo '<tr><td class="pb-3">有効期限</td><td>';
  echo $dl_m,'月',$dl_y,'年';
  echo '</td></tr>';
  echo '<tr><td class="pb-3">セキュリティーコード</td><td>';
  echo $code;
  echo '</td></tr>';
  echo'</table>';
  echo '<nac class="level">';
  echo '<b class="level-item">';
  echo '<a href="U2-2-1.php" class="button is-medium">戻る</a>';
  echo '<p class="has-text-white">______________</p>';
  echo '<a href="U2-2-4.php" class="button is-info is-medium">更新</a>';
  echo '</b>';
  echo '</nac>';
?>
<?php require 'footer.php';?>