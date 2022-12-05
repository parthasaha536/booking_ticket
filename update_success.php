<?php

session_start();//session starts here 
 
 error_reporting(0);

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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>    </title>
<head>


<style>



body {
	 
	  background-image: url("theater2.png");
      font-family:Times, "Times New Roman", Georgia, serif;)
      background-size: cover;
	  background-repeat:No-repeat;
      overflow:auto;
	  height:1000px;
	  -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
}


.summit{
	
	margin-right:-30px;
	padding-top:20px;
}
.navbar {
  background-color: none;
  color:#BDC581;
  margin-top:15px;
  margin-left:00px;
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

.col-sm-4{
	margin-left:-30px;
	padding-top:20px;
	
	
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
  min-width: 150px;
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

.correct
{
	background-color:#b8e994;
	padding-left:70px;
	color:red;
	width:370px;
	height:60px;
	font-size:17px;
	margin-left:500px;
	margin-top:70px;
    border-left:8px solid green;
	border-right:none;
	border-top:none;
	border-bottom:none;
	 transition-duration: 5s;
}
.correct1
{
	background-color:#ffcccc;
	padding-left:70px;
	color:red;
	width:370px;
	height:60px;
	font-size:17px;
	margin-left:500px;
	margin-top:70px;
    border-left:8px solid red;
	border-right:none;
	border-top:none;
	border-bottom:none;
	 transition-duration: 5s;
}

.list{
	margin-left:500px;
	font-size:18px;
	color:white;
	text-decoration:none;
}
.list:hover{
	margin-left:500px;
	font-size:18px;
	color:red;
	text-decoration:none;
}



</style>
<body>




<div class="container">
 <div class="row">
	     <div class="col-sm-8">
		     <div class="summit">
		     <i  class="fab fa-google-play" ></i><span class="logo-text">&nbspSTAR WORLD</span>
		 
		 </div>
		 </div>
		 
		 
 <div class="col-sm-4">

    <div class="navbar">
	
	
     <a class="menu" href="http://localhost/reservation/admin_book.php"> Report &nbsp |</a>
	 <a class="menu" href="http://localhost/reservation/admin.php"> Upload  |</a>
	 
	 <div class="dropdown">
	 List &nbsp| |
	 <div class="dropdown-content">
	  <a class="menu" href="http://localhost/reservation/customer_list.php">Customer List </a>
	 <a class="menu" href="http://localhost/reservation/admin_index.php">Movie List </a>
	 <a class="menu" href="http://localhost/reservation/contact_problem_list.php">Problem List </a>
	 </div>
	 </div>&nbsp&nbsp&nbsp
	 
     
	 
	 <div class="dropdown">
	 <i class="fas fa-user-circle"></i>&nbsp<?php echo $_SESSION['name'];?> 
	 <div class="dropdown-content">
	 
	<!-- <a class="menu" href="http://localhost/reservation/profile.php">Profile </a>!-->
	 <a class="menu" href="http://localhost/reservation/logout.php">Log out </a>
	 </div>
	 </div>
	 

	 
	 
    </div>
</div>
<div>
</div>
</div>
</div>







</body>
</html>


<?php
if(isset($_POST['submit1']))
{
	$m_name=$_POST['m_name'];
	
	$movie_id=$_POST['movie_id'];
	
	$start=$_POST['start'];
	$end=$_POST['end'];
	$price=$_POST['price'];
	$description=$_POST['description'];
	$m_img_hi=$_POST['m_img_hi'];
	$h_name_hi=$_POST['h_name_hi'];
	$c_name_hi=$_POST['c_name_hi'];
	$s_t_2_hi=$_POST['2pm_hi'];
	$s_t_5_hi=$_POST['5pm_hi'];
	$s_t_8_hi=$_POST['8pm_hi'];
	
	if($_POST['h_name']==Null)
	{
		$h_name=$h_name_hi;
	}
	else
	{
		$h_name=$_POST['h_name'];
	}
	
	
	if($_POST['c_name']==Null)
	{
		$c_name=$c_name_hi;
	}
	else
	{
		$c_name=$_POST['c_name'];
	}
	
	
	
	if($_POST['h_name']==Null)
	{
		$m_img=$m_img_hi;
	}
	else
	{
		$m_img=$_POST['m_img'];
	}
	
	if($_POST['2pm']==Null)
	{
		$s_t_2=$s_t_2_hi;
	}
	else
	{
		
		$s_t_2=$_POST['2pm'];
	}
	//echo $s_t_2;
	if($_POST['5pm']==Null)
	{
		$s_t_5=$s_t_5_hi;
	}
	else
	{
		$s_t_5=$_POST['5pm'];
	}
	//echo $s_t_5;
	if($_POST['8pm']==Null)
	{
		$s_t_8=$s_t_8_hi;
	}
	else
	{
		$s_t_8=$_POST['8pm'];
	}
	
	
	//echo $name;
}


   /* echo $movie_id;
	echo"<br>";
    echo $m_name;
	echo"<br>";
	echo $m_img;
	echo"<br>";
	echo $c_name;
	echo"<br>";
	echo $s_t_2;
	echo"<br>";
	echo $s_t_5;
	echo"<br>";
	echo $s_t_8;
	echo"<br>";
	echo $h_name;
	echo"<br>";
	echo $start;
	echo"<br>";
	echo $end;
	echo"<br>";
	echo $price;
	echo"<br>";
	echo $description;
	echo"<br>";*/
	
	
	$connection=mysqli_connect('localhost' , 'root' , '' , 'theater');
	$update="update movie set name = '$m_name', img = '$m_img', category_id = '$c_name', time_2 = '$s_t_2', time_5 = '$s_t_5', time_8 = '$s_t_8', h_name = '$h_name', start = '$start', end = '$end', price = '$price', description = '$description' where movie_id = '$movie_id' ";              				
	$update1=mysqli_query($connection,$update);
	
	if($update1==true)
	 {
		 $r="Update Successfully !!";
		
		 echo"<input class='correct' type='text' value='$r' disabled >";
	 }
    else
     {
	    $r="Update Unsuccessfull !!";
		
	    echo"<input class='correct1' type='text' value='$r' disabled >";
     }




	 
$year=date("Y");
$month=date("m");
$day=date("d");

$j=1;
$start=mysqli_query($connection,"select  day(STR_TO_DATE(start, '%Y-%m-%d')) As start_day , month(STR_TO_DATE(start, '%Y-%m-%d')) As start_month , year(STR_TO_DATE(start, '%Y-%m-%d')) As start_year from movie");
while($row=mysqli_fetch_array($start))
{
    /*if($row['start_day']==$day && $row['start_month']==$month && $row['start_year']==$year)
    {
	   $i='1';
	   $update="UPDATE movie SET status = '$i' WHERE movie_id = '$j'";
	   $re=mysqli_query($connection,$update);
    }*/
	if($row['start_year']==$year)
	{
		if($row['start_month']==$month)
		{
			if($row['start_day']==$day)
			{
				$i='1';
	            $update="UPDATE movie SET status = '$i' WHERE movie_id = '$j'";
	            $re=mysqli_query($connection,$update);	
			}
			else if($row['start_day']>$day)
			{
				$i='2';
	            $update="UPDATE movie SET status = '$i' WHERE movie_id = '$j'";
	            $re=mysqli_query($connection,$update);
			}
		}
		else if($row['start_month']>$month)
		{
			$i='2';
	        $update="UPDATE movie SET status = '$i' WHERE movie_id = '$j'";
	        $re=mysqli_query($connection,$update);
		}
	}
	else if($row['start_year']>$year)
	{
		$i='2';
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


	
	
	
	



	 
	 
	 
	 
	
	

?>

<br>
<a class="list" href="http://localhost/reservation/admin_index.php">See List . . .</a>
