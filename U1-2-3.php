<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<form action="U1-2-2.php" method="post">
        <input type="text" name="keyword">
        <input type="submit" src="parts/search.img" width="20" heigh="20" alt="検索">
        <a href="U1-3-1-show.php"><img src="parts/cart.jpg" width="100" heigh="100" alt="カート"></a>
    </form>
    <?php
      $pdo=new PDO($connect,USER,PASS);
        $sql1=$pdo->prepare('select * from Shohin where s_id = ? ');
        $sql1->execute([$_GET['s_id']]);
        foreach($sql1 as $row){
        echo    '<h1>',$row['s_name'],'</h1>';
        echo    '<img alt="img" src="thumbnail/',$row['s_id'],'.png" width="100px"><br/>';
        echo    '<button>お試し視聴</button>';
        echo    '電子版<br/>';
        echo    '商品価格　',$row['price'],'円<br/>';
        echo    '<form action="U1-3-1-insert.php" method="post">';
        echo    '<input type="hidden" name="s_id" value="',$row['s_id'],'">';
        echo    '<input type="hidden" name="s_name" value="',$row['s_name'],'">';
        echo    '<input type="hidden" name="price" value="',$row['price'],'">';
        echo    '<input type="submit" value="カートに入れる"></form>';
        echo    $row['s_detail'];
        }
        if(isset($_SESSION['customer'])){
        $sql2=$pdo->prepare('select * from History where c_id=? and s_id=?');
        $sql2->execute([$_SESSION['customer']['c_id'],$_GET['s_id']]);
            $arry=$sql2->fetchAll();
            if(empty($arry)){
                $sql3=$pdo->prepare('insert into History values(?,?,now())');
                $sql3->execute([$_SESSION['customer']['c_id'],$_GET['s_id']]);
            }else{
                $sql4=$pdo->prepare('update History set w_day = now() where c_id=? and s_id=?');
                $sql4->execute([$_SESSION['customer']['c_id'],$_GET['s_id']]);
            }
        }
    ?>
<?php require 'footer.php'; ?>