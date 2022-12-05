<?php  
session_start();//session starts here  

//error_reporting(0);

$customer_id=$_SESSION['id'];
//echo $customer_id;

$connection=mysqli_connect("localhost" , "root" , "" , "theater");

$query="select * from customer where id='$customer_id' ";
$query1=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($query1))
{
	$email=$row['email'];
	//echo $email;
	//echo "tfgvhbjklk";
	$phone=$row['phn_number'];
	$password=$row['password'];
	$name=$row['name'];
	
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
	  -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
	  height:1200px;
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



.card-body{
	color:red;
	margin-top:30px;
	margin-left:150px;
	width:1000px;
	border:2px solid red;
	margin-top:120px;
	border-radius:20px;
}

.btn-primary{
	background-color:red;
	color:white;
	border:1px solid white;
	margin-left:-130px;
}
.btn-primary:hover{
	color:red;
	background-color:white;
	border:2px solid red;
}
.img::before{
	
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
.form-control{
	margin-top:10px;
	border:2px solid red;
	border-radius:10px;
	width:250px;
}

.form-control1{
	margin-top:10px;
	border:2px solid red;
	border-radius:10px;
	width:250px;
	height:100px;
}
.row{
	font-size:25px;
}
.span1{
	display:inline-block;
	margin-left:50px;
}
.span2{
	display:inline-block;
	margin-left:50px;
}
.span3{
	display:inline-block;
	margin-left:37px;
}
.span4{
	display:inline-block;
	margin-left:17px;
}
.span5{
	display:inline-block;
	margin-left:20px;
}
.span6{
	display:inline-block;
	margin-left:16px;
}
.span7{
	display:inline-block;
	margin-left:-75px;
}
.span8{
	display:inline-block;
	margin-left:324px;
}


.head{
	margin-left:360px;
	color:#6F1E51;
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
  min-width: 180px;
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
.check{
	margin-left:195px;
	font-size:20px;
}
.check1{
	transform: scale(130%,130%);
}
.time{
	margin-left:190px;
}

.spana{
	display:inline-block;
	margin-left:55px;
}
.spanb{
	
	
	display:inline-block;
	margin-left:10px;
}

.des{
	
	color:white;
	font-size:20px;
	text-align:justify;
}
.des1{
	
	width:950px;
	
	
}
.des2{
	color:white;
	font-size:20px;
}
.img1{
	
	border:8px solid white;
	border-radius:20px;
}

.correct
{
	background-color:#ffcccc;
	position:absolute;
	padding-left:30px;
	color:red;
	width:500px;
	height:60px;
	font-size:17px;
	margin-left:300px;
	margin-top:-400px;
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
     <a class="menu" href="http://localhost/reservation/welcome.php">Home </a> |
     <a class="menu" href="http://localhost/reservation/reserve.php">Reserve </a>|
     <a class="menu" href="http://localhost/reservation/contact.php">Contact us</a>||
	 
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


<div class="card-body">

<form action="profile_update.php" method="POST">

<h1 class="head"><b>Update Profile</b></h1><br>



<span class="span1"><div class="form-group row">
<label for="email" class="col-md-5 col-form-label text-md-right"><b><h4>Email</h4></b></label>
<div class="col-md-7">
<input type="text"    placeholder="Enter Hare ..." class="form-control" name="email"  value="<?php echo $email ?>"  required disabled>
</div>
</div></span>




<span class="span2"><div class="form-group row">
<label for="name" class="col-md-5 col-form-label text-md-right"><b><h4>User Name</h4></b></label>
<div class="col-md-7">
<input type="text"    placeholder="Enter Hare ..." class="form-control" name="name"  value="<?php echo $name ?>"  required>
</div>
</div></span>


<span class="span3"><div class="form-group row">
<label for="phone" class="col-md-5 col-form-label text-md-right"><b><h4>Phone No.</h4></b></label>
<div class="col-md-7">
<input type="text"    placeholder="Enter Hare ..." class="form-control" name="phone"  value="<?php echo $phone ?>"  required>
</div>
</div></span>

<input type="hidden" name="password" value="<?php echo $password ?>">




<span class="span7"><div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
<button type="submit" name="submit" class="btn btn-primary" >
Update
</button>
</div>
</div></span>


</form>

<form action="" method="POST">

<span class="span8"><div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
<button type="submit" name="submit1" value="1" class="btn btn-primary" >
Change Password 
</button>
</div>
</div></span>

</form>



<?php 

if(isset($_POST['submit1']))
{
	//echo $password;
	
	?>
	
	<form action =" " method="post">
	<span class="span4"><div class="form-group row">
    <label for="current" class="col-md-5 col-form-label text-md-right"><b><h4>Current Password</h4></b></label>
    <div class="col-md-7">
    <input type="text"    placeholder="Enter Hare ..." class="form-control" name="current"    required >
    </div>
    </div></span>
   
   <span class="span5"><div class="form-group row">
   <label for="new" class="col-md-5 col-form-label text-md-right"><b><h4>New Password</h4></b></label>
   <div class="col-md-7">
   <input type="text"    placeholder="Enter Hare ..." class="form-control" name="new"    required >
   </div>
   </div></span>
   
   
   <span class="span6"><div class="form-group row">
   <label for="confirm" class="col-md-5 col-form-label text-md-right"><b><h4>Confirm Password</h4></b></label>
   <div class="col-md-7">
   <input type="text"    placeholder="Enter Hare ..." class="form-control"  name="confirm"   required >
   </div>
   </div></span>
   
   
   <div class="form-group row mb-0">
   <div class="col-md-6 offset-md-4">
   <button type="submit" name="submit2" class="btn btn-primary" >
   Update Password 
   </button>
   </div>
   </div>
   
   </form>
   </div>
   
</body>
</html>
	
	<?php
	
	
}

if(isset($_POST['submit2']))
{
	//echo"uuiiiifghjkl;";
	
		$curren_password=$_POST['current'];
		$new_password=$_POST['new'];
		$confirm_password=$_POST['confirm'];
		
		if($curren_password==$password)
		{
			$password=$_POST['new'];
			if($new_password==$confirm_password)
			{
				$password=$new_password;
				$update="UPDATE customer SET  password = '$password' WHERE id ='$customer_id'";
	            $update1=mysqli_query($connection,$update);
				if($update1==true)
		        {
			        echo "<input type='text' value='Password Changed Successfully ! !' class='correct' disabled>";
		        }
		        else
		        {
			        
					echo "<input type='text' value='Password Change Unuccessfull.Please Try Again Latter ! !' class='correct' disabled>";
		        }
			}
			else
			{
				//echo "Wrong!!New Password And Confirm Password Does Not Match ! ! ";
				echo "<input type='text' value='Wrong!!New Password And Confirm Password Does Not Match ! !' class='correct' disabled>";
			}
		}
		else
		{
			//echo "Wrong!!Enter Correct Current Password";
			echo "<input type='text' value='Wrong!!Enter Correct Current Password ! !' class='correct' disabled>";
			
		}
}



?>






