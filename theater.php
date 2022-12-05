
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>    </title>
<head>

<style>


body {
	 
	 
 background-color:#ecf0f1;
background-size:cover;
background-repeat:No-repeat;
overflow:auto;
font-family:Times, "Times New Roman", Georgia, serif;
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
	  opacity:0.6;
     
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
	margin-left:00px;
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


.head{
	margin-left:340px;
}

.card-body{
	color:red;
	margin-top:120px;
	margin-left:200px;
	width:1000px;
	border:2px solid red;
	
	border-radius:20px;
}

.form-control{
	margin-top:10px;
	border:2px solid red;
	border-radius:10px;
	width:250px;
}
.row{
	font-size:25px;
}

.btn-primary{
	background-color:red;
	color:white;
	border:1px solid white;
	margin-left:-148px;
}
.btn-primary:hover{
	color:red;
	background-color:white;
	border:2px solid red;
}

.span1{
	display:inline-block;
	margin-left:20px;
}
.span2{
	display:inline-block;
	margin-left:50px;
}

.correct
{
	background-color:#ffcccc;
	padding-left:70px;
	color:red;
	width:1000px;
	height:60px;
	font-size:20px;
	margin-left:200px;
	margin-top:0px;
    border-left:8px solid red;
	border-radius:10px;
	border-right:8px solid red;
	border-top:none;
	border-bottom:none;
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
	
  
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 150px;
  z-index: 1;
  font-size:12px;
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
	     <div class="col-sm-8">
		     <div class="summit">
		     <i  class="fab fa-google-play" ></i><span class="logo-text">&nbspSTAR WORLD</span>
			 
		 </div>
		 </div>
		 
		 
 <div class="col-sm-4">

    <div class="navbar">
     <a class="menu" href="http://localhost/reservation/home1.php">Home </a> |
     <a class="menu" href="http://localhost/reservation/reserve.php">Reserve </a>|
     <a class="menu" href="#">Contact us</a> ||
	 
	 <div class="dropdown">
	 <i class="fas fa-user-circle"></i>&nbsp<?php echo $_SESSION['name'];?> 
	 <div class="dropdown-content">
	 <a class="menu" href="http://localhost/reservation/logout.php">Log out </a>
	 </div>
	 
	 </div>
  
    </div>

</div>
</div>
</div>

<div class="card-body">

<form action="" method="POST">

<h1 class="head"><b>Make New Theater</b></h1><br>

<span class="span1"><div class="form-group row">
<label for="h_name" class="col-md-5 col-form-label text-md-right"><b><h4>Hall Name</h4></b></label>
<div class="col-md-7">
<input type="text"    placeholder="Enter Hare ..." class="form-control" name="h_name"   required>
</div>
</div></span>




<span class="span2"><div class="form-group row">
<label for="sit" class="col-md-5 col-form-label text-md-right"><b><h4>Sits</h4></b></label>
<div class="col-md-7">
<input type="number"    placeholder="Enter Hare ..." class="form-control" name="sit"    required>
</div>
</div></span>



<div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
<button type="submit" name="submit" class="btn btn-primary" >
Create
</button>
</div>
</div>




</form>

</div>









<?php

$connection=mysqli_connect("localhost" , "root" , "" , "theater");

if(isset($_POST['submit']))
{
	$name=$_POST['h_name'];
	$sit=$_POST['sit'];
	
	$stop='1';
	$qq=mysqli_query($connection,"select hall_id from theatre");
	while($row=mysqli_fetch_array($qq))
	{
		
	      if($stop==$row['hall_id'])
		  {
			  $stop++;
	      }
	}
	if($stop==1)
	{
		$add="insert into theatre(name,seat_count,hall_id) values('$name','$sit','$stop')";
	    $re=mysqli_query($connection,$add);
	}
	$first=$stop-1;
	$qq1=mysqli_query($connection,"select * from theatre where hall_id='$first' ");
	while($row=mysqli_fetch_array($qq1))
	{
		
		if($name==$row['name'])
		{
			$s='Hall Name Already Registered !!';
	        echo"<input class='correct' type='text' value='$s'>";
		}
		else
		{
			$add="insert into theatre(name,seat_count,hall_id) values('$name','$sit','$stop')";
	        $re=mysqli_query($connection,$add);
			
		}
	}
	
}




?>

</div>

</body>
</html>