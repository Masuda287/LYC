<?php require 'db-connect.php';?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>

<div class="has-text-centered">
<h1 class="is-size-3 pb-3">購入完了</h1>
<div class="pt-6">ご購入ありがとうございます。</div>
<div class="pt-6">
<a href="U1.php" class="button is-info ">トップへ</a>
</div>



<?php
$sql=$pdo->prepare('insert into Purchase values(null,?,now())');
$sql->execute([$_SESSION['customer']['c_id']]);
$i=$pdo->lastInsertId();
$sql=$pdo->prepare('select * from Cart where c_id=?');
$sql->execute([$_SESSION['customer']['c_id']]);
foreach($sql as $row){
    $sql=$pdo->prepare('insert into Purchase_detail values(?,?)');
        $sql->execute([$i,$row['s_id']]);
}

?>
</div>
<?php require 'footer.php'; ?>



