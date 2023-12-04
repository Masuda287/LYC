<?php session_start();?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
    <div class="has-text-centered">
    <div level>
    <h1 class="is-size-3">支払い方法</h1>
    <div>
    <h2 class="is-size-4">支払い方法を確認してください</h2>

            <?php
        echo '<table class="level-item">';
                echo '<tr><td class="pb-3 level-left">クレジット決済</td></tr>';
                echo '<tr><td class="pb-3">カード番号',$_SESSION['credit']['card_num'],'</td></tr>';
                echo '<tr><td class="pb-3">名義',$_SESSION['credit']['card_name'],'</td></tr>';
                echo '<tr><td class="pb-3">有効年月',$_SESSION['credit']['dl_m'],'月',$_SESSION['credit']['dl_y'],'年</td></tr>';
                echo '<tr><td class="pb-3">セキュリティコード',$_SESSION['credit']['code'],'</td></tr>';
        echo '</table>';
            ?>
    </div>

<?php   
        echo '<a href="U1-3-1-show.php" class="button is-medium">戻る</a>';
        echo '<a class="has-text-white">______________</a>';
        echo '<a href="U1-3-3.php" class="button is-info is-medium">注文確認</a>';
?>
    </div>
  
<?php require 'footer.php'; ?>