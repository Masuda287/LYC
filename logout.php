<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
if(isset($_SESSION['Customer'])) {
    unset($_SESSION['Customer']);
}
?>
<?php require 'footer.php'; ?>