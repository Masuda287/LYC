<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<p class="has-text-centered"><a href="M1.php" class="button is-default is-size-2">inHome管理画面</a></p><br>
<h1 class="has-text-centered is-size-3">商品一覧</h1><br>
<?php
$pdo=new PDO($connect,USER,PASS);
echo '<table border="1" class="M2-2-table">';
echo '<tr><th>商品番号</th><th>商品名</th><th>カテゴリー1</th><th>カテゴリー2</th><th>価格</th><th>更新</th><th>削除</th></tr>';
$sql=$pdo->query('select * from Shohin');
foreach ($sql as $row){
echo '<tr>';
echo '<td>',$row['s_id'],'</td>';
echo '<td>',$row['s_name'],'</td>';
echo '<td>',$row['category1'],'</td>';
echo '<td>',$row['category2'],'</td>';
echo '<td>',$row['price'],'</td>';
echo '<td>';
echo '<form action="M2-3-1.php"method="post">';
echo '<input type="hidden" name="s_id" value="',$row['s_id'],'">';
echo '<button type="submit">更新</button>';
echo '</form>';
echo '</td>';
echo '<td>';
echo '<form action="M2-4-1.php"method="post">';
echo '<input type="hidden" name="s_id" value="',$row['s_id'],'">';
echo '<button type="submit">削除</button>';
echo '</form>';
echo '</td>';
echo '</tr>';
}
?>
<?php require 'footer.php'; ?>