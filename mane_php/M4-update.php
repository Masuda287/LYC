<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php 
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('select * from Recommend  where s_id=?');
    $sql->execute([$_POST['recommend']]);
    $check=$sql->fetch();
    if(empty($check)){
        if($_POST['n']==1){
            $sql=$pdo->prepare('update Recommend set s_id=? where re_id=1');
            $sql->execute([$_POST['recommend']]);
            $_SESSION['n']=1;
        }else if($_POST['n']==2){
            $sql=$pdo->prepare('update Recommend set s_id=? where re_id=2');
            $sql->execute([$_POST['recommend']]);
            $_SESSION['n']=2;
        }else if($_POST['n']==3){
            $sql=$pdo->prepare('update Recommend set s_id=? where re_id=3');
            $sql->execute([$_POST['recommend']]);
            $_SESSION['n']=3;
        }
    }else{
        $_SESSION['n']=4;
    } 
    header("Location:M4.php");
?>


