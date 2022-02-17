<?php
    $DATE=$_POST['date'];
    $NAME=$_POST['name'];
    $EMAIL=$_POST['email'];
    $MESSAGE=$_POST['message'];

    $con=mysqli_connect ('localhost','root');

        if($con->connect_error){
            die("Connection Failed :" .$con->connect-error);
        }

    mysqli_select_db ($con, 'vista');

    $q="insert into helpdesk(DATE,NAME,EMAIL,MESSAGE) values('$DATE','$NAME','$EMAIL','$MESSAGE')";

    
?>


<!DOCTYPE html>
<html>
<head>
    <title>Help Desk</title>
      
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
        
        @media only screen and ( max-width: 800px){
            #header-title{
                font-size: 36px;
            }
            #header-address{
                  font-size: 20px;
            }
            #carousel-text{
                font-size: 16px;
            }
        }  
        
        @media only screen and ( max-width: 480px){
            #header-title{
                font-size: 24px;
            }
            #header-address{
                  font-size: 16px;
            }
            #carousel-text{
                font-size: 12px;
            }
        }
        
  </style>
    </head>
<body class="bg-light">
    <header id="header-box" style="background-image: url(img/header.jpg); margin: auto; height: 220px; width: 100%;">
        <div class="container py-5">
            <div class="container text-center">
                <div class="container">
                    <h1 id="header-title" class="font-weight-bold" style="color: white;">Vista Word Institute of Computer Education</h1>
                    <h5 id="header-address" style="color: white;"> Chandpur Industrial Estate Varanasi - 221106</h5>
                </div>
            </div>
        </div> 
    </header>
    <nav class="container-fluid navbar navbar-expand-md navbar-dark sticky-top" style="background-color: black"> 
                <a class="navbar-brand font-weight-bold" href="index.html"> Vista Word Institute</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navTarget"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navTarget">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html"> Home </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.html"> About Us </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="faculty.html"> Faculty </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="courses.html"> Courses </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallary.html"> Gallary </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="enquiry.html"> Enquiry </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Admission.html"> Admission </a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Students</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="classschedule.html">Class Schedule</a>
                            <a class="dropdown-item" href="syllabus.html">Syllabus</a>
                            <a class="dropdown-item" href="helpdesk.html">Student Helpdesk</a>
                            <a class="dropdown-item" href="onlineclass.html">Online Classes</a>
                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.html"> Contact Us </a> 
                    </li>
                </ul>
                        <a class="disabled nav-link text-white font-weight-bold" href="admin.html"> Admin Access</a>
        </div>
    </nav><br><br>
    
<div class="container">
        <div class="container">
            <h2 class="container text-center my-5" style="color:red;"><?php 
                    if($con->query($q)===TRUE)
                        {
                            echo "Recorded Successfull";
                        }
                    else
                        {
                            echo "Error :".$q.$con->error;
                        }
                ?></h2>
        </div>
</div>
    <br>
        <br>
     <?php 
                mysqli_close($con);
            ?>
        <div style="text-align:center;">
            <a href="../Vista/index.html"><button type="button" class="btn btn-success"><h5> Back to Home </h5></button></a>        
            <a href="../Vista/helpdesk.html"><button type="button" class="btn btn-primary"><h5> Back to HelpDesk </h5></button></a>        
        </div>
    
    
    
    <footer class="container-fluid fixed-bottom" style="margin: 0px;background-color: black;">
        <div class="text-center">
            <p style="margin: 0px" class="text-white"> Copyright © 2021 || Vista Word Institute, Varanasi(U.P.) || All Rights Reserved </p>
        </div>
    </footer>
    </body>
</html>