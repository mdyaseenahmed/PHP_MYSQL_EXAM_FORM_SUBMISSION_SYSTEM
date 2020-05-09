<!-- Help Page-->
<!DOCTYPE html>
<html lang="en">
<head>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
   <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <!--Fontawesome CDN-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

   <!--Custom styles-->
   <link rel="stylesheet" type="text/css" href="css/styles.css">

   <!--Custom Favicon.-->
   <link rel="icon" type = "image/png" sizes = "64x64" href = "css/images/logo.png">
   <style type = "text/css" >
   @import url('https://fonts.googleapis.com/css?family=Acme|Bree+Serif|Patrick+Hand|Volkhov|Handlee|PT+Serif|Numans|Bitter|Odibee+Sans|Simonetta|Trade+Winds&display=swap');
      .mcon{
         border: none;
         margin-top: 2%;
         box-shadow: -2px -2px 5px rgba(0,0,0,0.5),
                3px 3px 6px rgba(0,0,0,0.5);
         font-family: 'PT Serif';
         border-radius: none;
         background-color: rgba(127,45,25,0.1);
         color:black;
      }
      html,body{
         background-repeat: no-repeat;
         background-position:center;
         background-size: contain;
         background-attachment: fixed;
      }

      .back-to-top{
         position: fixed;
         bottom: 25px;
         right: 25px;
         display: none;
      }
   </style>
   <title>Help</title>
</head>
<body>
   <div id="progress"></div>
   <nav class="navbar navbar-light" style = "background-color: #5a0533;margin-bottom:2%;box-shadow: 3px 3px 5px;border-bottom:3px solid black;">
      <a class="navbar-brand text-white" style = "font-family:'Acme';font-size:30px" href="http://www.bmsce.ac.in">BMSCE</a>
      <a class="navbar-brand text-white" style = "font-family:'Acme';color:'red';" href="index.php"><i class="fas fa-home" aria-hidden="true"></i> Home</a>
   </nav>
   <div class = "col-lg-6 m-auto mcon" style = "border-radius: none;">
      <h1 style = "color : Navy;font-size:45px;letter-spacing: 2px;padding-bottom:0px;padding-top:15px;margin-top:1px;text-decoration:underline dashed;font-weight:bold;text-shadow:1px 1px 2px black;" align="center"></strong>INSTRUCTIONS</strong></h1>
      <hr color = "black" height = "20px"/>
      <h2><strong> How To Register For Exam? </strong></h2>
      <p align="center" style = "padding-left:5px;text-shadow: 0.5px 0.5px black;padding-right: 10px;
				color:black;font-size:20px;text-align:justify;">
      1. First Students Has To Register.<br/>2. By Filling Out The Registration Form which contains basic details 
      Like (USN, Name, Mobile, Email, & Set The Password..)<br/>
      3. After Registering Go To Login Page & <br /> 4. Enter The Login Details Which You Have Set During the time of Registration.<br / >
      5. Once Login is Successful Choose The Exam You Want To Appear.<br />
      6. Select Your Respective Department.<br />
      7. Select The Semester.<br />
      8. Then Finally Select The Subjects.<br/>
      </p>
      <hr color =  "black" size = "2px" />
         
      <h3 style = "text-shadow: 0.5px 0.5px black;padding-right: 10px;"> STUDENTS ELIGIBLE TO REGISTER FOR SEE:</h3>
            <p align="left" style = "padding-left:5px;color:black;text-shadow: 0.5px 0.5px black;padding-right: 10px;font-size:20px;text-align:justify;">Who don't have year back <br/>
         <br/>


      <h4 style = "text-shadow: 0.5px 0.5px black;padding-right: 10px;"> NOTE: CANNOT REGISTER FOR FASTTRACK EXAM BEFORE SEE</h4>
            <p style = "text-shadow: 0.5px 0.5px black;padding-right: 10px;margin-bottom:0%;">LINK FOR FASTTRACK WILL BE AVAILABLE IN JUNE 2020 (After Even Sem)</p><br/>
      <br/>
   </div>
   <!--Scroll Up js File-->
   <script src = "js/scroll.js"></script>
   <a id="back-to-top" style = "color:#000;background-color:#fff;border:2px solid black;" href="#" class="btn-light btn-lg back-to-top" role="button"><i class="fas fa-arrow-up"></i></a>
   <?php require_once('footer.php');?>
   <!-- Progress js File -->
   <script src = "js/progress.js"></script>
</body>
</html>