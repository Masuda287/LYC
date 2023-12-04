<?php
    const SERVER = 'mysql216.phy.lolipop.lan';
    const DBNAME = 'LAA1518086-test';
    const USER = 'LAA1518086';
    const PASS = 'Pass0728';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<?php require 'header.php'?>
<?php require 'menu.php' ?>
<form action="U1-2-2.php" method="post">
        <br>
        <b class="level-item">
        <input type="text" name="keyword" class="column is-three-quarters">
        <button class="button is-medium">🔍</button>
        <a href="U1-3-1.php" class="u1-cart">🛒</a>
        </b>
        
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
    $sql=$pdo->query('select s_id,s_name,price from Shohin');
    $img=$sql->fetchAll();
    $o=4;
    echo    '<table class="level-item"><tr>';
    for($i=0;$i<count($img);$i++){
        echo '<td>';
        echo '<a href="U1-2-3.php?s_id=',$img[$i]['s_id'],'" class="mr-5">';
        echo '<img src="img/',$img[$i]['s_id'],'.png" class="u1-2-2-img"><br/>';
        echo '</a>';
        echo '<a href="U1-2-3.php?s_id=',$img[$i]['s_id'],'">';
        echo $img[$i]['s_name'],'<br/>';
        echo '</a>';
        echo '<a href="U1-2-3.php?s_id=',$img[$i]['s_id'],'">';
        echo $img[$i]['price'],'<br/>';
        echo '</a>';
        echo  '<form action="U1-3-1-insert.php" method="post">';
        echo  '<input type="hidden" name="s_id" value="',$img[$i]['s_id'],'">';
        echo  '<input type="hidden" name="s_name" value="',$img[$i]['s_name'],'">';
        echo  '<input type="hidden" name="price" value="',$img[$i]['price'],'">';
        echo  '<input type="submit" value="カートに入れる" class="button is-warning"></form>';
        echo '</td>';
        if($i==$o){
            echo '</tr><tr>';
            $o=$o+5;
        }
    }
    echo    '</tr></table>';
   
?>
<?php require 'footer.php' ?>
<img src="" alt="">
