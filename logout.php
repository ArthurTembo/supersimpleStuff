<?php
session_start();
if(isset($_SESSION['user_reg'])){
    unset($_SESSION['user_reg']);
}

header("location: login.php");
?>