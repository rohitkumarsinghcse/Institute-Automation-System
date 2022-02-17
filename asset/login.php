<?php

require 'db.php';

session_start();
$_SESSION['k1']=$_SESSION['k2']='';
$msg="";
if(isset($_POST['login'])){
 
    //set data on session
    $qr="select * from admin where USERNAME='".$_POST['username']."' and PASSWORD='".$_POST['pass']."';";
    $result=mysqli_query($con, $qr);
    if(mysqli_num_rows($result)>0){
        while($i=mysqli_fetch_assoc($result)){
            $_SESSION['k1']= $i['USERNAME'];
            $_SESSION['k2']= $i['PASSWORD'];
            header("location:dashboard.php");
        } 
    }
    else{
        $msg="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
            Username or Password is Wrong!
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
        </div><br>";
    }
     
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Authentication!</title>
      
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
        
        @media only screen and ( max-width: 1024px){
            #header-title{
                font-size: 36px;
            }
            #header-address{
                  font-size: 20px;
            }
            #carousel-text{
                font-size: 16px;
            }
            #logo{
                height: 110px;
            }
        }  
        
        @media only screen and ( max-width: 600px){
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
<body class=" bg-light">
     <header id="header-box" style="background-image: url(../img/header.jpg); margin: auto; height: 220px; width: 100%;">
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
                <a class="navbar-brand font-weight-bold" href="../index.html">Vista Word Institute</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navTarget"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navTarget">
                <ul class="navbar-nav mr-auto">
                    <li> 
                        <a class="nav-link" href="../index.html"> Home </a>
                    </li> 
                     <li>
                        <a class="nav-link" href="../aboutus.html"> About Us </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="../faculty.html"> Faculty </a>
                    </li> 
                     <li>
                        <a class="nav-link" href="../courses.html"> Courses </a> 
                    </li> 
                     <li>
                        <a class="nav-link" href="../gallary.html"> Gallary </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../enquiry.html"> Enquiry </a>
                    </li>
                     <li>
                        <a class="nav-link" href="../Admission.html"> Admission </a>
                    </li>
                    <li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Students</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../classschedule.html">Class Schedule</a>
                            <a class="dropdown-item" href="../syllabus.html">Syllabus</a>
                            <a class="dropdown-item" href="../helpdesk.html">Student Helpdesk</a>
                            <a class="dropdown-item" href="../onlineclass.html">Online Classes</a>
                        </div>
                    </li>
                    
                     <li>
                        <a class="nav-link" href="../contactus.html"> Contact Us </a> 
                    </li>
                </ul>     
        </div>
    </nav>
    <br><br><br>
    <div class="container">
    
        <div style="text-align: center" class="container bg-success text-white py-2"><h3>Enter Login Details</h3></div><br><br>

        <form class="container form-group" method="post">
        <?php echo $msg;?>
        <div class="row">
            <div class="col-4">
                <label for="username"> Enter Username </label>
            </div>
            <div class="col-8">
                <input class="form-control form-control-sm" type="text" id="username" name="username" placeholder="Enter Username..." required>
            </div>
        </div><br>
        <div class="row">
            <div class="col-4">
                <label for="pass">Enter Password</label>
            </div>
            <div class="col-8">
                <input class="form-control form-control-sm" type="password" id="pass" name="pass" placeholder="Enter Password..." required>
            </div>
        </div><br>
        <div class="row">
            <div class="col-4">
                
            </div>
            <div class="col-8">
                <input type="submit" class="btn btn-primary" value="Login" name="login">
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
     </form>
    </div>
    
    <footer class="container-fluid fixed-bottom" style="margin: 0px;background-color: black;">
        <div class="text-center">
            <p style="margin: 0px" class="text-white"> Copyright © 2021 || Vista Word Institute, Varanasi(U.P.) || All Rights Reserved</p>
        </div>
    </footer>
    </body>
</html>
