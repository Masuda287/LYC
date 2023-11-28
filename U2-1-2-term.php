<?php session_start();?>
<?php require 'db-connect.php';?>
<?php
$pdo=new PDO($connect, USER, PASS);

$_SESSION['u_kosin']=[
    'u_name'=>$_POST['c_name'],
    'login'=>$_POST['u_name'],'mail'=>$_POST['address'],
    'birthday'=>$_POST['birthday'],'password'=>$_POST['password']];

$id=$_SESSION['customer']['c_id'];
    $sql=$pdo->prepare('select u_name from Customer where c_id!=?');
    $sql->execute([$id]);
foreach($sql as $error){

    if($error['u_name']==$_POST['u_name']){
        header("Location:U2-1-3-name.php"); 
    }
}
 
        if(empty($_POST['c_name'])){
            header("Location:U2-1-2-input.php");
        }else if(empty($_POST['u_name'])){
            header("Location:U2-1-2-input.php");
        }else if(empty($_POST['birthday'])){
            header("Location:U2-1-2-input.php");
        }else if(empty($_POST['address'])){
            header("Location:U2-1-2-input.php");
        }else if(empty($_POST['password'])){
            header("Location:U2-1-2-input.php");
        }else if(empty($_POST['password1'])){
            header("Location:U2-1-2-input.php");
        }else if (!preg_match('/[0-9]+/', $_POST['birthday'])){
            header("Location:U2-1-2-birth.php"); 
        }else if($_POST['password']!=$_POST['password1']){ 
            header("Location:U2-1-2-pass.php"); 
        }else{
            header("Location:U2-1-3.php"); 
        }
?>
