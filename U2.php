<?php session_start();?>
<?php require 'header.php';?>
<?php require 'menu.php'?>
<hr>
<hr>
<?php
if(isset($_SESSION['customer'])){
    echo '<p><button type="submit"><a href="U2-1-1.php">ユーザー情報</a></button></p>';
    echo '<p><button type="submit"><a href="U2-term.php">クレジット登録</a></button></p>';
    echo '<p><button type="submit"><a href="U2-3.php">閲覧履歴</a></button></p>';
    echo '<p><button type="submit"><a href="U2-4.php">ライブラリ</a></button></p>';
    echo '<p><button type="submit"><a href="U2-5-1.php">ユーザー情報削除申請</a></button></p>';

}
else{
    echo 'ログインしてください。';
}

?>
<?php require 'footer.php';?>
