<?php session_start();?>
<?php require 'db-connect.php';?>
<?php require 'header.php';?>
    <h1>クレジットカード登録</h1>

<?php

$card_num=$card_name=$dl_m=$dl_y=$code='';

echo '<form action="u2-2-2.php" method="post">';
echo '<table>';
echo '<tr><td>カード番号</td><td>';
echo '<input type="text" name="card_num" >';
echo '</td></tr>';
echo '<tr><td>名義</td><td>';
echo '<input type="text" name="card_name">';
echo '</td></tr>';

echo '<tr><td>有効期限</td><td>';
echo '<td><select name="dl_m">';
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
echo '<input type="text" name="code" >';
echo '</td></tr>';
echo'</table>';
echo '<p><button type="submit"><a href="u2.php">戻る</a></button></p>';
echo '<p><button type="submit">確認</button></p>';
echo '</form>';



?>

<?php require 'footer.php';?>