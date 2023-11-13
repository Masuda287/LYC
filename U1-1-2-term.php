<?php require 'db-connect.php'; ?>
<?php 

$pdo=new PDO($connect,USER,PASS);
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
    header("Location:U1-1-3-input.php");
} else if($cnt > 0 && $_POST['password']==$_POST['pass_c']) {
    header("Location:U1-1-2-loginerror.php");
} else if($cnt == 0 && $_POST['password']!=$_POST['pass_c']){
    header("Location:U1-1-2-passerror.php"); 
} 

  ?>
