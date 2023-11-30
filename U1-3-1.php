
<?php
$total=0;
$count=0;

 if(isset($_SESSION['customer'])){
    $sql3=$pdo->prepare('select C.s_id,S.s_name,S.price from Cart as C inner join Shohin as S on C.s_id=S.s_id where C.c_id=?');
    $sql3->execute([$_SESSION['customer']['c_id']]);
    $arry2=$sql3->fetchAll();
    if(empty($arry2)){
        echo    'カートに商品がありません';
    }else{
        $sql4=$pdo->prepare('select C.s_id,S.s_name,S.price from Cart as C inner join Shohin as S on C.s_id=S.s_id where C.c_id=?');
        $sql4->execute([$_SESSION['customer']['c_id']]);
        foreach($sql4 as $row){
            echo '<a href="U1-2-3.php?s_id=',$row['s_id'],'"><img alt=',$row['s_name'],' src="thumbnail/',$row['s_id'],'.png"></a><br/>';
            echo $row['s_name'],'<br/>';
            echo $row['price'] ,'円<br/>';
            echo '<form action="U1-3-1-delete.php" method="post">';
            echo '<input type="hidden" name="s_id" value=',$row['s_id'],'>';
            echo '<input type="submit" value="削除"></form>';
            $total+=$row['price'];
            $count++;
        }
        echo   '購入数<br/>';
        echo   $count,'点<br/>';
        echo   '合計金額<br/>';
        echo   $total,'円<br/>';
        echo   '<form action="U1-3-1-term.php"><input type="submit" value="購入"></form>';
    }
 }else{
    if(!empty($_SESSION['product'])){
    foreach($_SESSION['product'] as $id => $product){
        echo '<a href="U1-2-3.php?s_id=',$id,'"><img alt=',$product['s_name'],' src="thumbnail/',$id,'.png"></a><br/>';
        echo $product['s_name'],'<br/>';
        echo $product['price'],'<br/>';
        echo '<form action="U1-3-1-delete.php" method="post">';
        echo '<input type="hidden" name="s_id" value=',$id,'>';
        echo '<input type="submit" value="削除"></form>';
        $total+=$product['price'];
        $count++;
    }
      echo   '購入数<br/>';
      echo   $count,'点<br/>';
      echo   '合計金額<br/>';
      echo   $total,'円<br/>';
      echo   '<form action="U1-1-1.php"><input type="submit" value="購入"></form>';
    }else{
        echo    'カートに商品がありません';
    }
 }
?>
