<html>
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://kit.fontawesome.com/ff129be781.js" crossorigin="anonymous"></script>
	</head>
<style>

body{

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
	  height:1000px;
      top: 0px;
      right: 0px;
      bottom: 0px;
      left: 0px;
	  background-repeat:No-repeat;
      overflow:auto;
      opacity: 0.5;
}

.fa-user{
width:100px;
height:100px;
border-radius:50%;
position:absolute;
top:-50px;
left:calc(50% - 50px);
font-size:60px;
background-color:red;
padding:24px;
margin-right:30px;
color:white;
}

.loginbox{
margin-top:300px;
width:400px;
height:700px;
background:transparent;
top:50%;
left:50%;
position:absolute;
transform:translate(-50%,-50%);
box-sizing:border-box;
padding:50px 30px;

}
h1{
color:red;
font-size:25px;
text-align:center;
font-weight:bold;
}
p{
margin:0px;
padding:0px;
color:red;
font-weight:bold;
font-size:20px;
}


.loginbox input{
width:100%;
margin-bottom:10px;
}



.loginbox input[type="text"],input[type="email"],input[type="password"],input[type="text"],input[type="text"]
{
border:none;
border-bottom:1px solid red;
background:transparent;
outline:none;
height:35px;
color:green;
font-size:17px;
}


.loginbox input[type="submit"]
{
border:none;
background-color:red;
border-radius:15px;
padding:5px;
color:white;
font-size:17px;
font-weight:bold;

}
.loginbox input[type="submit"]:hover{
background-color:green;
color:white;


}

.login{
width:200px;
border:none;
padding-left:200px;
background-color:red;
border-radius:15px;
padding:5px;
color:white;
font-size:17px;
font-weight:bold;
}
.login:hover{
background-color:green;
color:white;
text-decoration:none;
}

.pp{

height:600px;

}

.correct
{
	background-color:#ffcccc;
	padding-left:50px;
	color:red;
	width:370px;
	height:60px;
	font-size:17px;
	margin-left:500px;
	margin-top:10px;
    border-left:8px solid red;
	border-right:none;
	border-top:none;
	border-bottom:none;
}

.col-sm-6{
	margin-left:90px;
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

.summit{
	
	margin-right:-30px;
	padding-top:20px;
}

.navbar {
  background-color: none;
  color:white;
  margin-top:40px;
  margin-left:00px;
  
  
}

.navbar a {
	margin-left:30px;
  color:white;
  float: left;
  font-size: 18px;
  text-align: center;
  padding: 0px 0px;
  text-decoration: none;
  font-size:22px;
}

.menu{
	margin-left:20px;
}

.navbar a:hover{
	color:red;
}









</style>
<body>

<div class="img">


<div class="container">
 <div class="row">
        
	     <div class="col-sm-5">
		     <div class="summit">
		     <i  class="fab fa-google-play" ></i><span class="logo-text">&nbspSTAR WORLD</span>
		 </div>
		 </div>
		 
		 
		 
 <div class="col-sm-6">

    <div class="navbar">
     <a class="menu" href="http://localhost/reservation/welcome.php">Home</a>
     <a  class="menu" href="http://localhost/reservation/contact.php">Contact us</a>
	 <a  class="menu" href="http://localhost/reservation/login.php">Log in</a>
  
    </div>

</div>
</div>
</div>



<div class="loginbox">
<i class="fa fa-user"></i>
<h1>Create a new account </h1><br>
<form action="" method="post">
<p>Username</p>
<input type="text" placeholder="Enter Username" name="username"required><br><br>
<p>Email</p>
<input type="email" placeholder="Enter Email" name="email"required><br><br>
<p>Password</p>
<input type="password" placeholder="Enter Password" name="password"required><br><br>
<p>Phone Number</p>
<input type="text" placeholder="Enter Phone Number" name="phone"required><br><br>


<input class="log" type="submit" name="submit" value="Sign up"><br><br>

<a class="login" href="http://localhost/reservation/login.php">Log in</a>





</div>
</form>
</div>
<?php

$connection=mysqli_connect("localhost","root","","theater");


if(isset($_POST['submit']))
{
	$name=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];
	
	$query=mysqli_query($connection,"select email from customer where email='$email'");
    $chake=mysqli_fetch_array($query);
	if($chake==true)
	{
		$s='This Email Has Already Registered !!';
	    echo"<input class='correct' type='url' value='$s' disabled>";
		
	}
	else
	{
	
	$query="insert into customer(email,phn_number,password,name) values('$email','$phone','$password','$name')";
	$food=mysqli_query($connection,$query);
	
	?>
	<script>
		 window.location.href='http://localhost/reservation/login.php';
	</script>
	
		
	<?php
	}
	
}








?>



</body>
</html>
































