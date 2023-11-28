<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php';?>
<?php require 'menu.php';?>
<h1>クレジットカード情報</h1>
<?php

if (isset($_SESSION['Credit'])){
  

  echo '<table>';
  echo '<tr><td>カード番号</td><td>';
  echo $_SESSION['Credit']['card_num'];
  echo '</td></tr>';
  echo '<tr><td>名義</td><td>';
  echo $_SESSION['Credit']['card_name'];
  echo '</td></tr>';
  echo '<tr><td>有効期限</td><td>';
  echo $_SESSION['Credit']['dl_m'],'月',$_SESSION['Credit']['dl_y'],'年';
  echo '</td></tr>';
  echo '<tr><td>セキュリティーコード</td><td>';
  echo $_SESSION['Credit']['code'];
  echo '</td></tr>';
  echo'</table>';
  echo '<p><a href="U2.php"><button type="button">戻る</a></button><a href="U2-2-5.php"><button type="submit">更新</button></a></p>';
}
?>