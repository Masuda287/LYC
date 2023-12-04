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
?>
<div class="has-text-centered">
<div level>
    <h1 class="is-size-3">新規会員登録</h1>

<?php
echo  '<div class="has-text-danger">生年月日は数字で入力してください</div>';
echo  '<form action="U1-1-2-term.php" method="post">';
echo  '<table class="level-item">';
echo  '<tr><td class="pb-3">姓名</td><td>';
echo  '<input type="text" required  name="u_name" value="', $u_name, '">';
echo  '</td></tr>';
echo  '<tr><td class="pb-3">ユーザー名</td><td>';
echo  '<input type="text" required name="login" value="', $login, '">';
echo  '</td></tr>';
echo  '<tr><td class="pb-3">生年月日</td><td>';
echo  '<input type="number" max="20301231" required name="b_day" value="', $b_day, '">';
echo  '</td></tr>';
echo  '<tr><td class="pb-3">メールアドレス</td><td>';
echo  '<input type="text" required name="mail" value="', $mail, '">';
echo  '</td></tr>';
echo  '<tr><td class="pb-3">パスワード</td><td>';
echo  '<input type="password" required name="password" value="', $password, '">';
echo  '</td></tr>';
echo  '<tr><td class="pb-3">パスワード(確認)</td><td>';
echo  '<input type="password" required name="pass_c" value="', $pass_c, '">';
echo  '</td></tr>';
echo  '</table>';
echo  '<div class="pb-3"></div>';
echo '<a href="U2-1-2-term.php" class="button is-info ">新規登録</a>';
echo  '</form>';
?>

<?php require 'footer.php'; ?>