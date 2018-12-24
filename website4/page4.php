<?php 
    session_start();
    // unset($_SESSION['name']);
    session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Sessions</title>
</head>
<body>
    <a href="page1.php">Login</a>
</body>
</html>