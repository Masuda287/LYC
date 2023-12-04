<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php';?>
<?php require 'menu.php'; ?>
<div class="has-text-centered">
<div level>
<h1 class="is-size-3">クレジット更新確認</h1>
<?php

  echo '<table class="level-item">';
  echo '<tr><td class="pb-3">カード番号</td><td>';
  echo $_SESSION['kosin']['card_num'];
  echo '</td></tr>';
  echo '<tr><td class="pb-3">名義</td><td>';
  echo $_SESSION['kosin']['card_name'];
  echo '</td></tr>';
  echo '<tr><td class="pb-3">有効期限</td><td>';
  echo $_SESSION['kosin']['dl_m'],'月',$_SESSION['kosin']['dl_y'],'年';
  echo '</td></tr>';
  echo '<tr><td class="pb-3">セキュリティーコード</td><td>';
  echo $_SESSION['kosin']['code'];
  echo '</td></tr>';
  echo'</table>';
  echo '<a href="U1-3-2.php" class="button is-medium">戻る</a>';
  echo '<a class="has-text-white">______________</a>';
  echo '<a href="U2-2-2.php" class="button is-info is-medium">確認</a>';

?>
</div>
<?php require 'footer.php';?>