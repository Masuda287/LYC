<?php session_start();?>
<?php require 'db-connect.php';?>
<?php
$pdo=new PDO($connect, USER, PASS);

$id=$_SESSION['customer']['c_id'];
    $sql=$pdo->prepare('select * from Customer where c_id!=? and u_name=?');
    $sql->execute([$id,$_POST['u_name']]);

    if(empty($sql->fetchAll())){
        if(empty($_POST['c_name'])){
            header("Location:U2-1-2-cname.php");
        }
        else if(!preg_match('/[0-9]+/', $_POST['birthday']))
        {
            header("Location:U2-1-2-b.php");
        }
        else if(!preg_match('/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i',$_POST['address'])){
            header("Location:U2-1-2-mail.php");
        }
        else if($_POST['password']!=$_POST['password1']){
            header("Location:U2-1-2-pass.php");
        }
        else{
            
            
            $_SESSION['customer']=[
                'id'=>$id, 'c_name'=>$_POST['c_name'],
                'u_name'=>$_POST['u_name'],
                'mail'=>$_POST['address'],
                'b_day'=>$_POST['birthday'],
                'password'=>$_POST['password'] ];
                header("Location:U2-1-3.php"); 
            }
        }
        else{
            header("Location:U2-1-2-name.php"); 
        }
?>
