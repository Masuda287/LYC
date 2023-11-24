<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php';?>
<?php require 'menu.php';?>
<h1>クレジットカード情報</h1>
<?php
$card_num=$card_name=$dl_m=$dl_y=$code='';
if (isset($_SESSION['Credit'])){
    $card_num=$_SESSION['Credit']['card_num'];
    $card_name=$_SESSION['Credit']['card_name'];
    $dl_m=$_SESSION['Credit']['dl_m'];
    $dl_y=$_SESSION['Credit']['dl_y'];
    $code=$_SESSION['Credit']['code'];
    $URL="U2-2-5.php?card_num={$card_num}&card_name={$card_name}&dl_m={$dl_m}&dl_y={$dl_y}&code={$code}";
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
  echo '<p><button type="submit"><a href="u2-2-1.php">戻る</a></button><button type="submit"><a href="',$URL,'">更新</a></button></p>';

?>