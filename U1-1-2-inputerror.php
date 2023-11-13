<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
$u_name=$login=$b_day=$mail=$password=$pass_c='';
if(isset($_SESSION['customer'])) {
    $u_name=$_SESSION['customer']['u_name'];
    $login=$_SESSION['customer']['login'];
    $b_day=$_SESSION['customer']['b_day'];
    $mail=$_SESSION['customer']['mail'];
    $password=$_SESSION['customer']['password'];
    $pass_c=$_SESSION['customer']['pass_c'];
}
?>
<h1>新規会員登録</h1>
<?php
echo  '<form action="U1-1-2-term.php" method="post">';
echo  '<table>';
echo  '<tr><td>姓名</td><td>';
echo  '<input type="text"  name="u_name" value="', $u_name, '">';
echo  '</td></tr>';
echo  '<tr><td>ユーザー名</td><td>';
echo  '<input type="text" name="login" value="', $login, '">';
echo  '</td></tr>';
echo  '<tr><td>生年月日</td><td>';
echo  '<input type="text"  name="b_day" value="', $b_day, '">';
echo  '</td></tr>';
echo  '<tr><td>メールアドレス</td><td>';
echo  '<input type="text"  name="mail" value="', $mail, '">';
echo  '</td></tr>';
echo  '<tr><td>パスワード</td><td>';
echo  '<input type="password"  name="password" value="', $password, '">';
echo  '</td></tr>';
echo  '<tr><td>パスワード(確認)</td><td>';
echo  '<input type="password"  name="pass_c" value="', $pass_c, '">';
echo  '</td></tr>';
echo  '</table>';
?>
<p>入力されていない項目があります</p>
<?php
echo  '<input type="submit" value="新規登録">';
echo  '</form>';
?>

<?php require 'footer.php'; ?>