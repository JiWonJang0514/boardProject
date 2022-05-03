<?php
session_start();
unset($_SESSION['user_id']);

//리다이렉션
header("Location: login.php");
?>