<?php
    session_start();
    require_once('../connection.php');
    extract($_POST);
    $user = $_SESSION['admin'];
    
    if(isset($Update))
    {
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
</head>
<body>
    
</body>
</html>