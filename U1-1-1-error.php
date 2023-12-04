        <?php require 'header.php'; ?>
        <?php require 'menu.php'; ?>
<form action="U1-1-1-term.php" method="post">
    <div class="has-text-centered">
    <h1  class="mt-5 is-size-4">ログイン</h1>
    <h1  class="is-size-6">会員のお客様</h1>
    <div class="is-size-7">ユーザーIDとパスワードを入力してください</div><br>
    <div class="pb-2 is-size-7">ユーザーID<input type="text" name="u_name" class=" is-vcentered"></div>
    <div class="is-size-7">パスワード<input type="password" name="password" class=" is-vcentered"></div><br>
    <a href="U1-1-1-term.php" class="button is-info">ログイン</a><br><br>
    <p class="has-text-danger">ユーザー名もしくはパスワードが違います</p>
</form>
    <br>
    <br>
    <h1 class="is-size-5">初めてのご利用のお客様・会員以外のお客様</h1>
    <p class="is-size-7">初めてのご利用のお客様は、こちらから会員登録を行ってください。</p><br>
    <a href="U1-1-2.php" class="button is-info">新規会員登録</a>
    </div>
<?php require 'footer.php'; ?>
    


