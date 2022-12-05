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
</head>	


<style>



body {
	 
	 
      font-family:Times, "Times New Roman", Georgia, serif;)
      background-size: cover;
	  background-repeat:No-repeat;
      
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
  color:black;
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

.col-sm-5{
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
	
	color:black;
}
.user-circle:hover{
	text-decoration:none;
	color:black;
}


.dropdown {
	color:black;
    float: left;
	margin-right:-20px;
	font-size:24px;
	
  
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #ecf0f1;
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

.card-body{
	color:#2c3e50;
	margin-top:30px;
	margin-left:100px;
	width:1150px;
	border:2px solid #2c3e50;
	border-radius:20px;
	 box-shadow: 5px 10px ;
}
.form-control{
	margin-top:10px;
	border:2px solid #7f8c8d;
	border-radius:10px;
	width:150px;
	margin-left:0px;
}
.text-md-right{
	margin-left:-10px;
}
.span1{
	display:inline-block;
	margin-left:20px;
}
.span2{
	display:inline-block;
	margin-left:30px;
}
.span3{
	display:inline-block;
	margin-left:50px;
	
}
.span4{
	display:inline-block;
	margin-left:50px;
	
}
.span5{
	display:inline-block;
	margin-left:30px;
}
.span6{
	display:inline-block;
	margin-left:42px;
}
.span7{
	display:inline-block;
	margin-left:67px;
	
}
.span8{
	display:inline-block;
	margin-left:87px;
	
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
		 
		 
 <div class="col-sm-5">

    <div class="navbar">
     <a class="menu" href="http://localhost/reservation/home2.php">Home </a>
     |<a class="menu" href="http://localhost/reservation/reserve.php">| Now Showing | </a>
     <a class="menu" href="#"> Contact us ||</a>
	 
	 <div class="dropdown">
	 <i class="fas fa-user-circle"></i>&nbsp<?php echo $_SESSION['name'];?> 
	 <div class="dropdown-content">
	 <a class="menu" href="http://localhost/reservation/logout.php">Log out </a>
	 </div>
	 </div>
	 

	 
	 
    </div>
</div>
<div>
</div>
</div>
</div>
</div>


<?php
   
   
   $id=$_SESSION['id'];
   //$id='3';
  

 $connection=mysqli_connect("localhost","root","","theater");
 
 $query="select * from books where customer_id='$id'";
 $query1=mysqli_query($connection,$query);
 while($row=mysqli_fetch_array($query1))
 {
	 $m_name=$row['movie_name'];
	 //echo $m_name."<br>";
	 $h_name=$row['theatre_name'];
	 //echo $h_name."<br>";
	 $c_name=$row['category_name'];
	 //echo $c_name."<br>";
	 $b_name=$row['booking_name'];
	// echo $b_name."<br>";
	 $sits=$row['sits'];
	 //echo $sits."<br>";
	 $bill=$row['bill'];
	 //echo $bill."<br>";
	 $date=$row['date'];
	// echo $date."<br>";
	 $time=$row['time'];
	// echo $time."<br>";
	// echo"<br><br>";
	
	
	?>
	
<div class="card-body">

<span class="span1"><div class="form-group row">
<label for="m_name" class="col-md-5 col-form-label text-md-right"><b><h4>Movie</h4></b></label>
<div class="col-md-7">
<input type="text"    placeholder="" class="form-control"  value="<?php echo $m_name ?>"   disabled>
</div>
</div></span>

<span class="span2"><div class="form-group row">
<label for="m_img" class="col-md-5 col-form-label text-md-right"><b><h4>Hall</h4></b></label>
<div class="col-md-7">
<input type="text"     class="form-control"  value="<?php echo $h_name ?>"   disabled   >
</div>
</div></span>

<span class="span3"><div class="form-group row">
<label for="m_img" class="col-md-5 col-form-label text-md-right"><b><h4>Category</h4></b></label>
<div class="col-md-7">
<input type="text"     class="form-control"  value="<?php echo $c_name ?>"   disabled   >
</div>
</div></span>


<span class="span4"><div class="form-group row">
<label for="m_img" class="col-md-5 col-form-label text-md-right"><b><h4>Book Name</h4></b></label>
<div class="col-md-7">
<input type="text"     class="form-control"  value="<?php echo $b_name ?>"   disabled   >
</div>
</div></span>


<span class="span5"><div class="form-group row">
<label for="m_img" class="col-md-5 col-form-label text-md-right"><b><h4>Sits</h4></b></label>
<div class="col-md-7">
<input type="text"     class="form-control"  value="<?php echo $sits ?>"   disabled   >
</div>
</div></span>


<span class="span6"><div class="form-group row">
<label for="m_img" class="col-md-5 col-form-label text-md-right"><b><h4>Bill</h4></b></label>
<div class="col-md-7">
<input type="text"     class="form-control"  value="<?php echo $bill ?>"   disabled   >
</div>
</div></span>


<span class="span7"><div class="form-group row">
<label for="m_img" class="col-md-5 col-form-label text-md-right"><b><h4>Date</h4></b></label>
<div class="col-md-7">
<input type="text"     class="form-control"  value="<?php echo $date ?>"   disabled   >
</div>
</div></span>



<span class="span8"><div class="form-group row">
<label for="m_img" class="col-md-5 col-form-label text-md-right"><b><h4>Time</h4></b></label>
<div class="col-md-7">
<input type="text"     class="form-control"  value="<?php echo $time ?>"   disabled   >
</div>
</div></span>

</div>
	
	
	
	
	
	<?php 
	
 }
 
 



?>

<br><br><br>




</body>
</html>