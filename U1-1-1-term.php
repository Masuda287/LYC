<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php 
unset($_SESSION['Credit']);
unset($_SESSION['customer']);
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare('select * from Customer where u_name=?');
$sql->execute([$_POST['u_name']]);
foreach($sql as $row) {
    if($_POST['password']==$row['password']){

    $_SESSION['customer']=[
        'c_id'=>$row['c_id'], 'u_name'=>$row['c_name'],
        'login'=>$row['u_name'],'b_day'=>$row['birthday'],
         'mail'=>$row['address'],'password'=>$row['password']];
         $sql=$pdo->prepare('select * from Credit where c_id=?');
         $sql->execute([$_SESSION['customer']['c_id']]);
         foreach($sql as $ro)
         $_SESSION['Credit']=[
            'c_id'=>$ro['c_id'], 'card_num'=>$ro['card_num'],
            'card_name'=>$ro['card_name'],'dl_m'=>$ro['dl_m'],
             'dl_y'=>$ro['dl_y'],'code'=>$ro['code']];
    } 
}  

if(isset($_SESSION['customer'])){
         header("Location:U1.php"); 
        
     } else {
        header("Location:U1-1-1-error.php");
     }   
     ?>   