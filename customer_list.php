

<?php  
session_start();//session starts here  

//error_reporting(0);

  
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
	  height:800px;
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

.table-striped{
	
	margin-top:60px;
	margin-left:200px;
	width:950px;
}
table{
	text-align:justify;
	
}


.action{
	margin-left:50px;
	
}
.thead{
	text-align:center;
}


.btn-primary{
	
	background-color:#6F1E51;
	border:1px solid white;
	margin-top:10px;
	margin-left:27px;
	
}




.btn-primary:hover{
	
	text-decoration:none;
	color:#6F1E51;
	background-color:white;
	border:1px solid #6F1E51;
}

.span1{
	display:inline-block;
	
}
.span2{
	display:inline-block;
	margin-left:20px;
	
}

h5{
	margin-left:73px;
}

.fa-envelope{
	font-size:20px;
	color:red;
	margin-left:-34px;
	
	
}

button{
	color:#487eb0;
	border:none;
	background:transparent;
}
button:focus {
    border: none;
    outline: none;
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



<div class="">

<?php



$connection=mysqli_connect("localhost","root","","theater");



$query="select * from customer";

$query1=mysqli_query($connection,$query);

?>

<form action="personal_mail.php" method="post">



<table class="table table-striped">
<thead>
    <tr  class="table-danger">
      <th scope="col">Serial</th>
	  <th scope="col">User Name</th>
      <th scope="col">Email</th>
	  <th scope="col">Phone No.</th>
	  
    </tr>
</thead>

<tbody>


<?php
$j='0';
while($row=mysqli_fetch_array($query1))
{
	if($row['status']=='0')
	{
		
	
	
	?>
	
	
	<tr>
      <th width="70px" scope="row"><?php echo $j ?></th>
      <td width="100px"><?php echo $row['name'] ?></td>
	  
	  
      <td width="100px"><button type="submit" name="submit" value="<?php  echo $row['email'] ?>"><i class="far fa-envelope"></i>&nbsp&nbsp&nbsp <?php  echo $row['email'] ?></button></td>
	  <td width="100px"><?php  echo $row['phn_number'] ?></td>

    </tr>
	
<?php
    
	}

$j++;
	
}	




?>


</tbody>
</table>
</div>

</form>



</body>
</html>