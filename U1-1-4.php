<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>

    <?php
        $pdo=new PDO($connect,USER,PASS);
        $sql=$pdo->prepare("insert into Customer values(null,?,?,?,?,?,'')");
        $sql->execute([
            $_SESSION['kyaku']['u_name'], $_SESSION['kyaku']['login'],$_SESSION['kyaku']['b_day'],$_SESSION['kyaku']['mail'],$_SESSION['kyaku']['password']
        ]);
        unset($_SESSION['toroku']);
    ?>
<form action="U1-1-1-term.php" method="post">
    <p>会員登録が完了しました。</p>
    <p>ユーザー名とパスワードを入力してログインしてください。</p>
    ユーザー名<input type="text" name="u_name" class=" is-vcentered"><br>
    パスワード<input type="password" name="password" class=" is-vcentered"><br>
    <input type="submit" value="ログイン" >
</form>
<?php require 'footer.php'; ?>