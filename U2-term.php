<?php session_start();?>
<?php require 'db-connect.php'; ?>
<?php 

$pdo=new PDO($connect,USER,PASS);
$sql = $pdo->prepare('select * from Credit where c_id=?');
$sql->execute([$_SESSION['customer']['c_id']]);
$all[] = $sql->fetchAll();
if(empty($all)){
    header("Location:U2-2-1.php");
}else{
    header("Location:U2-2-4.php?");
}

?>