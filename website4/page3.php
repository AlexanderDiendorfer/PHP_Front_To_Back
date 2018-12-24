<?php 
    session_start();

    print_r($_SESSION);

    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscibed';
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Sessions</title>
</head>
<body>
    <h1>Hello <?php echo $name; ?></h1>
    <a href="page4.php">Log out</a>
</body>
</html>