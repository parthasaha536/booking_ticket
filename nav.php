

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



.container{
	font-family:Times, "Times New Roman", Georgia, serif;)
}

.summit{
	
	margin-right:-30px;
	padding-top:20px;
}
.navbar {
  background-color: none;
  color:#273c75;
  margin-top:15px;
  margin-left:-30px;
}

.menu{
	
  color:#273c75;
  margin-left:60px;
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
.menu1{
	
  color:#273c75;
  
  margin-right:270px;
  text-align: center;
  padding: 0px 0px;
  text-decoration: none;
  font-size:22px;
}

.menu1:hover{
	color:red;
	text-decoration: none;
	
}

.col-sm-6{
	margin-left:190px;
	padding-top:15px;
	
}
.fa-google-play
{
	position:absolute;
	font-size:50px;
	color:#D980FA;
	margin-top:3px;
}
.logo-text{
	
	color:#D980FA;
	font-size:40px;
	margin-left:50px;
	text-shadow: 2px 2px;
	padding-bottom:20px;
	
}

.user-circle{
	
	color:#273c75;
}
.user-circle:hover{
	text-decoration:none;
	color:#273c75;
}


.dropdown {
	position:absolute;
	color:#273c75;
    
	margin-left:300px;
	font-size:23px;
	
  
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: none;
  min-width: 200px;
  text-align:left;
  margin-left:-65px;
  font-size:20px;
   z-index: 1;
   color:#273c75;
  
   
}

.dropdown-content a {
 
  color: #273c75;

  
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


.bb{
	position:absolute;
	margin-left:-300px;
	color:#273c75;
	
	margin-top:-15px;
	
}



</style>

<body>




<div class="container">
 <div class="row">
	     <div class="col-sm-4">
		     <div class="summit">
		     <i  class="fab fa-google-play" ></i><span class="logo-text">&nbspSTAR WORLD</span>
			 
		 </div>
		 </div>
		 
		 
 <div class="col-sm-6">

    <div class="navbar">
	
	
	
     <a class="menu" href="http://localhost/reservation/admin_book.php"> Report &nbsp |</a>
	 <a class="menu1" href="http://localhost/reservation/admin.php">Upload  &nbsp&nbsp| |</a>
	 
	 <div class="bb">
	 <div class="dropdown">
	   List&nbsp&nbsp&nbsp|
	 <div class="dropdown-content">
	  <a class="menu" href="http://localhost/reservation/customer_list.php">Customer List </a>
	 <a class="menu" href="http://localhost/reservation/admin_index.php">Movie List </a>
	 <a class="menu" href="http://localhost/reservation/contact_problem_list.php">Problem List </a>
	 </div>
	 </div>&nbsp&nbsp&nbsp
	 </div>
	 
     
	 
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


</body>
</html>

