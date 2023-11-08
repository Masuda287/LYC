<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php 

unset($_SESSION['customer']);
$pdo=new PDO($connect,user,pass);
$sql=$pdo->prepare('select * from Customer where u_name=?');
$sql->execute([$_POST['u_name']]);
foreach($sql as $row) {
    if($_POST['password']==$row['password']){

    
    $_SESSION['customer']=[
        'c_id'=>$row['c_id'], 'u_name'=>$row['c_name'],
        'login'=>$row['u_name'],'b_day'=>$row['birthday'],
         'mail'=>$row['address'],'password'=>$row['password']];
    }
}
if(isset($_SESSION['customer'])){
         header("Location:U1.php"); 
        
     } else {
        header("Location:U1-1-1-error.php");
     }   
     ?>   