<?php session_start(); ?>
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
$_SESSION['kyaku']=[
    'u_name'=>$_POST['u_name'],'login'=>$_POST['login'],
    'b_day'=>$_POST['b_day'],'mail'=>$_POST['mail'],
    'password'=>$_POST['password']];

    if(empty($_POST['u_name'])){
        header("Location:U1-1-2-inputerror.php");
    }else if(empty($_POST['login'])){
        header("Location:U1-1-2-inputerror.php");
    }else if(empty($_POST['b_day'])){
        header("Location:U1-1-2-inputerror.php");
    }else if(empty($_POST['mail'])){
        header("Location:U1-1-2-inputerror.php");
    }else if(empty($_POST['password'])){
        header("Location:U1-1-2-inputerror.php");
    }else if(empty($_POST['pass_c'])){
        header("Location:U1-1-2-inputerror.php");
            }else if (!preg_match('/[0-9]+/', $_POST['b_day'])){
                header("Location:U1-1-2-birtherror.php");
            }else if($cnt == 0 && $_POST['password']==$_POST['pass_c']){
                header("Location:U1-1-3.php");    
            } else if($cnt > 0 && $_POST['password']==$_POST['pass_c']) {
            header("Location:U1-1-2-loginerror.php");
            } else if($cnt == 0 && $_POST['password']!=$_POST['pass_c']){
            header("Location:U1-1-2-passerror.php"); 
            }    

  ?>
