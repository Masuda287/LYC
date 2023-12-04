<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<p class="has-text-centered"><a href="M1.php" class="button is-default is-size-2">inHome管理画面</a></p><br>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('select * from History where c_id=?');
    $sql->execute([$_POST['c_id']]);
    $history=$sql->fetchAll();
    if(isset($history)){
        $sql=$pdo->prepare('delete from History where c_id=?');
        $sql->execute([$_POST['c_id']]);
    }
    $sql=$pdo->prepare('select * from Credit where c_id=?');
    $sql->execute([$_POST['c_id']]);
    $credit=$sql->fetchAll();
    if(isset($credit)){
        $sql=$pdo->prepare('delete from Credit where c_id=?');
        $sql->execute([$_POST['c_id']]);
    }
    $sql=$pdo->prepare('select Pd.p_id from Purchase_detail as Pd inner join Purchase as P on Pd.p_id=P.p_id where P.c_id=?');
    $sql->execute([$_POST['c_id']]);
    foreach($sql as $row){
        $sql=$pdo->prepare('delete from Purchase_detail as Pd inner join Purchase as P on Pd.p_id=P.p_id where P.c_id=?');
        $sql->execute([$row['Pd.p_id']]);
    }
    $sql=$pdo->prepare('select * from Purchase where c_id=?');
    $sql->execute([$_POST['c_id']]);
    $purchase=$sql->fetchAll();
    if(isset($purchase)){    
        $sql=$pdo->prepare('delete from Purchase where c_id=?');
        $sql->execute([$_POST['c_id']]);
    }
    $sql=$pdo->prepare('select * from Cart where c_id=?');
    $sql->execute([$_POST['c_id']]);
    $cart=$sql->fetchAll();
    if(isset($cart)){
        $sql=$pdo->prepare('delete from Cart where c_id=?');
        $sql->execute([$_POST['c_id']]);  
    }
    $sql=$pdo->prepare('delete from Customer where c_id=?');
    $sql->execute([$_POST['c_id']]);
?>
<h1 class="has-text-centered is-size-3">ユーザー削除を完了しました。</h1><br>
<br><br>
<br><br>
<b class="level">
<c class="level-item">
<a href="M1-1-1.php" class="button is-info">ユーザー閲覧</a>
</c>
</b>
<?php require 'footer.php'; ?>