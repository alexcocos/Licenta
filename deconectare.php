<?php 
include('location.php');
session_start();
session_destroy();
header("Location: " . MAIN_URL . "/");
?>