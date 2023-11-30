<?php session_start();?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>

    <h1>支払い方法</h1>
    <div>
    <h2>支払い方法を確認してください</h2>
    <p>クレジット決済</p>
            <?php
              $pdo=new PDO($connect,USER,PASS);
                echo 'カード番号',$_SESSION['Credit']['card_num'],'</br>';
                echo '名義',$_SESSION['Credit']['card_name'],'</br>';
                echo '有効年月',$_SESSION['Credit']['dl_m'],'月',$_SESSION['Credit']['dl_y'],'年</br>';
                echo 'セキュリティコード',$_SESSION['Credit']['code'],'</br>';
            ?>
    </div>

<?php   
        echo '<button type="button"><a href="U1-3-1-show.php">戻る</a></button>';
        echo '<button type="button"><a href="U1-3-3.php">注文確認</a></button>';
?>
  
<?php require 'footer.php'; ?>