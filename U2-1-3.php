<?php session_start(); ?>
<?php require 'header.php';?>
<?php require 'menu.php';?>
<hr>
<?php


    echo '<h1>更新確認</h1>';
    echo '<table>';
    echo '<tr><td>姓名：</td><td>', $_SESSION['u_kosin']['u_name'],'</td></tr>';
    echo '<tr><td>ユーザー名:</td><td>', $_SESSION['u_kosin']['login'],'</td></tr>';
    echo '<tr><td>生年月日:</td><td>', $_SESSION['u_kosin']['birthday'],'</td></tr>';
    echo '<tr><td>メールアドレス:</td><td>', $_SESSION['u_kosin']['mail'],'</td></tr>';
    echo '<tr><td>パスーワード:</td><td>', $_SESSION['u_kosin']['password'],'</td></tr>';
    echo '</table>';
    echo '<p><button type="submit"><a href="U2-1-2.php">戻る</a></button><button type="submit"><a href="U2-1-4.php">更新</a></button></p>'
?>
<?php require 'footer.php';?>