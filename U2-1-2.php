<?php session_start();?>
<?php require 'header.php';?>
<?php require 'menu.php';?>
<hr>
<?php 
$c_name=$u_name=$birthday=$address=$password='';
if(isset($_SESSION['customer'])){
    $c_name=$_SESSION['customer']['u_name'];
    $u_name=$_SESSION['customer']['login'];
    $birthday=$_SESSION['customer']['b_day'];
    $address=$_SESSION['customer']['mail'];
    $password=$_SESSION['customer']['password'];
}
echo '<h1>会員情報更新</h1>';
echo '<form action="U2-1-2-term.php"method="post">';
echo '<table>';
echo '<tr><td>姓名</td><td>';
echo '<input type="text" maxlength="50"  name="c_name" value="',$c_name,'">';
echo '</td></tr>';
echo '<tr><td>ユーザー</td><td>';
echo '<input type="text" maxlength="50" name="u_name" value="',$u_name,'">','';
echo '</td></tr>';
echo '<tr><td>生年月日</td><td>';
echo '<input type="number" maxlength="8" name="birthday" value="',$birthday,'">';
echo '</td></tr>';
echo '<tr><td>メールアドレス</td><td>';
echo '<input type="email" maxlength="50" name="address" value="',$address,'">';
echo '</td></tr>';
echo '<tr><td>パスワード</td><td>';
echo '<input type="password" maxlength="20" name="password" value="',$password,'">';
echo '</td></tr>';
echo '<tr><td>パスワード確認</td><td>';
echo '<input type="password" maxlength="20" name="password1" value="">';
echo '</td></tr>';
echo '</table>';
echo '<a href="U2-1-1.php"><button type="button">戻る</button></a><input type="submit" value="確認">';
echo '</form>';
?>
<?php require 'footer.php';?>