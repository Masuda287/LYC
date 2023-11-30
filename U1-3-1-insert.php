<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
  $pdo=new PDO($connect,USER,PASS);
    if(isset($_SESSION['customer'])){
        $sql1=$pdo->prepare('select * from Cart where c_id=? and s_id = ?');
        $sql1->execute([$_SESSION['customer']['c_id'],$_POST['s_id']]);
        $arry1=$sql1->fetchAll();
        if(empty($arry1)){
            $sql2=$pdo->prepare('insert into Cart values(?,?)');
            $sql2->execute([$_SESSION['customer']['c_id'],$_POST['s_id']]);
            echo    '<p>カートに商品を追加しました</p>';
        }else{
            echo    '<p>既に同一商品がカートに入っています';
        }
    }else{
        if(!isset($_SESSION['product'])){
            $_SESSION['prouct']=[];
        }
       if(!isset($_SESSION['product'][$_POST['s_id']])){
            $_SESSION['product'][$_POST['s_id']]=[
                's_id'=>$_POST['s_id'],
                's_name'=>$_POST['s_name'],
                'price'=>$_POST['price']
            ];
            echo    '<p>カートに商品を追加しました</p>';
       }else{
        echo    '<p>既に同一商品がカートに入っています';
        }
    }
    echo    '<hr>';
    require 'U1-3-1.php';
    ?>
 <?php require 'footer.php'; ?>