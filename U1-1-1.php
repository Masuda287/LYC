<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<form action="U1-1-1-term.php" method="post">
    
    <h1>会員のお客様</h1>
    <p>ユーザー名とパスワードを入力してください</p>
    ユーザー名<input type="text" name="u_name" class=" is-vcentered"><br>
    パスワード<input type="password" name="password" class=" is-vcentered"><br>
    <input type="submit" value="ログイン" >
    </form>
    <h1>初めてのご利用のお客様。会員以外のお客様</h1>
    <p>初めてのご利用のお客様は、こちらから会員登録を行ってください。</p>
    <button onclick="location.href='U1-1-2.php' "type="button">新規会員登録</button>

<?php require 'footer.php'; ?>