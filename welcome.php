<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<title>    </title>
<head>	
	
<style>

body {
  font-family:Times, "Times New Roman", Georgia, serif;)
}

.img::before{
	 content: "";
	  background-image: url("theather1.jpg");
	   background-size: cover;
      position: absolute;
	  height:850px;
      top: 0px;
      right: 0px;
      bottom: 0px;
      left: 0px;
	  background-repeat:No-repeat;
      overflow:auto;
      opacity: 0.5;
}

.summit{
	
	margin-right:-30px;
	padding-top:20px;
}

.navbar {
  background-color: none;
  color:black;
  margin-top:30px;
  margin-left:70px;
}

.navbar a {
  color:black;
  float: left;
  font-size: 18px;
  text-align: center;
  padding: 0px 0px;
  text-decoration: none;
  font-size:22px;
}

.navbar a:hover{
	color:red;
}


.fa-google-play
{
	
	font-size:70px;
	color:red;
}
.logo-text{
	
	color:red;
	font-size:60px;
	text-shadow: 2px 2px;
	padding-bottom:20px;
	
}
h1{
	text-align:center;
	margin-top:200px;
	font-size:90px;
	text-shadow: 4px 4px;
}
h2{
	text-align:center;
	margin-left:570px;
	font-size:40px;
	text-shadow: 2px 2px;
}


</style>
<body>

<div class="img">
<div class="container">
 <div class="row">
        
	     <div class="col-sm-6">
		     <div class="summit">
		     <i  class="fab fa-google-play" ></i><span class="logo-text">&nbspSTAR WORLD</span>
		 </div>
		 </div>
		 
		 
		 
 <div class="col-sm-6">

    <div class="navbar">
     <a href="http://localhost/reservation/home1.php">Home</a>|
     <a href="http://localhost/reservation/reserve1.php">Reserve</a>|
     <a href="#">Contact us</a>|
	 <a href="http://localhost/reservation/login.php">Login</a>|
	 <a href="http://localhost/reservation/regitration.php">Registration</a>
  
    </div>

</div>
</div>
</div>
</div>

<div class="">

<h1> Online Ticket Reservation</h1>
<h2> Choose Your Own Hall</h2>
</div>

<?php

$year=date("Y");
$month=date("m");
$day=date("d");

$connection=mysqli_connect('localhost' , 'root' , '' , 'theater');
$j=1;
$start=mysqli_query($connection,"select  day(STR_TO_DATE(start, '%Y-%m-%d')) As start_day , month(STR_TO_DATE(start, '%Y-%m-%d')) As start_month , year(STR_TO_DATE(start, '%Y-%m-%d')) As start_year from movie");
while($row=mysqli_fetch_array($start))
{
if($row['start_day']==$day && $row['start_month']==$month && $row['start_year']==$year)
{
	$i='1';
	$update="UPDATE movie SET status = '$i' WHERE movie_id = '$j'";
	$re=mysqli_query($connection,$update);
}
$j++;
}

$k='1';
$end=mysqli_query($connection,"select  day(STR_TO_DATE(end, '%Y-%m-%d')) As end_day , month(STR_TO_DATE(end, '%Y-%m-%d')) As end_month , year(STR_TO_DATE(end, '%Y-%m-%d')) As end_year from movie");
while($row=mysqli_fetch_array($end))
{
if($row['end_day']==$day && $row['end_month']==$month && $row['end_year']==$year)
{
	$i='0';
	$update="UPDATE movie SET status = '$i' WHERE movie_id = '$k'";
	$re=mysqli_query($connection,$update);
	$h_update="UPDATE movie SET time_2 = '0',time_5 = '0',time_8 = '0' WHERE movie_id = '$k'";
	$h_update1=mysqli_query($connection,$h_update);
}
$k++;
}

//total status query=select SUM(status) from movie where status=1

?>



</body>
</html>