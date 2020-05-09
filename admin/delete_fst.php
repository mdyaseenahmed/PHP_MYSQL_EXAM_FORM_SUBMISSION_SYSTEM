<?php
    require_once('../connection.php');
    $id = $_GET['id'];

    $que = "DELETE FROM add_fst where id = '$id'";
    $exe = mysqli_query($con,$que);

    header('location:dashboard.php?page=manage_sub_fst');
?>