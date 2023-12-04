<?php require 'header.php';?>
<?php require 'menu.php'?>
<hr>
<?php
    if(isset($_SESSION['Customer'])){
    echo '<div class="has-text-centered">';
    echo '<a href="U2-1-1.php" class="button is-large is-info"><p class="has-text-info">///////////</p>ユーザー情報<p class="has-text-info">///////////</p></a><br><br>';
    echo '<a href="U2-1-1.php" class="button is-large is-info"><p class="has-text-info">//////////</p>クレジット登録<p class="has-text-info">//////////</p></a><br><br>';
    echo '<a href="U2-1-1.php" class="button is-large is-info"><p class="has-text-info">//////////////</p>閲覧履歴<p class="has-text-info">//////////////</p></a><br><br>';
    echo '<a href="U2-1-1.php" class="button is-large is-info"><p class="has-text-info">/////////////</p>ライブラリ<p class="has-text-info">/////////////</p></a><br><br>';
    echo '<a href="U2-1-1.php" class="button is-large is-info"><p class="has-text-info">///////</p>ユーザー情報削除申請<p class="has-text-info">///////</p></a>';
    echo '</div>';
}
else{
    echo 'ログインしてください。';
}   
?>
<?php require 'footer.php';?>
