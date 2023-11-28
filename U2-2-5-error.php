<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php';?>
<?php require 'menu.php'; ?>

    <h1>クレジット情報更新</h1>

<?php

echo '<form action="U2-2-5-term.php" method="post">';
echo '<table>';
echo '<tr><td>カード番号</td><td>';
echo '<input type="text" name="card_num" maxlength="16" value="',$_SESSION['kosin']['card_num'],'">';
echo '</td></tr>';
echo '<tr><td>名義</td><td>';
echo '<input type="text" name="card_name"  value="',$_SESSION['kosin']['card_name'],'">';
echo '</td></tr>';

echo '<tr><td>有効期限</td><td>';
echo '<td><select name="dl_m">';
echo '<option value=',$_SESSION['kosin']['dl_m'],'>',$_SESSION['kosin']['dl_m'],'</option>';
echo '<option value=1>1</option>';
echo '<option value=2>2</option>';
echo '<option value=3>3</option>';
echo '<option value=4>4</option>';
echo '<option value=5>5</option>';
echo '<option value=6>6</option>';
echo '<option value=7>7</option>';
echo '<option value=8>8</option>';
echo '<option value=9>9</option>';
echo '<option value=10>10</option>';
echo '<option value=11>11</option>';
echo '<option value=12>12</option>';
echo '</select>月</td>';
echo '<td><select name="dl_y">';
echo '<option value=',$_SESSION['kosin']['dl_y'],'>',$_SESSION['kosin']['dl_y'],'</option>';
echo '<option value=23>23</option>';
echo '<option value=24>24</option>';
echo '<option value=25>25</option>';
echo '<option value=26>26</option>';
echo '<option value=27>27</option>';
echo '<option value=28>28</option>';
echo '<option value=29>29</option>';
echo '<option value=30>30</option>';
echo '</select>年</td></tr>';
echo '<tr><td>セキュリティーコード</td><td>';
echo '<input type="text" name="code" maxlength="3"  value="',$_SESSION['kosin']['code'],'">';
echo '</td></tr>';
echo '<p>入力されていない項目があります</p>';
echo'</table>';
echo '<p><a href="U2-2-4.php"><button type="button">戻る</button></a><input type="submit" value="確認"></p>';
echo '<p>';
echo '</form>';



?>

<?php require 'footer.php';?>