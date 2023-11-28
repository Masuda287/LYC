<?php session_start();?>
<?php require 'header.php';?>
<?php require 'menu.php';?>
<hr>
<?php 

echo '<h1>会員情報更新</h1>';
echo '既に同じログイン名のユーザーが存在するため使用できません';
echo '<form action="U2-1-2-term.php"method="post">';
echo '<table>';
echo '<tr><td>姓名</td><td>';
echo '<input type="text" maxlength="50" name="c_name" value="',$_SESSION['u_kosin']['u_name'],'">';
echo '</td></tr>';
echo '<tr><td>ユーザー</td><td>';
echo '<input type="text" maxlength="50" name="u_name" value="',$_SESSION['u_kosin']['login'],'">','';
echo '</td></tr>';
echo '<tr><td>生年月日</td><td>';
echo '<input type="text" maxlength="8" name="birthday" value="',$_SESSION['u_kosin']['birthday'],'">';
echo '</td></tr>';
echo '<tr><td>メールアドレス</td><td>';
echo '<input type="email"  maxlength="50" name="address" value="',$_SESSION['u_kosin']['mail'],'">';
echo '</td></tr>';
echo '<tr><td>パスワード</td><td>';
echo '<input type="password" maxlength="20" name="password" value="',$_SESSION['u_kosin']['password'],'">';
echo '<tr><td>パスワード確認</td><td>';
echo '<input type="password" maxlength="20" name="password1" value="">';
echo '</td></tr>';
echo '</table>';
echo '<a href="U2-1-1.php"><button type="button">戻る</button></a><input type="submit" value="確認">';
echo '</form>';
?>
<?php require 'footer.php';?>