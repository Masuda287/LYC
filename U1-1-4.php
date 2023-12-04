<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<div class="has-text-centered">
<h1 class="is-size-3">登録完了</h1>
<form action="U1-1-4-login.php" method="post">
    <p>会員登録が完了しました。</p>
    <p class="pb-2">ユーザー名とパスワードを入力してログインしてください。</p>
    <div class="pb-2">ユーザー名<input type="text" name="u_name" class=" is-vcentered"></div>

    <div class="pb-2">パスワード<input type="password" name="password" class=" is-vcentered"></div>
    
    <div class="pt-3">
    <a href="U1.php" class="button is-info">ログイン</a>
    </div>
</form>
</div>
<?php require 'footer.php'; ?>