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
    if(isset($_GET['category1'])){
        $sql=$pdo->prepare('select * from Shohin where category1 = ? order by s_id asc limit 20');
        $sql->execute([$_GET['category1']]);
    }else if(isset($_GET['category2'])){
        $sql=$pdo->prepare('select * from Shohin where category2 = ? order by s_id asc limit 20');
        $sql->execute([$_GET['category2']]);
    }else if(isset($_POST['keyword'])){
        $sql=$pdo->prepare('select * from Shohin where s_name like ? order by s_id asc limit 20');
        $sql->execute(['%'.$_POST['keyword'].'%']);
    }else{
        $sql=$pdo->query('select * from Shohin order by s_id asc limit 20');
    }
    foreach($sql as $row){
        echo '<a href="U1-2-3.php?s_id=',$row['s_id'],'">';
        echo '<img alt="img" src="thumbnail/',$row['s_id'],'.png" width="100px">';
        echo '<br/>商品名:',$row['s_name'];
        echo '<br/>価格：',$row['price'];
        echo '</a>';
        echo  '<form action="U1-3-1-insert.php" method="post">';
        echo  '<input type="hidden" name="s_id" value="',$row['s_id'],'">';
        echo  '<input type="hidden" name="s_name" value="',$row['s_name'],'">';
        echo  '<input type="hidden" name="price" value="',$row['price'],'">';
        echo  '<input type="submit" value="カートに入れる"></form>';
    }

?>
<?php require 'footer.php'; ?>