<?php

require 'db.php';
session_start();

if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
}

if($_SESSION['k1']!='' && $_SESSION['k2']!='')
{
   
?>

<!DOCTYPE html>
<html>
<head>
    <title>Administrative credentials</title>
      
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
                <a class="navbar-brand font-weight-bold" href="../index.html"> Vista Word Institute  </a>
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
                        <a class="nav-link" href="../courses.html">Courses </a> 
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
               <a class="text-green font-weight-bold" href="dashboard.php" title="Refresh">Refresh</a> 
                         
        </div>
    </nav><br>
    <div class="section container row">
        <div class="col-4">
            
        </div>
        <div class="col-4">
            <h4>Logged in By <span class="text-green font-weight-bold bg-success"><?php echo $_SESSION['k1']?></span></h4>
        </div>
        <div class="col-4">
            <form method="post">
                   <input class="btn bg-warning" type="submit" name="logout" value="Logout" title="Click to Logout">
            </form> 
        </div>
    </div>
         <!--
        //Admission
        -->  
    <section class="container border">
    
        <div style="text-align: center" class="container bg-success text-white py-2"><h3>Admission</h3></div><br>
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">DATE</th>
      <th scope="col">NAME</th>
      <th scope="col">GENDER</th>
      <th scope="col">FATHER NAME</th>
      <th scope="col">MOTHER NAME</th>
      <th scope="col">MOBILE</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">COURSE</th>
      <th scope="col">DATE OF BIRTH</th>
      <th scope="col">QUALIFICATION</th>
      <th scope="col">TIME</th>
    </tr>
  </thead>
  <tbody>
    <tr>
         <?php
            $a_q='select * from admission';
            $re=mysqli_query($con, $a_q);
            if (mysqli_num_rows($re)>0) {
                while ($r=mysqli_fetch_assoc($re)) {
                 ?>
      <th scope="row"><?php echo $r['ID']?></th>
      <td><?php echo $r['DATE']?></td>
      <td><?php echo $r['NAME']?></td>
      <td><?php echo $r['GENDER']?></td>
      <td><?php echo $r['FATHERNAME']?></td>
      <td><?php echo $r['MOTHERNAME']?></td>
      <td><?php echo $r['MOBILE']?></td>
      <td>
        <?php echo $r['ADDRESS']?><br>
        <?php echo $r['CITY']?><br>
        <?php echo $r['STATE']?><br>
        <?php echo $r['NATIONALITY']?>

      </td>
      <td><?php echo $r['COURSE']?></td>
      <td><?php echo $r['DATEOFBIRTH']?></td>
      <td><?php echo $r['QUALIFICATION']?></td>
      <td><?php echo $r['TIME']?></td>
    </tr>
         <?php
                }
            }
            ?>
  </tbody>
</table>   
       
    </section>
      <!--
        //end Faculty

        //Inquiry
       -->
         <hr> 
    <section class="container border">
    
        <div style="text-align: center" class="container bg-success text-white py-2"><h3>Inquiry</h3></div><br>
        
       
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">DATE</th>
      <th scope="col">NAME</th>
      <th scope="col">FATHER NAME</th>
      <th scope="col">MOTHER NAME</th>
      <th scope="col">MOBILE</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">COURSE</th>
      <th scope="col">DATE OF BIRTH</th>
    </tr>
  </thead>
  <tbody>
    <tr>
         <?php
            $e_q='select * from enquiry';
            $er=mysqli_query($con, $e_q);
            if (mysqli_num_rows($er)>0) {
                while ($r=mysqli_fetch_assoc($er)) {
                 ?>
      <th scope="row"><?php echo $r['SNO']?></th>
      <td><?php echo $r['DATE']?></td>
      <td><?php echo $r['NAME']?></td>
      <td><?php echo $r['FATHERNAME']?></td>
      <td><?php echo $r['MOTHERNAME']?></td>
      <td><?php echo $r['MOBILE']?></td>
      <td><?php echo $r['ADDRESS']?></td>
      <td><?php echo $r['COURSE']?></td>
      <td><?php echo $r['DATEOFBIRTH']?></td>
    </tr>
         <?php
                }
            }
            ?>
  </tbody>
</table>     
       
    </section>
      <!-- 
        //end Inquiry

        //Help-Desk
      -->
         <hr> 
    <section class="container border">
    
        <div style="text-align: center" class="container bg-success text-white py-2"><h3>Help-Desk</h3></div><br>
        
        <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">DATE</th>
      <th scope="col">NAME</th>
      <th scope="col">E-MAIL</th>
      <th scope="col">MESSAGE</th>
    </tr>
  </thead>
  <tbody>
    <tr>
         <?php
            $h_q='select * from helpdesk';
            $hr=mysqli_query($con, $h_q);
            if (mysqli_num_rows($hr)>0) {
                while ($r=mysqli_fetch_assoc($hr)) {
                 ?>
      <th scope="row"><?php echo $r['ID']?></th>
      <td><?php echo $r['DATE']?></td>
      <td><?php echo $r['NAME']?></td>
      <td><?php echo $r['EMAIL']?></td>
      <td><?php echo $r['MESSAGE']?></td>
    </tr>
         <?php
                }
            }
            ?>
  </tbody>
</table>        
    </section>
      <!-- 
        //end Help-Desk
-->
    
    <footer class="container-fluid fixed-bottom" style="margin: 0px;background-color: black;">
        <div class="text-center">
            <p style="margin: 0px" class="text-white"> Copyright © 2021 || Vista Word Institute, Varanasi(U.P.) || All Rights Reserved </p>
        </div>
    </footer>
    </body>
</html>

<?php
}
else{
    header("location:login.php");
}
mysqli_close($con);
?>