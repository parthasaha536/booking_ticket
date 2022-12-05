
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
	 
	  background-image: url("theater2.png");
      font-family:Times, "Times New Roman", Georgia, serif;)
      background-size: cover;
	  background-repeat:No-repeat;
      overflow:auto;
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

.list{
	
	margin-left:-5px;
	border:5px solid white;
	border-radius:20px;
	
	
}

.list:hover{
	border:5px solid red;
	opacity:0.7;
}

.button{
	width:190px;
	background:transparent;
	border:none;
	margin-left:110px;
	outline: none;
	focus:outline-none
	
}
.button:hover{
	background:transparent;
	border:none;
	outline: none;
	focus:outline-none
}
button:focus {
    border: none;
    outline: none;
}
.head{
	font-size:50px;
	margin-left:530px;
	color:#6F1E51;
	animation: animate 
                3s linear infinite;
}
 @keyframes animate {
            0% {
                opacity: 0;
            }
  
            50% {
                opacity: 0.9;
            }
  
            100% {
                opacity: 0;
            }
}

.name{
	
	
	margin-left:70px;
	font-size:25px;
	background:transparent;
	border:none;
	color:white;
	text-align:center;
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
.col-sm-7{
	margin-left:-285px;
	margin-top:25px;
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
		 
		 
 <div class="col-sm-7">

    <div class="navbar">
     <a class="menu" href="http://localhost/reservation/welcome.php">Home </a> |
     <a class="menu" href="http://localhost/reservation/reserve1.php">Reserve </a>|
     <a class="menu" href="#">Contact us</a>|
	 <a class="menu" href="http://localhost/reservation/login.php">Login</a>|
	 <a class="menu" href="http://localhost/reservation/regitration.php">Registration</a>
	 
    </div>
</div>
<div>
</div>
</div>
</div>
</div>
<h1 class="head"><b>Now Showing</b></h1>

<br><br>
<form action="" method="POST">
<?php

$connection=mysqli_connect("localhost","root","","theater");

?>


<?php

 
		$i='0';
		$j='0';
        

        $connection=mysqli_connect("localhost","root","","theater");
               

        $sql = "SELECT * FROM movie"; 
        $res_data = mysqli_query($connection,$sql);

        //$i='5';
      //$query=mysqli_query($connection,"select * from img");
while($row=mysqli_fetch_array($res_data))
{
	    //$i++;
		if($row['status']==1)
		{
			$i++;
?>
         <button class="button" type="submit" name="submit"><?php echo "<img  class='list' src='$row[img]' width=200 height=300>";?></button>
		<?php 
		//echo"<input class='name' type='text' value='$row[name]'>";
		if($i=='4')
	    {
			echo"<br>";
			$sql1 = "SELECT * FROM movie"; 
            $res_data1 = mysqli_query($connection,$sql1);
			while($row=mysqli_fetch_array($res_data1))
			{
				if($row['status']==1)
				{
					
					if($j==4)
					{
						break;
					}
					else
					{
						echo"<input class='name' type='text' value='$row[name]'>";
					    $j++;
					}
				
					
				}
				
				//$j++;
				
			}

			echo "<br><br><br>";
		}

		
		}
}
            $t='1';
            echo"<br>";
			$sql1 = "SELECT * FROM movie"; 
            $res_data1 = mysqli_query($connection,$sql1);
			while($row=mysqli_fetch_array($res_data1))
			{
				if($row['status']==1)
				{
					
					if($t>4)
					{
						echo"<input class='name' type='text' value='$row[name]'>";
					}
					
					$t++;
				
					
				}
				
				
				//$j++;
				
			}



?>
<br><br><br><br><br><br>




</form>


</body>
</html>