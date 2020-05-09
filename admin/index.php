<?php
session_start();
require_once('../connection.php');
extract($_POST);
if (isset($Login)) {
    $que = mysqli_query($con, "select * from admin where admin_id='$email' and password='$pass'");
    $row = mysqli_num_rows($que);
    if ($row) {
        $_SESSION['admin'] = $email;
        header('location:dashboard.php');
    } else {
        $err = "<font color='red';font-family='acme';font-size=25px;>Invalid Login Details..!</font>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Disables The Mouse Right Click, Cut, Copy & Paste Options in The Web Page -->
    <script src="../js/disable.js"></script>

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom Favicon -->
    <link rel="icon" type="image/png" sizes="64x64" href="../css/images/logo.png">

    <!--Custom CSS StyleSheet -->
    <link rel="stylesheet" type="text/css" href="Admin_Styles.css">
    <title>Admin Login..!</title>
    <style type="text/css">
        .back-to-top {
            position: fixed;
            bottom: 25px;
            right: 25px;
            display: none;
        }
    </style>
</head>

<body>
    <div id="progress"></div>
    <nav class="navbar navbar-light" style="background-color: #5a0533;margin-bottom:2%;border-bottom: 2px solid black;box-shadow: 3px 3px 5px black;">
        <a class="mh3 navbar-brand text-white" style="font-family:'Acme';font-size:30px" href="http://www.bmsce.ac.in">BMSCE</a>
        <a class="navbar-brand text-white" style="font-family:'Acme';color:'red';" href="../index.php"><i class="fas fa-home" aria-hidden="true"></i> Home</a>
    </nav>
    <h1 class="mh1">ADMIN Login</h1>
    <div class="forms">
        <form class="myform" method="post">
            <div class="form-group">
                <p class="label1">
                    <?php echo @$err; ?>
                </p>
            </div>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="email" class="form-group form-control form-control-feedback" autocomplete="off" name="email" placeholder="Admin-Id" />
            </div>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-group form-control" name="pass" required placeholder="Password" />
            </div>
            <input name="Login" type="submit" value="Login" class="login_btn">
            <input name="reset" type="reset" value="Reset" class="reset_btn">
        </form>
    </div>
    <a id="back-to-top" style="color:#000;background-color:white;border:2px solid black;" href="#" class="btn-light btn-lg back-to-top" role="button"><i class="fas fa-arrow-up"></i></a>
    <?php require_once('../footer.php'); ?>

    <!-- Scroll Up js File -->
    <script src="../js/scroll.js"></script>

    <!-- Progress js File -->
    <script type="text/javascript" src="../js/progress.js"></script>
</body>

</html>