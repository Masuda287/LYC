<?php require 'header.php'; ?>
<form action="login-output.php" method="post">
    <div>
    会員のお客様
    ユーザーIDとパスワードを入力してください
    ユーザーID<input type="text" name="u_name" class=" is-vcentered"><br>
    パスワード<input type="password" name="password" class=" is-vcentered"><br>
    <input type="submit" value="ログイン" >
    <input type="submit" value="新規会員登録">
</form>
<?php require 'footer.php'; ?>