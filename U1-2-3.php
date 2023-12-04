<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>

    <form action="U1-2-2.php" method="post">
        <br>
        <b class="level-item">
        <input type="text" name="keyword" class="column is-three-quarters">
        <button class="button is-medium">🔍</button>
        <a href="U1-3-1-show.php" class="u1-cart">🛒</a>
        </b>
    </form>
    <?php
         $pdo=new PDO($connect,USER,PASS);
         $sql1=$pdo->prepare('select * from Shohin where s_id = ? ');
         $sql1->execute([$_GET['s_id']]);
         foreach($sql1 as $row){
        echo    '<h1>',$row['s_name'],'</h1>';
        echo    '<div class="has-text-weight-bold has-text-info U1-2-3-zya">ジャンル</div>';
        echo    '<img alt="img" src="thumbnail/',$row['s_id'],'.png" class="U1-2-3-img">';
        echo    '</div>';
        echo    '<div class="U1-2-3-text has-text-centered pb-6">電子版<br/>';
        echo    '商品価格　',$row['price'],'円<br/>';
        echo    '<form action="U1-3-1-insert.php" method="post">';
        echo    '<input type="hidden" name="s_id" value="',$row['s_id'],'">';
        echo    '<input type="hidden" name="s_name" value="',$row['s_name'],'">';
        echo    '<input type="hidden" name="price" value="',$row['price'],'">';
        echo    '<a href="U1-3-1-insert.php" class="button is-meddium">カートに入れる</a></form>';
        echo    '</div>';
        echo    '</form>';
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