<?php  
session_start();//session starts here  
  
?>

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

.menu{
	content: "?";
  color:white;
  float: left;
  font-size: 18px;
  text-align: center;
  padding: 0px 0px;
  text-decoration: none;
  font-size:22px;
}

.menu:hover{
	color:red;
	text-decoration: none;
	
}

.user-circle{
	
	color:white;
}
.user-circle:hover{
	text-decoration:none;
	color:white;
}


.dropdown {
	color:white;
    float: left;
	margin-right:-20px;
	font-size:24px;
	
  
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 180px;
  z-index: 1;
  font-size:px;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 6px 6px;
  text-decoration: none;
  display: block;
  text-align: left;
  text-align:justify;
}

.dropdown-content a:hover {
  background-color: none;
}

.dropdown:hover .dropdown-content {
  display: block;
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
     <a class="menu" href="http://localhost/reservation/home2.php">Home </a> |
     <a class="menu" href="http://localhost/reservation/reserve.php">Now Showing </a>|
     <a class="menu" href="http://localhost/reservation/contact.php">Contact us</a>&nbsp||&nbsp&nbsp&nbsp&nbsp
	 
	 <div class="dropdown">
	 <i class="fas fa-user-circle"></i>&nbsp<?php echo $_SESSION['name'];?> 
	 <div class="dropdown-content">
	
	 <a class="menu" href="http://localhost/reservation/profile.php">Profile </a>
	 <a class="menu" href="http://localhost/reservation/booking_history.php">Booking History </a>
	 
	 <a class="menu" href="http://localhost/reservation/logout.php">Log out </a>
	 </div>
	 </div>
	 
	 
	 
	 
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
}
$k++;
}

//total status query=select SUM(status) from movie where status=1

?>



</body>
</html>