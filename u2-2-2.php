<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php';?>
<?php require 'menu.php'; ?>

<h1>登録情報確認</h1>

<?php
  echo '<table>';
  echo '<tr><td>カード番号</td><td>';
  echo $_SESSION['toroku']['card_num'];
  echo '<tr><td>名義</td><td>';
  echo $_SESSION['toroku']['card_name'];
  echo '</td></tr>';
  echo '<tr><td>有効期限</td><td>';
  echo $_SESSION['toroku']['dl_m'],'月',$_SESSION['toroku']['dl_y'],'年';
  echo '</td></tr>';
  echo '<tr><td>セキュリティーコード</td><td>';
  echo $_SESSION['toroku']['code'];
  echo '</td></tr>';
  echo'</table>';
  echo '<p><a href="U2-2-1.php"><button type="button">戻る</button></a><a href="U2-2-3.php"><button type="button">登録</button></a></p>';


?>

<?php require 'footer.php';?>