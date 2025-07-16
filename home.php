<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
   header('location:login.php');
   exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Home</title>
</head>
<body>
   <h1>Welcome to Home Page</h1>
   <p>You are logged in.</p>
   <a href="logout.php">Logout</a>
</body>
</html>
