<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php';?>
<?php require 'menu.php'; ?>

<h1>クレジット更新確認</h1>
<?php



  echo '<table>';
  echo '<tr><td>カード番号</td><td>';
  echo $_SESSION['kosin']['card_num'];
  echo '</td></tr>';
  echo '<tr><td>名義</td><td>';
  echo $_SESSION['kosin']['card_name'];
  echo '</td></tr>';
  echo '<tr><td>有効期限</td><td>';
  echo $_SESSION['kosin']['dl_m'],'月',$_SESSION['kosin']['dl_y'],'年';
  echo '</td></tr>';
  echo '<tr><td>セキュリティーコード</td><td>';
  echo $_SESSION['kosin']['code'];
  echo '</td></tr>';
  echo'</table>';
  echo '<p><a href="U2-2-5.php"><button type="button">戻る</button></a><a href="U2-2-7.php"><button type="button">確定</button></a></p>';

?>

<?php require 'footer.php';?>