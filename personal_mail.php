
<?php  
session_start();//session starts here 
 
 error_reporting(0);
 
 
 $connection=mysqli_connect("localhost" , "root" , "" , "theater");
 
 //$agent_email=$_SESSION['email'];
 
 if(isset($_POST['submit']))
 {
	 $customer_email=$_POST['submit'];
	 //echo $customer_id;
	 //$customer_email=$_POST['customer_email'];
	 //echo $customer_email;
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
	 
	 

 
      font-family:Times, "Times New Roman", Georgia, serif;)
      background-size: cover;
	  background-repeat:No-repeat;
      overflow:auto;
	  -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
	 
font-family:Times, "Times New Roman", Georgia, serif;
}



.summit{
	
	margin-right:-30px;
	padding-top:20px;
}
.navbar {
  background-color: none;
  color:#BDC581;
  margin-top:15px;
  margin-left:-20px;
}

.menu{
	
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

.user-circle{
	
	color:black;
}
.user-circle:hover{
	text-decoration:none;
	color:white;
}


.dropdown {
	color:black;
    float: left;
	margin-right:-20px;
	font-size:23px;
	
  
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 150px;
  z-index: 1;
  font-size:20px;
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
	color:red;
	margin-top:100px;
	margin-left:350px;
	width:600px;
	border:2px solid red;
	
	border-radius:20px;
}

.btn-primary{
	background-color:red;
	color:white;
	width:200px;
	border:1px solid white;
	margin-left:-78px;
	border-radius:10px;
}
.btn-primary:hover{
	color:red;
	background-color:white;
	border:2px solid red;
}


.form-control{
	margin-top:10px;
	border:2px solid red;
	border-radius:10px;
	width:350px;
	
	margin-left:-20px;
}

.form-control1{
	margin-top:-20px;
	border:2px solid red;
	border-radius:10px;
	width:350px;
	height:100px;
	
	margin-left:-20px;
}

.head{
	margin-left:210px;
	color:#6F1E51;
}
.text-md-right{
	margin-left:-110px;
}
.correct
{
	background-color:#ffcccc;
	padding-left:40px;
	color:red;
	width:370px;
	position:absolute;
	height:60px;
	font-size:17px;
	margin-left:450px;
	margin-top:-300px;
    border-left:8px solid red;
	border-right:none;
	border-top:none;
	border-bottom:none;
}

</style>

<body>

 


<div class="container">
 <div class="row">
	     <div class="col-sm-7">
		     <div class="summit">
		     <i  class="fab fa-google-play" ></i><span class="logo-text">&nbspSTAR WORLD</span>
			 
		 </div>
		 </div>
		 
		 
 <div class="col-sm-5">

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
</div>
</div>


<div class="card-body">

<h3 class="head">E-mail Box</h3>

<form action="" method="POST">


<span class="span1"><div class="form-group row">
<label for="email" class="col-md-5 col-form-label text-md-right"><b><h4>To</h4></b></label>
<div class="col-md-7">
<input type="email"     class="form-control" name="customer_email"  value="<?php echo $customer_email?>"   required disabled >
<input type="hidden"     name="customer_email"  value="<?php echo $customer_email?>"     >
</div>
</div></span>





<span class="span2"><div class="form-group row">
<label for="message" class="col-md-5 col-form-label text-md-right"><b><h4>Message</h4></b></label>
<div class="col-md-7">
<textarea type="text"    placeholder="Drop Your Message Here . . ." class="form-control" name="message"    required ></textarea>
</div>
</div></span>


  
   <div class="form-group row mb-0">
   <div class="col-md-6 offset-md-4">
   <button type="submit" name="submit1"   class="btn btn-primary" >
    Send
   </button>
   </div>
   </div>



</form>



</div>

<?php

if(isset($_POST['submit1']))
{
	$message=$_POST['message'];
	
	$customer_email=$_POST['customer_email'];
	
	
	
	
	
		//$query="UPDATE contact SET reply = '$reply', agent_email = '$agent_email', status='0' WHERE id = '$customer_id'";
	    $query="insert into personal_mail (email,message) values ('$customer_email','$message')";
		$query1=mysqli_query($connection,$query);
		
	
	/*$query="INSERT INTO contact (email,message) VALUES ('$email','$message')";
	$query1=mysqli_query($connection,$query);*/
	
	
	$subject="Star World";
	$body2="Dear Sir,";
	//echo $body;
	$body1=$message;
	$headers="From : parthasaha536@gmail.com";
	//echo "<input type='text' value='Message Send Failed ! !' class='correct' disabled>";
	if($query1==true)
	{
		
		if(mail($customer_email,$subject,$body1,$body2,$headers))
		{
			?>
			
		   <script>
		    window.location.href='http://localhost/reservation/customer_list.php';
		   </script>
		   
		   <?php
		   
		}
		
	}
	else
	{
		echo "<input type='text' value='Message Send Failed ! !' class='correct' disabled>";
	}
	
	
}





?>










</body>
</html>