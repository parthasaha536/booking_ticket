<?php

session_start();
 error_reporting(0);
 
 
 $user_id= $_SESSION['id'];

 $connection=mysqli_connect("localhost" , "root" , "" , "theater");
 
 if(isset($_POST['submit1']))
 {
	 
 
 
     
	 $m_name=$_POST['m_name'];

	 
	 $c_name=$_POST['c_name'];
	 
	  
	 $b_name=$_POST['b_name'];
	
	 $b_phone=$_POST['b_phone'];
	
	 $b_select=$_POST['b_select'];
	 
	 $b_sit=$_POST['b_sit'];
	
	 $date=$_POST['date'];
	
	  
	 $h_name=$_POST['h_name'];
	
	 
	 $bill=$_POST['bill'];
	
	 
	 
	 
	 /*$book="insert into books(booking_id,customer_id,theatre_name,movie_name,category_name,phone_no,booking_name,bill,sits,date,time) values ('$stop','$user_id','$h_name',' $m_name',' $c_name',' $b_phone','$b_name ','$bill ',' $b_sit','$date ','$b_select') ";

     $book1=mysqli_query($connection,$book);*/
	 
	$stop='1';
	$qq=mysqli_query($connection,"select booking_id from books");
	while($row=mysqli_fetch_array($qq))
	{
		
	      if($stop==$row['booking_id'])
		  {
			  $stop++;
	      }
	}
	if($stop==1)
	{
		//$add="insert into movie(name,img,movie_id,category_id,time_2,time_5,time_8,h_name,start,end,price,description) values('$m_name','$img','$stop','$c_name','$s_t_2','$s_t_5','$s_t_8','$h_name','$start','$end','$price','$description')";
	    //$re=mysqli_query($connection,$add);
		$book="insert into books(booking_id,customer_id,theatre_name,movie_name,category_name,phone_no,booking_name,bill,sits,date,time) values ('$stop','$user_id','$h_name',' $m_name',' $c_name',' $b_phone','$b_name ','$bill ',' $b_sit','$date ','$b_select') ";

        $book1=mysqli_query($connection,$book);
	}
	else
	
	{
	
	$first=$stop-1;
	//echo $first;
	$r=$_SESSION['id'];
	//echo $r;
	$qq1=mysqli_query($connection,"select movie_name,customer_id from books where booking_id='$first' ");
	while($row=mysqli_fetch_array($qq1))
	{

		$o=$m_name;
		//echo $o;
		//echo"<br>";
		$p="$row[movie_name]";
		//echo $p;
		//echo"<br>";
		$i=$_SESSION['id'];
		//echo $i;
		//echo"<br>";
		$t=$row['customer_id'];
		//echo $t;
		//echo"<br>";
		
		
		if($o==$p &&  $i== $t)
		{
			//echo "unsuccess";
		}
		else
		{
			
			$book="insert into books(booking_id,customer_id,theatre_name,movie_name,category_name,phone_no,booking_name,bill,sits,date,time) values ('$stop','$user_id','$h_name','$m_name','$c_name','$b_phone','$b_name ','$bill','$b_sit','$date ','$b_select') ";

            $book1=mysqli_query($connection,$book);
		}
	}
	}
	
	 
 
 }
 
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
     <a class="menu" href="http://localhost/reservation/home2.php">Home </a>
     |<a class="menu" href="http://localhost/reservation/reserve.php">| Reserve | </a>
     <a class="menu" href="#"> Contact us ||</a>&nbsp&nbsp&nbsp&nbsp&nbsp
	 
	 <div class="dropdown">
	 <i class="fas fa-user-circle"></i>&nbsp<?php echo $_SESSION['name'];?> 
	 <div class="dropdown-content">
	 <a class="menu" href="http://localhost/reservation/booking_history.php">Booking History </a>
	 <a class="menu" href="http://localhost/reservation/logout.php">Log out </a>
	 </div>
	 </div>
	 

	 
	 
    </div>
</div>
<div>
</div>
</div>
</div>

<?php

if($book1==true)
	 {
		 $r="Confirmation Successfull !!";
		
		 echo"<input class='correct' type='text' value='$r' disabled >";
	 }
else
{
	$r="Confirmation Unsuccessfull !!";
		
	echo"<input class='correct1' type='text' value='$r' disabled >";
}


?>





</body>
</html>