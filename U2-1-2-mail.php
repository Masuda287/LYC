<?php session_start();?>
<?php require 'header.php';?>
<?php require 'menu.php';?>
<hr>
<?php 
$c_name=$u_name=$birthday=$address=$password='';
if(isset($_SESSION['customer'])){
    $c_name=$_SESSION['customer']['c_name'];
    $u_name=$_SESSION['customer']['u_name'];
    $birthday=$_SESSION['customer']['b_day'];
    $address=$_SESSION['customer']['mail'];
    $password=$_SESSION['customer']['password'];
}
echo '<div class="has-text-centered"><div level>';
echo '<h1 class="is-size-3">会員情報更新</h1>';
echo '<div class="has-text-danger">このメールアドレスは使用できません</div>';
echo '<form action="U2-1-2-term.php"method="post">';
echo '<table class="level-item">';
echo '<tr><td class="pb-3">姓</td><td>';
echo '<input type="text" name="c_name" value="',$c_name,'">';
echo '</td></tr>';
echo '<tr><td class="pb-3">ユーザー</td><td>';
echo '<input type="text" name="u_name" value="',$u_name,'">','';
echo '</td></tr>';
echo '<tr><td class="pb-3">生年月日</td><td>';
echo '<input type="text" name="birthday" value="',$birthday,'">';
echo '</td></tr>';
echo '<tr><td class="pb-3">メールアドレス</td><td>';
echo '<input type="text" name="address" value="',$address,'">';
echo '</td></tr>';
echo '<tr><td class="pb-3">パスワード</td><td>';
echo '<input type="password" name="password" value="',$password,'">';
echo '</td></tr>';
echo '<tr><td class="pb-3">パスワード確認</td><td>';
echo '<input type="password" name="password1" value="">';
echo '</td></tr>';
echo '</table><br>';
echo '<a href="U2-1-2-term.php" class="button is-info ">確認</a>';
echo '</form>';
?>
<?php require 'footer.php';?>