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
echo '<h1>会員情報更新</h1>';
echo '<form action="U2-1-2-term.php"method="post">';
echo '<table>';
echo '<tr><td>姓</td><td>';
echo '<input type="text" name="c_name" value="',$c_name,'">';
echo '</td></tr>';
echo '<tr><td>ユーザー</td><td>';
echo '<input type="text" name="u_name" value="',$u_name,'">','';
echo '</td></tr>';
echo '<tr><td>生年月日</td><td>';
echo '<input type="text" name="birthday" value="',$birthday,'">';
echo '</td></tr>';
echo '<tr><td>メールアドレス</td><td>';
echo '<input type="text" name="address" value="',$address,'">';
echo '</td></tr>';
echo '<tr><td>パスワード</td><td>';
echo '<input type="password" name="password" value="',$password,'">';
echo '</td></tr>';
echo '<tr><td>パスワード確認</td><td>';
echo '<input type="password" name="password1" value="">';
echo '</td></tr>';
echo 'パスワードが異なってます';
echo '</table>';
echo '<input type="submit" value="確認">';
echo '</form>';
?>
<?php require 'footer.php';?>