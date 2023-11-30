<?php session_start(); ?>
<?php
if(isset($_SESSION['customer'])) {
    unset($_SESSION['customer']);
    header("Location:U1.php"); 
}
?>
