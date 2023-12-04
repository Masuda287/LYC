<?php require 'db-connect.php'; ?>
<?php 

$name1=$_POST['u_name'];
$login1=$_POST['login'];
$birth1=$_POST['b_day'];
$mail1=$_POST['mail'];
$password1=$_POST['password'];
$URL="U1-1-3.php?u_name={$name1}&login={$login1}&b_day={$birth1}&mail={$mail1}&password={$password1}";


$sql = $pdo->query('select u_name from Customer');
$sql->execute();
$pdo=null;

$cnt = 0;
foreach($sql as $name) {
    
if($name['u_name']==$_POST['login']){
    $cnt = $cnt + 1;   
    } 
}

if($cnt == 0 && $_POST['password']==$_POST['pass_c']){
    header("Location: " .$URL);
    
} else if($cnt > 0 && $_POST['password']==$_POST['pass_c']) {
    header("Location:U1-1-2-loginerror.php");
} else if($cnt == 0 && $_POST['password']!=$_POST['pass_c']){
    header("Location:U1-1-2-passerror.php"); 
} 

  ?>
