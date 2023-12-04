<?php session_start();?>
<?php require 'db-connect.php';?>
<?php
$pdo=new PDO($connect, USER, PASS);

$id=$_SESSION['Customer']['c_id'];
    $sql=$pdo->prepare('select * from Customer where c_id!=? and u_name=?');
    $sql->execute([$id,$_POST['u_name']]);

    if(empty($sql->fetchAll())){
        if(empty($_POST['c_name'])){
            header("Location:U2-1-2error.php");
        }
        else if(!preg_match('/[0-9]+/', $_POST['price']))
        else{
            $sql=$pdo->prepare('update Customer set c_name=?,u_name=?,birthday=?,address=?,password=? where c_id=?');
            $sql->execute([
                $_POST['c_name'],$_POST['u_name'],$_POST['birthday'],$_POST['address'],$_POST['password'],$id
            ]);
            $_SESSION['Customer']=[
                'id'=>$id, 'c_name'=>$_POST['c_name'],
                'u_name'=>$_POST['u_name'],
                'address'=>$_POST['address'],
                'birthday'=>$_POST['birthday'],
                'password'=>$_POST['password'] ];
                header("Location:U2-1-3.php"); 
            }
        }
        else{
            header("Location:U2-1-2error.php"); 
        }
?>
