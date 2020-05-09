<?php
require_once('connection.php');
session_start();
extract($_POST);

if (isset($Login)) {
    if ($usn == "" || $Password == "") {
        $err = "<font color='red' align='center'>Enter a Valid USN & Password</font>";
    } else {
        $pass = md5($Password);
        $sql1 = mysqli_query($con, "select * from `registration` where usn='$usn' and password='$pass'");
        $r1 = mysqli_num_rows($sql1);
        if ($r1) {
            $_SESSION['user'] = $usn;
            header('location:user/dashboard.php');
        } else {
            $err = "<font color='red'>Invalid login details</font>" . mysqli_error($con);
        }
    }
}
?>

<!-- index.php-->
<!-- HOME | LOGIIN PAGE -->
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <!--Scroll Up js File-->
    <script src="js/scroll.js"></script>

    <!-- Disables The Mouse Right Click, Cut, Copy & Paste Options in The Web Page 
        <script src = "js/disable.js"></script>
        -->
    <script type="text/javascript" src="js/progress.js"></script>
    <!--Custom Favicon.-->
    <link rel="icon" type="image/png" sizes="64x64" href="css/images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type=text/css> @import url('https://fonts.googleapis.com/css?family=Acme|Bree+Serif|Patrick+Hand|Volkhov|Handlee|PT+Serif|Numans|Bitter|Odibee+Sans|Simonetta|Trade+Winds&display=swap'); .back-to-top { position: fixed; bottom: 25px; right: 25px; display: none; } .container { top:0; margin-top:0; padding-top:0; } input{ caret-color:red; } </style> </head> <body>
        <div id = "progress"></div>
   
    <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark static-top" style="background-color: #5a0533; border-bottom:1px solid black;box-shadow: 3px 3px 5px;">
            <div class="container" style = "font-family:'PT Serif';font-size:22px;padding-right:0px;margin-right:0%;">
                <a class="navbar-brand" href="http://bmsce.ac.in">
                    <h3 style = "font-family:'PT Serif';" ><img src="css/images/logo.png" width="70" style = "border-radius:50%;border:1px black;background-color:white;" height="70" alt="BMSCE"/> <span class = "mh3">BMSCE</span><br /><p style = "margin-left:6%;font-size:12px;margin-top:0;position:absolute;top:60px">Autonomous Institute, Affiliated to VTU<br />Estd. 1946</p></h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mnav" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fa fa-key" aria-hidden="true" ></i> Login
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                
                        <li class="nav-item">
                            <a class="nav-link" href="register.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link" href="admin/index.php"><i class="fa fa-lock" aria-hidden="true"></i> Admin</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="help.php"><i class="fa fa-question" aria-hidden="true"></i> Help</a>
                        </li>
                
                        <li class="nav-item">
                            <a class="nav-link" href="about.php"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
                
        <div class="container">
	        <div class="d-flex justify-content-center h-100">
		        <div class="card mcon" id = "card">
			        <div class="card-header" id = "card-header">
				        <h3 align="center" style = "color:#000">Sign - In</h3>
			        </div>
			        <div class="card-body">
				        <form action="" method="post">
                            <p align='center'><b><?php echo @$err; ?></b></p> 
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" autocapitalize="characters" autocomplete="off" class="form-control a" name="usn" placeholder="USN">
                            </div> 
                        
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" name="Password" placeholder="Password">
                            </div>
                            <div class="row justify-content-center">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" value="Login" style = "color:white" name="Login" class="login_btn">
                                    </div>
                                </div>
                            </div>
        				</form>
			        </div>
		            <div class="card-footer" id = "card-footer">
				        <div class="d-flex justify-content-center">
					        <a href="register.php" style="text-decoration:none; color:black;">New User.? Register Here</a>
				        </div>
			        </div>
		        </div>
	        </div>
        </div>
        <a id="back-to-top" data-toggle="tooltip" data-placement="auto" title="Back-to-Top" style = "color:#000;background-color:#fff;border:2px solid black;" href="#" class="btn-light btn-lg back-to-top hidden-mobile" role="button"><i class="fas fa-arrow-up"></i></a>
        <?php require_once('footer.php'); ?>
    </body>
</html>