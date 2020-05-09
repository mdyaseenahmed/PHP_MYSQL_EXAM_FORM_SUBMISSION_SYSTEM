<!DOCTYPE html>
<html>
	<head>
		<title> About </title>
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
        <script src = "js/scroll.js"></script>
        
        <!--Custom Favicon.-->
        <link rel="icon" type = "image/png" sizes = "64x64" href = "css/images/logo.png">
        
        <style type = text/css>
            @import url('https://fonts.googleapis.com/css?family=Acme|Bree+Serif|Patrick+Hand|Volkhov|Handlee|PT+Serif|Numans|Bitter|Odibee+Sans|Simonetta|Trade+Winds&display=swap');
            
            .back-to-top
            {
                position: fixed;
                bottom: 25px;
                right: 25px;
                display: none;
            }
            
            .container
            {
                top:0;
                margin-top:0;
                padding-top:0;
            }
			
			@import url('https://fonts.googleapis.com/css?family=Acme|Bree+Serif|Patrick+Hand|Volkhov|Handlee|PT+Serif|Numans|Bitter|Odibee+Sans|Simonetta|Trade+Winds&display=swap');
			.mcon{
				box-shadow: -2px -2px 5px rgba(0,0,0,0.5),
                3px 3px 6px rgba(0,0,0,0.5);
    			margin-top: 2%;
				font-family: 'PT serif';
				background-color: rgba(127,45,25,0.1);
				color:black;
			}
			html,body{
				background-repeat: no-repeat;
				background-position:center;
				background-size: contain;
				background-attachment: fixed;
			}

			ol{
				padding-bottom: 20px;
			}
			ol li{
				padding-right: 10px;
				font-weight:bold;
				font-size: 20px;
				text-shadow: 0.5px 0.5px black;
				text-align: justify;
				padding-bottom: 3px;
			}
			
        </style>	
	</head>
	<body>
		<div id="progress"></div>
		<nav class="navbar navbar-light" style = "background-color: #5a0533;margin-bottom:2%;box-shadow: 3px 3px 5px;border-bottom:3px solid black;">
			<a class="navbar-brand text-white" style = "font-family:'Acme';font-size:30px" href="http://www.bmsce.ac.in">BMSCE</a>
			<a class="navbar-brand text-white" style = "font-family:'Acme';color:'red';" href="index.php"><i class="fas fa-home" aria-hidden="true"></i> Home</a>
		</nav>
   
		<div class = "col-lg-7 mcon m-auto">
			<h1 style = "color : purple;font-weight:bold;font-size:45px;padding-bottom:0px;padding-top:10px;margin-top:1px;text-decoration:underline dashed;text-shadow:1px 1px 2px black;" align = "center">About</h1>
			<hr color = "black" size = "2px">

			<p align="center" style = "font-weight:bold;text-shadow: 0.5px 0.5px black;font-size:20px;text-align:justify;">&nbsp;
				Exam Registration system is used in the effective dispatch of registration
				form to all of the students. This system adopts a comprehensive approach to
				minimize the manual work and schedule resources, time in a cogent manner. 
				The core of the system is to get the online registration form (with details such as name, 
				reg.no etc.,) filled by the student.


			</p>
			<hr color = "black" size = "2px">

			<h1 style = "color : navy;font-weight:bold;padding-bottom:0px;padding-top:0px;margin-top:0px;text-decoration:underline dotted;text-shadow:1px 1px 2px black;">Motivation</h1>
			<ol>
				<li>Online Exam Registration Portal helps the students in registering their Semester End Examination Subjects Easily without manually registering but instead through online web Portal. </li>
				<li>Wastage of Time, Effort is reduced.</li>
				<li>All the students details regarding the Exam Registration is maintained in a single Database that can be accessed Easily Anywhere & Anytime.</li>
				<li>Loss of Data is minimized as the details is maintained in a Database.</li>
				<li>Students can fill the form anywhere and anytime.</li>
				<li>Being an Online Exam application form submission system, it will reduce the paper work</li>
				<li>It helps in maintaining the Data consistency & Transparency.</li>
				<li>Leads to Easy administration as the admin can easily check the number of students who have registered also admin can Add, Edit or Update & Delete the subjects, & can see the subjects which are already listed.</li>
				<li>Probability of making Errors is less with the use of GUI.</li>
				<li>Useful for Educational institutes where number of students involved is more.</li>
			</ol>
		</div>
		<a id="back-to-top" style = "color:#000;background-color:#fff;border:2px solid black;" href="#" class="btn-light btn-lg back-to-top" role="button"><i class="fas fa-arrow-up"></i></a>
		<?php require_once('footer.php'); ?>
		<!-- Progress js File -->
		<script src = "js/progress.js"></script>
	</body>
</html>