<?php  
session_start();//session starts here  
  
?>  
  

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
	  height:900px;
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


.fa-film
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
margin-top:160px;
margin-left:400px;
width:400px;
height:700px;
background:transparent;
top:60%;
left:50%;
position:absolute;
transform:translate(-50%,-50%);
box-sizing:border-box;
padding:50px 30px;

}
h1{
color:red;
font-size:28px;
text-align:center;
font-weight:bold;
}
p{
margin:0px;
padding:0px;
color:white;
font-weight:bold;
font-size:20px;
}


.loginbox input{
width:100%;
margin-bottom:10px;
}



.loginbox input[type="email"],input[type="password"]
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

a{
color:red;
text-decoration:none;
font-weight:bold;
}
a:hover{
color:green;
text-decoration:none;

}

.correct
{
	background-color:#ffcccc;
	padding-left:70px;
	color:red;
	width:370px;
	height:60px;
	font-size:17px;
	margin-left:500px;
	margin-top:-70px;
    border-left:8px solid red;
	border-right:none;
	border-top:none;
	border-bottom:none;
	 transition-duration: 5s;
}

.write{
	font-size:24px;
	color:red;
}

.col-sm-6{
	margin-left:90px;
}







</style>
<body>




<div class="img">



<div class="container">
 <div class="row">
         
		 <!--<i class="fa-solid fa-camera-movie"></i>
		 <i  class="fab fa-google-play"></i>!-->
		 
	     <div class="col-sm-5">
		     <div class="summit">
		     <i class="fa-solid fa-film"></i><span class="logo-text">&nbspSTAR WORLD</span>
		 </div>
		 </div>
		 
		 
		 
 <div class="col-sm-6">

    <div class="navbar">
     <a class="menu" href="http://localhost/reservation/home1.php">Home</a>
     <a  class="menu" href="http://localhost/reservation/contact.php">Contact us</a>
	 <a  class="menu" href="http://localhost/reservation/regitration.php">Registration</a>
  
    </div>

</div>
</div>
</div>
</div>




<br><br><br>

<div class="loginbox">
<i class="fa fa-user"></i>
<form action="" method="post">
<h1> Log in </h1><br>
<form action="" method="post">
<div>
<p class="write">E-mail</p>
<input type="email" placeholder="Enter Email" name="email"required><br><br>
</div>
<p class="write">Password</p>
<input type="password" placeholder="Enter Password" name="password"required><br><br>
<input class="log" type="submit" name="submit" value="Login"><br><br>
</form>


<a href="http://localhost/reservation/forget_password.php">Forget Password ??</a><br>

<a href="http://localhost/reservation/regitration.php">Don't have an account??</a>
</div>
</div>

<?php  
$i='1';
$connection=mysqli_connect('localhost','root','','theater');
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
	$query=mysqli_query($connection,"select*from customer where email='$email' AND password='$password'");
    $chake=mysqli_fetch_array($query);
	$query1=mysqli_query($connection,"select*from customer where email='$email' AND password='$password' AND status='$i'");
    $chake1=mysqli_fetch_array($query1);
if($chake==true) 
{
	$query1=mysqli_query($connection,"select*from customer where email='$email' AND password='$password' AND status='$i'");
    $chake1=mysqli_fetch_array($query1);
	if($chake1==true)
	{
		$pp="UPDATE customer SET switch = '1' WHERE email = '$email'";
		$oo1=mysqli_query($connection,$pp);
		$oo="select name from customer where email = '$email'";
		$oo1=mysqli_query($connection,$oo);
        while($row=mysqli_fetch_array($oo1))
          {
             $_SESSION['name'] = $row['name'];
		     $_SESSION['id']=$row['id'];
          }
          $_SESSION['email']= $email;
		  		  
		
		?>
		<script>
		 window.location.href='http://localhost/reservation/admin_book.php';
		</script>
		
<?php
    }
	else
	{ 
     $pp="UPDATE customer SET switch = '1' WHERE email = '$email'";
	 $oo1=mysqli_query($connection,$pp);
	 $oo="select name,id from customer where email = '$email'";
		$oo1=mysqli_query($connection,$oo);
        while($row=mysqli_fetch_array($oo1))
          {
           $_SESSION['name'] = $row['name'];
		   $_SESSION['id']=$row['id'];
			 
          }	
		  $_SESSION['email']= $email;

?>
        <script>
		 window.location.href='http://localhost/reservation/home2.php';
		</script>
		
<?php
    }	
}
else
{
	$s='Email or Password Is Incorrect !!';
	echo"<input class='correct' type='text' value='$s' disabled>";	
}
}
?>


</body>
</html>