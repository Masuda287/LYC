<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php';?>
<?php require 'menu.php'; ?>

    <h1>クレジット情報更新</h1>

<?php
$card_num=$_GET['card_num'];
$card_name=$_GET['card_name'];
$dl_m=$_GET['dl_m'];
$dl_y=$_GET['dl_y'];
$code=$_GET['code'];
$URL="U2-2-6.php?card_num={$card_num}&card_name={$card_name}&dl_m={$dl_m}&dl_y={$dl_y}&code={$code}";

echo '<form action="',$URL,'" method="post">';
echo '<table>';
echo '<tr><td>カード番号</td><td>';
echo '<input type="text" name="card_num" max=9999999999999999 min=0000000000000001  value="',$_GET['card_num'],'">';
echo '</td></tr>';
echo '<tr><td>名義</td><td>';
echo '<input type="text" name="card_name"  value="',$_GET['card_name'],'">';
echo '</td></tr>';

echo '<tr><td>有効期限</td><td>';
echo '<td><select name="dl_m"  value="',$_GET['dl_m'],'">';
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
echo '<td><select name="dl_y"  value="',$_GET['dl_y'],'">';
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
echo '<input type="text" name="code" max=999  value="',$_GET['code'],'">';
echo '</td></tr>';
echo'</table>';
echo '<p><button type="submit"><a href="U2-2-4.php">戻る</a></button></p>';
echo '<p><button type="submit"><a href="U2-2-5-term.php">確認</a></button></p>';
echo '</form>';



?>

<?php require 'footer.php';?>