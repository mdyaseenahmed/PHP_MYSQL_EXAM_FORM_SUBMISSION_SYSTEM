<?php
    require_once('../connection.php');
    $id = $_GET['id'];

    $que = "DELETE FROM fst_reg where id = '$id'";
    $exe = mysqli_query($con,$que);

    header('location:dashboard.php?page=manage_users_fst');

?>