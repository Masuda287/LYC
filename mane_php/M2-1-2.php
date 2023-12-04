<?php require 'header.php'?>
<p class="has-text-centered"><a href="M1.php" class="button is-default is-size-2">inHome管理画面</a></p><br>
<h1 class="has-text-centered is-size-3">商品登録確認</h1><br>
<?php
echo '<p class="has-text-centered">商品名',$_POST['s_name'],'</p><br>';
echo '<p class="has-text-centered">カテゴリー1',$_POST['category1'],'</p><br>';
echo '<p class="has-text-centered">カテゴリー2',$_POST['category2'],'</p><br>';
echo '<p class="has-text-centered">商品価格',$_POST['s_price'],'円</p><br>';
echo '<p class="has-text-centered">商品説明',$_POST['s_detail'],'</p><br>';
echo '<nac class="level">';
echo '<b class="level-item">';
echo '<a href="M2-1-1.php" class="button is-medium">戻る</a>';
echo '<p class="has-text-white">______________</p>';
echo '<form action="M2-1-3.php"method="post">';
echo '<input type="hidden" name="s_name" value="',$_POST['s_name'],'">';
echo '<input type="hidden" name="category1" value="',$_POST['category1'],'">';
echo '<input type="hidden" name="category2" value="',$_POST['category2'],'">';
echo '<input type="hidden" name="s_price" value="',$_POST['s_price'],'">';
echo '<input type="hidden" name="s_detail" value="',$_POST['s_detail'],'">';
echo '<button type="submit" class="button is-info is-medium">登録</button>';
echo '</form>';
echo '</b>';
echo '</nac>';
?>
<?php require 'footer.php'; ?>