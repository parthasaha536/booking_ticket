

<?php  
session_start();//session starts here  

//error_reporting(0);
$admin_email=$_SESSION['email'];
 //echo $admin_email;
  
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
     <a class="menu" href="http://localhost/reservation/admin.php"> Upload ||</a>
	 
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



<div class="">

<?php



$connection=mysqli_connect("localhost","root","","theater");


$query="select * from contact";

$query1=mysqli_query($connection,$query);

?>

<form action="admin_reply.php" method="post">

<table class="table table-striped">
<thead>
    <tr  class="table-danger">
      <th scope="col">Serial</th>
      <th scope="col">Email</th>
	  <th scope="col">Message</th>
	  <th scope="col">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Action</th>
    </tr>
</thead>

<tbody>


<?php
$j='1';
while($row=mysqli_fetch_array($query1))
{
	
	?>
	
	<tr>
      <th width="70px" scope="row"><?php echo $j ?></th>
      <td width="100px"><?php echo $row['email'] ?></td>
      <td width="100px"><?php  echo $row['message'] ?></td>
	  
	  <td width="40px">
	  
	  
	  <span class="span1">
	  <div class="form-group row mb-0">
      <div class="col-md-6 offset-md-4">
      <button type="submit" name="submit" class="btn btn-primary" value="<?php echo $row['id']?>" >
       Reply
      </button>
      </div>
      </div></span>

	  </td>
    </tr>
	
<?php
$j++;
	
}	




?>


</tbody>
</table>
</div>

</form>



</body>
</html>