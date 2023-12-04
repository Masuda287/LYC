<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'?>
<p class="has-text-centered"><a href="M1.php" class="button is-default is-size-2">inHome管理画面</a></p><br>
<h1 class="has-text-centered is-size-3">オススメ商品選択</h1><br>
<?php
$pdo=new PDO($connect,USER,PASS);
$n=0;
if(isset($_SESSION['n'])){
    $n=$_SESSION['n'];
}
    if($n==1){
        echo    'オススメ1を変更しました';
    }else if($n==2){
        echo    'オススメ2を変更しました';
    }else if($n==3){
        echo    'オススメ3を変更しました';
    }else if($n==4){
        echo    'すでにオススメに登録されている商品です';
    }
echo '<table>';
echo '<tr>';
echo '<td>';
echo '<p>オススメ1</p>';
$sql=$pdo->query('select R.s_id,S.s_name from Recommend as R inner join Shohin as S on R.s_id=S.s_id where re_id=1');
$obj=$sql->fetch();
echo '<img alt=',$obj['s_name'],' src="../thumbnail/',$obj['s_id'],'.png">';
echo '<form action="M4-update.php" method="post">';
echo '<input type="hidden" name="n" value=1>';
echo '<select name="recommend">';
$sql=$pdo->query('select * from Shohin');
foreach($sql as $row){
    echo '<option value="',$row['s_id'],'"';
    $sql=$pdo->prepare('select * from Recommend where re_id=1 and s_id=?');
    $sql->execute([$row['s_id']]);
    $arry=$sql->fetchAll();
    if(isset($arry)){
        //echo 'selected';
    }
    echo '>',$row['s_name'],'</option>';
}
echo '</select></br>';
echo '<input type="submit" value="更新"></form></td>';
echo '<td>';
echo '<p>オススメ2</p>';
$sql=$pdo->query('select R.s_id,S.s_name from Recommend as R inner join Shohin as S on R.s_id=S.s_id where re_id=2');
$obj=$sql->fetch();
echo '<img alt=',$obj['s_name'],' src="../thumbnail/',$obj['s_id'],'.png">';
echo '<form action="M4-update.php" method="post">';
echo '<input type="hidden" name="n" value=2>';
echo '<select name="recommend">';
$sql=$pdo->query('select * from Shohin');
foreach($sql as $row){
    echo '<option value="',$row['s_id'],'"';
    $sql=$pdo->prepare('select * from Recommend where re_id=2 and s_id=?');
    $sql->execute([$row['s_id']]);
    $arry=$sql->fetchAll();
    if(isset($arry)){
        //echo 'selected';
    }
    echo '>',$row['s_name'],'</option>';
}
echo '</select></br>';
echo '<input type="submit" value="更新"></form></td>';
echo '<td>';
echo '<p>オススメ3</p>';
$sql=$pdo->query('select R.s_id,S.s_name from Recommend as R inner join Shohin as S on R.s_id=S.s_id where re_id=3');
$obj=$sql->fetch();
echo '<img alt=',$obj['s_name'],' src="../thumbnail/',$obj['s_id'],'.png">';
echo '<form action="M4-update.php" method="post">';
echo '<input type="hidden" name="n" value=3>';
echo '<select name="recommend">';
$sql=$pdo->query('select * from Shohin');
foreach($sql as $row){
    echo '<option value="',$row['s_id'],'"';
    $sql=$pdo->prepare('select * from Recommend where re_id=3 and s_id=?');
    $sql->execute([$row['s_id']]);
    $arry=$sql->fetchAll();
    if(isset($arry)){
        //echo 'selected';
    }
    echo '>',$row['s_name'],'</option>';
}
echo '</select></br>';
echo '<input type="submit" value="更新"></form></td>';
echo '</tr>';
echo '</table>';
echo '<a href="M1.php?"><button type="button">戻る</button></a>'
?>
<?php require 'footer.php'; ?>
