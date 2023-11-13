<?php session_start();?>
<?php require 'header.php';?>
<?php require 'menu.php'?>
<hr>
<?php
if(isset($_SESSION['Customer'])){
    echo '<p><button type="submit"><a href="U2-1-1.php">ユーザー情報</a></button></p>';
    echo '<p><button type="submit"><a href="yu-za-jyouhou.php">クレジット登録</a></button></p>';
    echo '<p><button type="submit"><a href="yu-za-jyouhou.php">閲覧履歴</a></button></p>';
    echo '<p><button type="submit"><a href="yu-za-jyouhou.php">ライブラリ</a></button></p>';
    echo '<p><button type="submit"><a href="yu-za-jyouhou.php">ユーザー情報削除申請</a></button></p>';

}
else{
    echo 'ログインしてください。';
}
   
?>
<?php require 'footer.php';?>
