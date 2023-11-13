<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php';?>
<h1>登録情報確認</h1>
<?php
  echo '<table>';
  echo '<tr><td>カード番号</td><td>';
  echo $_POST['card_num'];
  echo '</td></tr>';
  echo '<tr><td>名義</td><td>';
  echo $_POST['card_name'];
  echo '</td></tr>';
  echo '<tr><td>有効期限</td><td>';
  echo $_POST['dl_m'],'月',$_POST['dl_y'],'年';
  echo '</td></tr>';
  echo '<tr><td>セキュリティーコード</td><td>';
  echo $_POST['code'];
  echo '</td></tr>';
  echo'</table>';
  echo '<p><button type="submit"><a href="u2-2-1.php">戻る</a></button><button type="submit"><a href="u2-2-3.php">確定</a></button></p>';

?>

<?php require 'footer.php';?>