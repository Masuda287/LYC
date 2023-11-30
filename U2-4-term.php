<?php session_start();?>
<?php 
if(isset($_SESSION['customer'])){
    header("Location: U2-4.php");
} else {
    header("Location: U1-1-1.php");
}

?>