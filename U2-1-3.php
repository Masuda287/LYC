<?php session_start(); ?>
<?php require 'header.php';?>
<?php require 'menu.php';?>
<hr>
<div class="has-text-centered">
<div level>
<?php
    echo '<h1 class="is-size-3">更新確認</h1>';
    echo '<table class="level-item">';
    echo '<tr><td class="pb-3">姓名：</td><td>', $_SESSION['Customer']['c_name'],'</td></tr>';
    echo '<tr><td class="pb-3">ユーザー名:</td><td>', $_SESSION['Customer']['u_name'],'</td></tr>';
    echo '<tr><td class="pb-3">生年月日:</td><td>', $_SESSION['Customer']['birthday'],'</td></tr>';
    echo '<tr><td class="pb-3">メールアドレス:</td><td>', $_SESSION['Customer']['address'],'</td></tr>';
    echo '<tr><td class="pb-3">パスワード:</td><td>', $_SESSION['Customer']['password'],'</td></tr>';
    echo '</table>';
    echo '<a href="U2-1-2.php" class="button is-medium">戻る</a>';
    echo '<a class="has-text-white">______________</a>';
    echo '<a href="U2-1-3.php" class="button is-info is-medium">更新</a>';
?>
</div>
<?php require 'footer.php';?>