<?php session_start(); ?>
<?php require 'header.php'; ?>
<p class="has-text-centered"><a href="M1.php" class="button is-default is-size-2">inHome管理画面</a></p><br>
<h1 class="has-text-centered is-size-3">商品新規登録</h1><br>
<form action="M2-1-2.php"method="post">
<p class="has-text-centered">商品名<input type="text" name="s_name" required></p><br>
<p class="has-text-centered">カテゴリー1<select name="category1" required>
            <option value="本">本</option>
            <option value="動画">動画</option>
            <option value="音楽">音楽</option>
        </select></p><br>
<p class="has-text-centered">カテゴリー2<select name="category2">
            <option value="漫画少年">漫画少年</option>
            <option value="漫画少女">漫画少女</option>
            <option value="小説恋愛">小説恋愛</option>
            <option value="小説SF">小説SF</option>
            <option value="小説ミステリー">小説ミステリー</option>
            <option value="ドラマ">ドラマ</option>
            <option value="アニメ">アニメ</option>
            <option value="映画恋愛">映画恋愛</option>
            <option value="映画SF">映画SF</option>
            <option value="映画ミステリー">映画ミステリー</option>
            <option value="jpop">jpop</option>
            <option value="rock">rock</option>
            <option value="ボカロ">ボカロ</option>
        </select></p><br>
<p class="has-text-centered">販売価格<input type="number" name="s_price" required>円</p><br>
<p class="has-text-centered">商品説明<input type="text" name="s_detail" required></p><br>
<nac class="level">
<b class="level-item">
<a href="#" class="button is-medium">戻る</a>
<p class="has-text-white">______________</p>
<button type="submit" class="button is-info is-medium">確認</button>
</b>
</nac>
</form>
<?php require 'footer.php'; ?>