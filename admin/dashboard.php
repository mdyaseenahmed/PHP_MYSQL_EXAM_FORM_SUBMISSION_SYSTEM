<?php
session_start();
require_once('../connection.php');
$admin = $_SESSION['admin'];
if ($admin == "") {
    header('location:index.php');
}
include('count.php');
?>

<!-- dashboard.php -->
<!-- ADMIN DASHBOARD -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Dashboard.!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
    <!--Custom Favicon -->
    <link rel="icon" type="image/png" sizes="64x64" href="../css/images/logo.png">
    <style>
        .back-to-top {
            position: fixed;
            bottom: 25px;
            right: 25px;
            display: none;
        }

        .card {
            background-color: #a3f7bf;
            border: 4px solid black;

        }

        .card-title {
            color: #4a47a3;
        }

        .card {
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 220, 2);
            transition: 0.7s;
        }

        .label1 {
            color: black;
            font-weight: bold;
            width: 100%;
            color: darkred;
            font-size: 35px;
            font-family: 'Della Respira';
        }

        .hov a:hover {
            color: red;
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
            box-shadow: 7px 8px 16px 5px rgba(0, 0, 33, 2);
        }

        body {
            background-color: #f3f5f9;
        }

        .wrapper {
            display: flex;
            margin-top: 3%;
            position: relative;
        }



        .wrapper .sidebar {
            width: 200px;
            height: 100%;
            background: #5a0533;
            padding: 30px 0px;
            border: 2px solid black;
            position: fixed;
            overflow-x: scroll;
            margin-bottom: 5%;
            font-family: 'Acme';
            font-size: 18px;
        }

        .wrapper .sidebar h2 {
            color: #fff;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 30px;
        }

        .wrapper .sidebar ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .wrapper .sidebar ul li {
            padding: 15px;
            border-bottom: 1px solid #bdb8d7;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        .wrapper .sidebar img {
            border-radius: 50%;
            justify-content: center;
            margin-left: 15%;
            margin-top: auto;
            margin-bottom: 5%;
            ;
            border: 1px dashed #000000;
            background-color: white;
        }

        .wrapper .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
        }

        .wrapper .sidebar ul li a .fas {
            width: 25px;
        }

        .wrapper .sidebar ul li:hover {
            background-color: #ad1457;
            text-decoration: none;
        }

        .wrapper .sidebar ul li:hover a {
            color: #fff;
        }

        .wrapper .main_content {
            width: 100%;
            margin-left: 2%;
            margin-bottom: 3%;
        }

        .wrapper .main_content .header {
            padding: 20px;
            font-size: 25px;
            background: #5a0533;
            border-bottom: 1px solid #e0e4e8;
            color: #fff;
            border: 2px solid black;
        }

        .wrapper .main_content .info {
            margin: 20px;
            color: #717171;
            line-height: 25px;
        }

        .wrapper .main_content .info div {
            margin-bottom: 20px;
        }


        .wrapper .sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
        }


        .dropdown-btn {
            padding-left: 0;
            text-decoration: none;
            color: #fff;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
        }

        /* On mouse-over */
        .dropdown-btn:hover {
            color: #f1f1f1;
        }

        /* Main content */
        .main {
            margin-left: 200px;
            /* Same as the width of the sidenav */
            font-size: 20px;
            /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        /* Add an active class to the active dropdown button */
        .active {
            background-color: #ad1457;
            color: white;
        }

        /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
        .dropdown-container {
            display: none;
            background-color: #5a0533;
            padding-left: 8px;
        }


        /* Optional: Style the caret down icon */
        .fa-caret-down {
            float: right;
            padding-right: 8px;
            padding-top: auto;
        }

        /* Some media queries for responsiveness */
        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        .dropdown-btn .fas {
            width: 25px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="padding:8px;border:none;background-color:#5a0533;border-bottom:1px solid black;box-shadow: 3px 3px 5px black;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="navbar-brand text-white" style="font-family:'Acme';font-size:30px;color: white;" href="#">Welcome, Admin</a>

            </div>
            <ul class="nav navbar-nav navbar-right collapsed hide-on-med-and-down text-white hide-on-med" id="navbar">
                <li>
                    <a class="mnav11" style="color:white;font-family:'Acme';font-size:25px;" href="../logout.php?logout"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Logout</a>
                </li>
            </ul>
    </nav>

    <div class="wrapper">
        <div class="sidebar col -l2 -s6">
            <ul>
                <div>
                    <img class="img1" src="../css/images/logo.png" width="100" height="100" alt="not found" />
                </div>
                <li><a href="dashboard.php"><i class="fas fa-clipboard"></i>Dashboard</a></li>
                <li><a href="dashboard.php?page=manage_users"><i class="fas fa-users"></i>SEE Students</a></li>
                <li><a href="dashboard.php?page=manage_users_fst"><i class="fas fa-users"></i>Fastrack Students</a></li>
                <li>
                    <div class="mdbtn">
                        <button class="dropdown-btn"><i class="fas fa-plus"></i>
                            Add Subject [SEE]
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <ul>
                                <li style="padding:5px;"><a href="dashboard.php?page=add_s1">Semester 1</a></li>
                                <li style="padding:5px;"><a href="dashboard.php?page=add_s2">Semester 2</a></li>
                                <li style="padding:5px;"><a href="dashboard.php?page=add_s3">Semester 3</a></li>
                                <li style="padding:5px;"><a href="dashboard.php?page=add_s4">Semester 4</a></li>
                                <li style="padding:5px;"><a href="dashboard.php?page=add_s5">Semester 5</a></li>
                                <li style="padding:5px;"><a href="dashboard.php?page=add_s6">Semester 6</a></li>
                                <li style="padding:5px;"><a href="dashboard.php?page=add_s7">Semester 7</a></li>
                                <li style="padding:5px;"><a href="dashboard.php?page=add_s8">Semester 8</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="dashboard.php?page=add_fst"><i class="fas fa-plus"></i>Add Subject [Fastrack]</a></li>
                <li><a href="dashboard.php?page=manage_sub_fst"><i class="fas fa-bars"></i>Manage Fastrack &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subjects</a></li>
            </ul>
        </div>
        <div class="col-sm-12 col-sm-offset-12 col-md-10 col-md-offset-2 main">
            <!-- container-->

            <?php
            @$page =  $_GET['page'];
            if ($page != "") {
                if ($page == "add_s1") {
                    include('add_see/add_s1.php');
                }

                if ($page == "add_s2") {
                    include('add_see/add_s2.php');
                }

                if ($page == "add_s3") {
                    include('add_see/add_s3.php');
                }

                if ($page == "add_s4") {
                    include('add_see/add_s4.php');
                }

                if ($page == "add_s5") {
                    include('add_see/add_s5.php');
                }

                if ($page == "add_s6") {
                    include('add_see/add_s6.php');
                }

                if ($page == "add_s7") {
                    include('add_see/add_s7.php');
                }

                if ($page == "add_s8") {
                    include('add_see/add_s8.php');
                }

                if ($page == "manage_users") {
                    include('manage_users.php');
                }

                if ($page == "disp_s1") {
                    include('disp_see/disp_s1.php');
                }

                if ($page == "disp_s2") {
                    include('disp_see/disp_s2.php');
                }

                if ($page == "disp_s3") {
                    include('disp_see/disp_s3.php');
                }

                if ($page == "disp_s4") {
                    include('disp_see/disp_s4.php');
                }

                if ($page == "disp_s5") {
                    include('disp_see/disp_s5.php');
                }

                if ($page == "disp_s6") {
                    include('disp_see/disp_s6.php');
                }

                if ($page == "disp_s7") {
                    include('disp_see/disp_s7.php');
                }

                if ($page == "disp_s8") {
                    include('disp_see/disp_s8.php');
                }
                if ($page == "manage_users_fst") {
                    include('manage_users_fst.php');
                }
                if ($page == "add_fst") {
                    include('add_fst/add_fst_sub.php');
                }
                if ($page == "manage_sub_fst") {
                    include('add_fst/manage_fst.php');
                }
            } else {
            ?>
                <!-- container end-->






                <div class="main_content">
                    <div>
                        <h1 class="page-header label1" style="font-family: 'Bree serif', serif;">Dashboard</h1>
                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <a class="dashboard-stat11" href="dashboard.php?page=disp_s1">
                                            <span class="number"><?php echo "$cs1"; ?></span>
                                            <span class="name">Subjects Listed<br />For 1th sem</span>
                                            <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat" href="dashboard.php?page=disp_s2">
                                            <span class="number"><?php echo "$cs2"; ?></span>
                                            <span class="name">Subjects Listed<br />For 2nd sem</span>
                                            <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat11" href="dashboard.php?page=disp_s3">
                                            <span class="number"><?php echo "$cs3"; ?></span>
                                            <span class="name">Subjects Listed<br />For 3rd sem</span>
                                            <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat" href="dashboard.php?page=disp_s4">
                                            <span class="number"><?php echo "$cs4"; ?></span>
                                            <span class="name">Subjects Listed<br />For 4th sem</span>
                                            <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->



                                </div>
                                <!-- /.row -->
                                <div class="row" style="margin-top:3%;">

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat" href="dashboard.php?page=disp_s5">
                                            <span class="number"><?php echo "$cs5"; ?></span>
                                            <span class="name">Subjects Listed<br />For 5th sem</span>
                                            <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>


                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat11" href="dashboard.php?page=disp_s6">
                                            <span class="number"><?php echo "$cs6"; ?></span>
                                            <span class="name">Subjects Listed<br />For 6th sem</span>
                                            <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>


                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                                        <a class="dashboard-stat" href="dashboard.php?page=disp_s7">
                                            <span class="number"><?php echo "$cs7"; ?></span>
                                            <span class="name">Subjects Listed<br />For 7th sem</span>
                                            <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>


                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat11" href="dashboard.php?page=disp_s8">
                                            <span class="number"><?php echo "$cs8"; ?></span>
                                            <span class="name">Subjects Listed<br />For 8th sem</span>
                                            <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                </div>

                                <!-- /.container-fluid -->

                                <div class="row" style="margin-top:3%;">

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat1" href="dashboard.php?page=manage_users">
                                            <span class="number counter"><?php echo "$count"; ?></span>
                                            <span class="name">Students Registered<br />For Sem End Exam</span>
                                            <span class="bg-icon"><i class="fa fa-users"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat1" href="dashboard.php?page=manage_users_fst">
                                            <span class="number counter"><?php echo "$count1"; ?></span>
                                            <span class="name">Students Registered<br />For Fastrack Exam</span>
                                            <span class="bg-icon"><i class="fa fa-users"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat11" href="dashboard.php?page=manage_sub_fst">
                                            <span class="number"><?php echo "$fst1"; ?></span>
                                            <span class="name">Subjects Listed<br />For Fastrack</span>
                                            <span class="bg-icon"><i class="fa fa-bars"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>

                                </div>
                            </div>
                    </div>
                </div>
            <?php } ?>



            <a id="back-to-top" style="color:#fff;background-color:#5a0533;border:2px solid black;" href="#" class="btn-light btn-lg back-to-top" role="button"><i class="fas fa-arrow-up"></i></a>
            <script>
                /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
                var dropdown = document.getElementsByClassName("dropdown-btn");
                var i;

                for (i = 0; i < dropdown.length; i++) {
                    dropdown[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var dropdownContent = this.nextElementSibling;
                        if (dropdownContent.style.display === "block") {
                            dropdownContent.style.display = "none";
                        } else {
                            dropdownContent.style.display = "block";
                        }
                    });
                }
            </script>

            <!-- Bootstrap core JavaScript
    ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script>
                window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')
            </script>
            <script src="../js/disable.js"></script>
            <script src="../js/scroll.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
            <script src="../js/vendor/holder.min.js"></script>

</body>

</html>