<?php session_start();?>
<?php require 'header.php';?>
<?php require 'menu.php';?>
<?php require 'db-connect.php';?>
<?php

    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('select H.s_id,S.s_name,S.price from History as H inner join Shohin as S  on H.s_id=S.s_id where H.c_id=? order by H.w_day asc limit 20 ');
    $sql->execute([$_SESSION['customer']['c_id']]);
    foreach($sql as $row){
        echo '<a href="U1-2-3.php?s_id=',$row['s_id'],'">';
        echo '<img alt=',$row['s_name'],' src="thumbnail/',$row['s_id'],'.png" width="100px">';
        echo '<br/>商品名:',$row['s_name'];
        echo '<br/>価格：',$row['price'];
        echo '</a>';
        echo  '<form action="U1-3-1-insert.php" method="post">';
        echo  '<input type="hidden" name="s_id" value="',$row['s_id'],'">';
        echo  '<input type="submit" value="カートに入れる"></form>';
    }

?>
<?php require 'footer.php' ?>
