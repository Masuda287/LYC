<?php require 'db-connect.php'; ?>
<?php require 'header.php'?>
<p class="has-text-centered"><a href="M1.php" class="button is-default is-size-2">inHome管理画面</a></p><br>
<h1 class="has-text-centered is-size-3">削除確認</h1><br>
<?php
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare('select * from Customer where c_id=?');
$sql->execute([$_POST['c_id']]);
foreach ($sql as $row){
echo '<p class="has-text-centered">顧客番号',$row['c_id'],'</p>';
echo '<br>';
echo '<p class="has-text-centered">顧客名',$row['c_name'],'</p>';
echo '<br>';
echo '<p class="has-text-centered">メールアドレス',$row['address'],'</p>';
echo '<br>';
if($_POST['delete_apply']==0){
    echo '<p class="has-text-centered">削除申請なし</p>';
}else{
    echo '<p class="has-text-centered">削除申請あり</p>';
}
echo '<br>';
}
?>
<?php
echo '<p class="has-text-danger has-text-centered">削除してもよろしいですか</p><br>';
echo '<nac class="level">';
echo '<b class="level-item">';
echo '<a href="M1-1-1.php" class="button is-medium">戻る</a>';
echo '<p class="has-text-white">______________</p>';
echo '<form action="M1-1-3.php"method="post">';
echo '<input type="hidden" name="c_id" value="',$_POST['c_id'],'">';
echo '<button type="submit" class="button is-info is-medium">削除</button>';
echo '</form>';
echo '</b>';
echo '</nac>';
?>
<?php require 'footer.php'; ?>