<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>
<div name="aaa">
    <p>新着商品</p>
    <?php
     $pdo=new PDO('mysql:host=mysql219.phy.lolipop.lan;dbname=LAA1518086-team5;charaset=utf8',
     'LAA1518086','inhome');
     $sql=$pdo->prepare('select * from Shohin where s_id=?');
     $sql->execute([$_GET['s_id']]);
     foreach($sql as $row){
        for ($i=1;$i<=5;$i++) {
            echo '<a href="index.php">';
            echo '<li>';
            echo '<pre>';
            echo '<img alt="img" src="img/',$row['s_id'],'.png" width="100px">';
            echo '</a>';
            echo '<p>商品名：</p>',$row['s_name'];
            echo  '<p>価格：</p>',$row['price'];
            echo '</li>';
        }
     }
    
    ?>
</div>
    <?php require 'footer.php'; ?>