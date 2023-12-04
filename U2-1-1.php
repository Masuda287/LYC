<?php require 'header.php';?>
<?php require 'menu.php';?>
<hr>
    <div class="has-text-centered">
    <div item>
<?php
    echo '<h1 class="is-size-3">ユーザー情報</h1>';
    echo '<table class="level-item">';
    echo '<tr><td class="pb-3">姓名：</td><td></td></tr>';
    echo '<tr><td class="pb-3">ユーザー名:</td><td></td></tr>';
    echo '<tr><td class="pb-3">生年月日:</td><td></td></tr>';
    echo '<tr><td class="pb-3">メールアドレス:</td><td></td></tr>';
    echo '<tr><td class="pb-3">パスワード:</td><td></td></tr>';
    echo '</table>';
    echo '<a href="U2.php" class="button is-medium">戻る</a>';
    echo '<a class="has-text-white">______________</a>';
    echo '<a href="U2-1-2.php" class="button is-info is-medium">確認</a>';
    echo '</div>'
?>
<?php require 'footer.php';?>