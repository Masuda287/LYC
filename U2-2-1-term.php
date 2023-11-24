<?php session_start();?>
<?php 

if(empty($_POST['card_num'])){
    header("Location:U2-2-1-error.php");
}else if(empty($_POST['card_name'])){
    header("Location:U2-2-1-error.php");
}else if(empty($_POST['dl_m'])){
    header("Location:U2-2-1-error.php");
}else if(empty($_POST['dl_y'])){
    header("Location:U2-2-1-error.php");
}else if(empty($_POST['code'])){
    header("Location:U2-2-1-error.php");
}else{

$num=$_POST['card_num'];
$name=$_POST['card_name'];
$month=$_POST['dl_m'];
$year=$_POST['dl_y'];
$code=$_POST['code'];
$URL="U2-2-2.php?card_num={$num}&card_name={$name}&dl_m={$month}&dl_y={$year}&code={$code}";
    header("Location:".$URL);
}

?>