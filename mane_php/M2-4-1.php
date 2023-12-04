<?php require 'db-connect.php'; ?>
<?php require 'header.php'?>
<p class="has-text-centered"><a href="M1.php" class="button is-default is-size-2">inHome管理画面</a></p><br>
<h1 class="has-text-centered is-size-3">削除確認</h1><br>
<?php
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare('select * from Shohin where s_id=?');
$sql->execute([$_POST['s_id']]);
foreach ($sql as $row){
echo '<p class="has-text-centered">商品名：',$row['s_name'],'</p>';
echo '<br>';
echo '<p class="has-text-centered">カテゴリー１：',$row['category1'],'</p>';
echo '<br>';
echo '<p class="has-text-centered">カテゴリー２：',$row['category2'],'</p>';
echo '<br>';
echo '<p class="has-text-centered">販売価格：',$row['price'],'</p>';
echo '<br>';
echo '<p class="has-text-centered">商品説明：',$row['s_detail'],'</p>';
echo '<br>';
}
?>
<?php
echo '<p class="has-text-danger has-text-centered">削除してもよろしいですか</p><br>';
echo '<nac class="level">';
echo '<b class="level-item">';
echo '<a href="M2-2.php" class="button is-medium">戻る</a>';
echo '<p class="has-text-white">______________</p>';
echo '<form action="M2-4-2.php"method="post">';
echo '<input type="hidden" name="s_id" value="',$_POST['s_id'],'">';
echo '<button type="submit" class="button is-info is-medium">削除</button>';
echo '</form>';
echo '</b>';
echo '</nac>';
?>
<?php require 'footer.php'; ?>