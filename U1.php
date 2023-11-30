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
            echo    '<br/><a href="U1-2-1.php">カテゴリ</a>';
            echo    '<br/><img alt="image" src="thumbnail/0.png"><br/>';
            $sql10=$pdo->query('select * from Recommend');
            foreach($sql10 as $row){
            echo    '<img alt="image" src="thumbnail/',$row['s_id'],'.png"><br/>';
            }
            echo    '<p>新着商品</p>';
            echo    '<table><tr><th></th><th></th><th></th><th></th><th></th></tr><tr>';
            $sql21=$pdo->query('select * from Shohin ORDER BY s_toroku ASC limit 5');
            foreach($sql21 as $row){
                echo    '<td><a href="U1-2-3.php?s_id=',$row['s_id'],'"><img alt=',$row['s_name'],' src="thumbnail/',$row['s_id'],'.png"></a></td>';
            }
            echo    '</tr><tr>';
            $sql22=$pdo->query('select * from Shohin ORDER BY s_toroku ASC limit 5');
            foreach($sql22 as $row){
                echo    '<td><a href="U1-2-3.php?s_id=',$row['s_id'],'">',$row['s_name'],'</a></td>';
            }
            echo    '</tr><tr>';
            $sql23=$pdo->query('select * from Shohin ORDER BY s_toroku ASC limit 5');
              foreach($sql23 as $row){
                echo    '<td><a href="U1-2-3.php?s_id=',$row['s_id'],'">',$row['price'],'</a></td>';
            }
            echo    '</tr></table>';
    ?>
<?php require 'footer.php'; ?>