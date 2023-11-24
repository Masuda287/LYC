<?php session_start();?>
<?php require 'header.php';?>
<?php require 'menu.php';?>
<?php require 'db-connect.php';?>
<?php
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->prepare('update Customer set c_name=?,u_name=?,birthday=?,address=?,password=? where c_id=?');
            $sql->execute([
                $_SESSION['customer']['c_name'],$_SESSION['customer']['u_name'],$_SESSION['customer']['b_day'],$_SESSION['customer']['mail'],$_SESSION['Customer']['password'],$_SESSION['Customer']['id']
            ]);
            ?>
更新完了