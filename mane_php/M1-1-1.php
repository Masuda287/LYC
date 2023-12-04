<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<p class="has-text-centered"><a href="M1.php" class="button is-default is-size-2">inHome管理画面</a></p><br>
<h1 class="has-text-centered is-size-3">ユーザ閲覧</h1><br>
<?php
$pdo=new PDO($connect,USER,PASS);
echo '<table border="1" class="M1-1-1-table">';
echo '<tr><th>顧客番号</th><th>顧客名</th><th>メールアドレス</th><th>削除申請</th></tr>';
$sql=$pdo->query('select * from Customer');
foreach ($sql as $row){
echo '<tr>';
echo '<td>',$row['c_id'],'</td>';
echo '<td>',$row['c_name'],'</td>';
echo '<td>',$row['address'],'</td>';
echo '<td>';
if($row['delete_apply']==0){
echo '<form action="M1-1-2.php"method="post">';
echo '<input type="hidden" name="c_id" value="',$row['c_id'],'">';
echo '<input type="hidden" name="delete_apply" value="',$row['delete_apply'],'">';
echo '☐<button type="submit">削除</button>';
echo '</form>';
}else{
echo '<form action="M1-1-2.php"method="post">';
echo '<input type="hidden" name="c_id" value="',$row['c_id'],'">';
echo '<input type="hidden" name="delete_apply" value="',$row['delete_apply'],'">';
echo '☑<button type="submit">削除</button>';
echo '</form>';
}
echo '</td>';
echo '</tr>';
}
?>
<?php require 'footer.php'; ?>
