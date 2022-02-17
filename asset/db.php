<?php

 $server="localhost";   //your server name
 $db_name="vista";		//your db name
 $user_name="root";		//your username name
 $pass="";				//your password

//don't changw anything
 $con=mysqli_connect($server,$user_name,$pass,$db_name);
 if(!$con){
 	die($con);
 	header("location:admin.html");
 }

?>