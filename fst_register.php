<?php
    require_once('connection.php');
    session_start();
    extract($_POST);
    
    if(isset($Register))
    {
        //check user alereay exists or not
        $sql=mysqli_query($con,"select * from fst_reg where usn = '$USN'");
        $r=mysqli_num_rows($sql);
        if($r==true)
        {
            $err= "<font color='red'>USN Already Exists..!</font>";
        }
        else
        {
            //image
            $image1 = $_FILES['img']['name'];
            //encrypt your password
            $pass = md5($psswd);



            $query="insert into fst_reg values('','$fname','$lname','$dob','$USN','$mail','$dept','$sem','$gen','$phone','$image1','$pass')";
            $data = mysqli_query($con,$query);

            //upload image

            mkdir("images/fst/$USN");
            move_uploaded_file($_FILES['img']['tmp_name'],"images/$USN/".$_FILES['img']['name']);

            if($data)
            {
                $err="<font color='green'>Registered successfully...!!</font>";
            }
        }
    }
?>
<!-- register.php -->
<!-- REGISTRATION FORM -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <!------ Include the above in your HEAD tag ----------> 
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        
        <!-- Font special for pages-->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Vendor CSS-->
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
        
        <!--Bootsrap 4 CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
        <!--Custom styles-->
        <link rel="stylesheet" type="text/css" href="css/reg_styles.css">

        <!--Custom Favicon.-->
        <link rel="icon" type = "image/png" sizes = "64x64" href = "css/images/logo.png">
        <style type = "text/css">
            .back-to-top 
            {
                position: fixed;
                bottom: 25px;
                right: 25px;
                display: none;
            }
            .mh3:hover
            {
                border: 2px solid black;
                padding: 5px;
                border-radius: 5px;
                color:white;
                background-color: black;
            }

            .mnav ul li a:hover{
                color:whitesmoke;
                padding: 2px;
                border: 5px solid black;
                border-radius: 5px;
                background-color: black;
            }
        </style>
        
        <script type = "text/javascript">
            window.onload = function () 
            {
                document.getElementById("phone").onchange = passwdlen;
                document.getElementById("pass1").onchange = passwdlen2;
            }

            function passwdlen()
            {
                var num = document.getElementById("phone").value;
                if (num.length < 10 )
                    document.getElementById("phone").setCustomValidity("phone length shuld be = 10");
                else
                    document.getElementById("phone").setCustomValidity('');
                //empty string means no validation error
            }

            function passwdlen2() 
            {
                var pass = document.getElementById("pass1").value;
                if (pass.length < 8 )
                    document.getElementById("pass1").setCustomValidity("passwd length shuld be > 8");
                else
                    document.getElementById("pass1").setCustomValidity('');
                //empty string means no validation error
            }
		</script>
        <title>Fastrack Registration</title>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar mnav navbar-expand-lg navbar-dark bg-dark static-top" style="border: 5px double black;border-radius:5px;">
            <div class="container" style = "font-family:'PT Serif';font-size:22px;padding-right:0px;margin-right:0%;">
                <a style = "margin-left:0%;padding-left:0px" class="navbar-brand" href="http://bmsce.ac.in">
                <h3 class = "mh3">BMSCE</h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Registration
                            <span class="sr-only">(current)</span>
                            </a>
                        </li>
            
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><i class="fa fa-key" aria-hidden="true"></i> Login</a>
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
        
        <!--Form-->
        <div class=" mcontainer">
            <form name = "register" method = "post" class = "myform" action = "" enctype="multipart/form-data">
                <h1 class = "tit">Fastrack Registration</h1>
                    <?php echo @$err; ?>
                <hr class = "mhr" color = "black" height = "15px" />
                <table width = "100%">
                    <tr>  
                        <td> 
                            <label class = "label required" >First Name</label>
                        </td>
                    
                        <td>
                            :          
                        </td>
                
                        <td class = "td1">
                            <input type = "text" name = "fname" placeholder = "First Name" class = "required" required/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class = "label required">Last Name</label>
                        </td>

                        <td>
                            :
                        </td>
                        
                        <td class = "td1">
                            <input type = "text" name = "lname" placeholder = "Last Name" required/>
                        </td>
                    </tr>

                    
                    <tr>  
                        <td> 
                            <label>Birth Date</label>
                        </td>
                        <td>
                            :
                        </td>
                        <td class = "td1">
                            <input type = "date" name = "dob" placeholder = "YYYY/MM/DD" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class = "label">Gender</label>
                        </td>

                        <td>
                            
                        </td>
                        
                        <td class = "td1">
                            <input type = "radio" name = "gen" value = "M" />&nbsp;&nbsp;&nbsp;&nbsp;Male
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type = "radio" name = "gen" value = "F" />&nbsp;&nbsp;&nbsp;&nbsp;Female
                        </td>
                    </tr>

                    <tr>  
                        <td> 
                            <label class = "label required">USN</label>
                        </td>
                        <td>
                            :
                        </td>
                        <td class = "td1">
                            <input type = "text" name = "USN" placeholder = "1BM19CS000" required/>
                        </td>
                    </tr>

                    <tr>  
                        <td> 
                            <label class = "label required">Email</label>
                        </td>
                        <td>
                            :
                        </td>
                        <td class = "td1">
                            <input type = "email" name = "mail" placeholder = "student.cs19@bmsce.ac.in" required/>
                        </td>
                    </tr>

                    <tr>  
                        <td> 
                            <label class = "label required">Department</label>
                        </td>
                        <td>
                            :
                        </td>
                        <td class = "td1">
                        <select name = "dept" class = "select1" placeholder = "computer science" required>
                            <option name = "s1" selected> Computer Science & Engineering</option>
                            <option name = "s2"> Information Science Engineering</option>
                            <option name = "s3"> Civil Engineering </option>
                            <option name = "s4"> Aerospace Engineering </option>
                            <option name = "s5"> Medical Engineering </option>
                            <option name = "s6"> Electrical Engineering </option>
                            <option name = "s7"> Mechnical Engineering </option>
                            <option name = "s8"> Electronincs & Communication </option>
                            </select>
                        </td>
                    </tr>

                    <tr>  
                        <td> 
                            <label class = "label required">Semester</label>
                        </td>
                        <td>
                            :
                        </td>
                        <td class = "td1">
                            <select name = "sem" class = "select12" placeholder = "" required>
                            <option name = "s1" disabled> 1 </option>
                            <option name = "s2"> 2 </option>
                            <option name = "s3" disabled> 3 </option>
                            <option name = "s4" selected> 4 </option>
                            <option name = "s5"disabled> 5 </option>
                            <option name = "s6"> 6 </option>
                            <option name = "s7" disabled> 7 </option>
                            <option name = "s8"> 8 </option>
                            </select>
                        </td>
                    </tr>

                    <tr>  
                        <td> 
                            <label>Phone</label>
                        </td>
                        <td>
                            :
                        </td>
                        <td class = "td1">
                            <input type = "phone" name = "phone" id = "phone" placeholder = "9998887776" />
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <label class = "label required">Upload Your Image</label>

                        </td>
                        <td> : </td>
					    <td><input class="form-control" type="file" name="img" id = "img" /></td>
				    </tr>
                    
                    <tr>  
                        <td> 
                            <label class = "label required">Password</label>
                        </td>
                        <td>
                            :
                        </td>
                        <td class = "td1" class = "label required">
                            <input type = "password" name = "psswd" id = "pass1" placeholder = "Password" required/>
                        </td>
                    </tr>

                    <tr>  
                        <td> 
                        <input type = "submit" name = "Register" class = "login_btn" value = "Submit" />
                        </td>
                        <td>
                            
                        </td>
                        <td class = "td1">
                            <input type = "reset" class="reset_btn" value = "Reset" />
                        </td>
                    </tr>
                </table>
            </form>            
        </div>
        <!--Scroll Up js File-->
        <script src = "js/scroll.js"></script>
        <a id="back-to-top" style = "color:#000;background-color:rgb(4,122,133);border:2px solid black;" href="#" class="btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
    <?php require_once('footer.php');?> 
    </body>
</html>