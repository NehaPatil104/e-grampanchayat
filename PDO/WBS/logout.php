<?php
 session_start();
unset($_SESSION['id']);
 header('Location:http://localhost:8080/e-grampanchayat/PDO/dashboard.php');

unset($_SESSION['admin']);
 header('Location:http://localhost:8080/e-grampanchayat/PDO/dashboard.php');
 
?>