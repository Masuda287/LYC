<?php session_start();?>
<?php 
$_SESSION['toroku']=[
    'card_num'=>$_POST['card_num'],'card_name'=>$_POST['card_name'],
    'dl_m'=>$_POST['dl_m'],'dl_y'=>$_POST['dl_y'],
    'code'=>$_POST['code']];

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
}else  if (!preg_match('/[0-9]+/', $_POST['card_num'])){
    header("Location:U2-2-1-numerror.php");
}else if (!preg_match('/[0-9]+/', $_POST['code'])){
    header("Location:U2-2-1-numerror.php");
}else {
    header("Location: U2-2-2.php");
}

?>