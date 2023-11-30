<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>

<?php

?>
<h1>新規会員登録</h1>
<?php
echo  '<form action="U1-1-2-term.php" method="post">';
echo  '<table>';
echo  '<tr><td>姓名</td><td>';
echo  '<input type="text"  maxlength="50"  name="u_name" value="',$_SESSION['kyaku']['u_name'], '">';
echo  '</td></tr>';
echo  '<tr><td>ユーザー名</td><td>';
echo  '<input type="text"  maxlength="50"  name="login" value="', $_SESSION['kyaku']['login'], '">';
echo  '</td></tr>';
echo  '<tr><td>生年月日</td><td>';
echo  '<input type="text"   maxlength="8" name="b_day" value="',$_SESSION['kyaku']['b_day'], '">';
echo  '</td></tr>';
echo  '<tr><td>メールアドレス</td><td>';
echo  '<input type="email" maxlength="50" name="mail" value="',$_SESSION['kyaku']['mail'], '">';
echo  '</td></tr>';
echo  '<tr><td>パスワード</td><td>';
echo  '<input type="password"  maxlength="20" name="password" value="',$_SESSION['kyaku']['password'], '">';
echo  '</td></tr>';
echo  '<tr><td>パスワード(確認)</td><td>';
echo  '<input type="password" maxlength="20" name="pass_c">';
echo  '</td></tr>';
echo  '</table>';
?>
<p>パスワードが異なります</p>
<?php
echo  '<input type="submit" value="新規登録">';
echo  '</form>';
?>

<?php require 'footer.php'; ?>