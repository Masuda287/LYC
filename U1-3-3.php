<?php session_start();?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>

    <h1>購入確認</h1>
    <div>
    <h2>購入商品</h2>
            <?php
              $pdo=new PDO($connect,USER,PASS);
          $sql=$pdo->prepare('select C.s_id,S.s_name,S.price from Cart as C inner join Shohin as S on C.s_id=S.s_id where C.c_id=?');
          $sql->execute([$_SESSION['customer']['c_id']]);
          foreach($sql as $row){
              echo '<img alt=',$row['s_name'],' src="thumbnail/',$row['s_id'],'.png"><br/>';
              echo $row['s_name'],'<br/>';
              echo $row['price'] ,'円<br/>';
          }
            ?>
    </div>
    <div>
        <h2>支払情報</h2>
        <p>クレジット決済</p>
        <?php
        
        if(isset($_SESSION['Credit'])){
            echo $_SESSION['Credit']['card_num'];
        } else {
            echo $_POST['card_num'];
        }
            
            ?>
    </div>
    <div>
    <h2>お支払い金額</h2>
        <?php    
        $total=0;
        $sql=$pdo->prepare('select C.s_id,S.s_name,S.price from Cart as C inner join Shohin as S on C.s_id=S.s_id where C.c_id=?');
        $sql->execute([$_SESSION['customer']['c_id']]);
        foreach($sql as $row){
               $total+=$row['price'];
        }
        echo    '合計        ',$total,'円';
            ?>
    </div>
<hr>
<?php  echo '<button type="submit"><a href="U1-3-2.php">戻る</a></button><button type="submit"><a href="U1-3-4.php">注文
</a></button>' ?>
  
<?php require 'footer.php'; ?>