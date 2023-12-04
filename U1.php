<?php
    const SERVER = 'mysql216.phy.lolipop.lan';
    const DBNAME = 'LAA1518086-test';
    const USER = 'LAA1518086';
    const PASS = 'Pass0728';
 
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<?php require 'header.php' ?>
<?php require 'menu.php' ?>
    <form action="U1-2-2.php" method="post">
        <br>
        <b class="level-item">
        <input type="text" name="keyword" class="column is-three-quarters">
        <button class="button is-medium">🔍</button>
        <a href="U1-3-1.php" class="u1-cart">🛒</a>
        </b>
        
    </form>
    <?php   $pdo=new PDO($connect,USER,PASS);
            echo    '<a href="U1-2-1.php" class="u1-category">ジャンル</a>';
            echo    '<br/><img alt="image" src="img/1.png" class="u1-img"></br>';
            echo    '<p class="u1-new">新着商品</p>';
            echo    '<table class="level-item">';
            $sql21=$pdo->query('select * from Shohin ORDER BY s_toroku ASC limit 5');
            foreach($sql21 as $row){
                echo    '<td>';
                echo    '<a href="U1-2-3.php?s_id=',$row['s_id'],'">';
                echo    '<img alt=',$row['s_name'],' src="img/',$row['s_id'],'.png">';
                echo    '</a>';
                echo    '<b class="has-text-white">___</b>';
                echo    '</a>';

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
            $sql10=$pdo->query('select * from Recommend');
            foreach($sql10 as $row){
            echo    '<td>';
            echo    '<a href="U1-2-3.php?s_id=',$row['s_id'],'">';
            echo    '<img alt="image" src="img/',$row['s_id'],'.png" class="u1-image',$row['re_id'],'">';
            echo    '</a>';
            echo    '</a>';
            }
    ?>
<?php require 'footer.php' ?>