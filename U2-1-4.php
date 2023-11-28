<?php session_start();?>
<?php require 'header.php';?>
<?php require 'menu.php';?>
<?php require 'db-connect.php';?>
<?php
$id = $_SESSION['customer']['c_id'];
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('update Customer set c_name=?,u_name=?,birthday=?,address=?,password=? where c_id=?');
            $sql->execute([
                $_SESSION['u_kosin']['u_name'],$_SESSION['u_kosin']['login'],$_SESSION['u_kosin']['birthday'],$_SESSION['u_kosin']['mail'],$_SESSION['u_kosin']['password'],$id
            ]);
            $_SESSION['customer']=[
                'id'=>$id, 'u_name'=>$_SESSION['u_kosin']['u_name'],
                'login'=>$_SESSION['u_kosin']['login'],
                'mail'=>$_SESSION['u_kosin']['mail'],
                'b_day'=>$_SESSION['u_kosin']['birthday'],
                'password'=>$_SESSION['u_kosin']['password']];
            
                unset($_SESSION['u_kosin']);
            ?>
<h1>更新完了</h1>