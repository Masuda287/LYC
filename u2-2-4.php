<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php';?>
<?php require 'menu.php';?>
<?php
$card_num=$card_name=$dl_m=$dl_y=$code='';
if (isset($_SESSION['customer'])){
    $card_num=$_SESSION['customer']['card_num'];
    $card_name=$_SESSION['customer']['card_name'];
    $dl_m=$_SESSION['customer']['dl_m'];
    $dl_y=$_SESSION['customer']['dl_y'];
    $code=$_SESSION['customer']['code'];
}
  echo '<table>';
  echo '<tr><td>カード番号</td><td>';
  echo $card_num;
  echo '</td></tr>';
  echo '<tr><td>名義</td><td>';
  echo $card_name;
  echo '</td></tr>';
  echo '<tr><td>有効期限</td><td>';
  echo $dl_m,'月',$dl_y,'年';
  echo '</td></tr>';
  echo '<tr><td>セキュリティーコード</td><td>';
  echo $code;
  echo '</td></tr>';
  echo'</table>';
  echo '<p><button type="submit"><a href="U2-2-1.php">戻る</a></button><button type="submit"><a href="U2-2-4.php">更新</a></button></p>';

?>