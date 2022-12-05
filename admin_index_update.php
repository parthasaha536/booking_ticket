<?php  
session_start();//session starts here 
 
 //error_reporting(0);
 
if(isset($_POST['submit']))
{
	$movie_id=$_POST['submit'];
	//echo $movie_id;
}

if(isset($_POST['submit1']))
{
	$of_movie_id=$_POST['submit1'];
	//echo $of_movie_id;
	$connection=mysqli_connect('localhost' , 'root' , '' , 'theater');

	$update="UPDATE movie SET status = '0' WHERE movie_id = '$of_movie_id'";
	$re=mysqli_query($connection,$update);
	
	$h_update="UPDATE movie SET time_2 = '0', time_5 = '0', time_8 = '0' WHERE movie_id = '$of_movie_id'";
	$re1=mysqli_query($connection,$h_update);
	
	
	
	?>
	
	    <script>
		 window.location.href='http://localhost/reservation/admin_index.php';
		</script>
		
		<?php
		
}

//$i="ooooo";
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


body{
	
	font-family:Times, "Times New Roman", Georgia, serif;)
}


.body1{
	 
	 

 background-image: url("theater2.png");
      font-family:Times, "Times New Roman", Georgia, serif;)
      background-size: cover;
	  background-repeat:No-repeat;
      overflow:auto;
	  -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
	  height:893px;
	  border-radius:20px;
font-family:Times, "Times New Roman", Georgia, serif;
}

.container{
	
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



.card-body{
	color:#273c75;
	margin-top:30px;
	margin-left:0px;
	width:1346px;
	border-bottom:10px solid #273c75;
	
	border-radius:20px;
}

.btn-primary{
	background-color:red;
	color:white;
	border:1px solid white;
	margin-left:-260px;
}
.btn-primary:hover{
	color:red;
	background-color:white;
	border:2px solid red;
}

.form-control{
	margin-top:10px;
	border:2px solid #273c75;
	border-radius:10px;
	width:250px;
	font-weight: 900;
}

.form-control1{
	margin-top:10px;
	border:2px solid red;
	border-radius:10px;
	width:250px;
	height:100px;
}

.span1{
	
	display:inline-block;
	margin-left:20px;
}
.span2{
	display:inline-block;
	margin-left:50px;
}
.span3{
	display:inline-block;
	margin-left:25px;
}
.span4{
	display:inline-block;
	margin-left:10px;
}
.span5{
	display:inline-block;
	margin-left:42px;
}
.span6{
	display:inline-block;
	margin-left:25px;
}
.span7{
	display:inline-block;
	margin-left:22px;
}
.span8{
	display:inline-block;
	margin-left:41px;
	
}

.head{
	margin-left:500px;
	color:#6F1E51;
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
	
	color:#273c75;
	font-size:20px;
	text-align:justify;
}
.des1{
	
	width:950px;
	
	
}
.des2{
	color:#273c75;
	font-size:20px;
}
.img1{
	
	border:4px solid #273c75;
	border-radius:10px;
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


<div class="body1">
<br><br>
<?php


$connection=mysqli_connect('localhost' , 'root' , '' , 'theater');
$query="select * from movie where movie_id='$movie_id' ";

$query1=mysqli_query($connection,$query);


while($row=mysqli_fetch_array($query1))
	
	{
		

?>







<span class="spana"> <div class="pic">
<?php

 echo "<img class='img1' src='$row[img]' width=200 height=300>";


	
?>
     
	
 
 </div></span>
 
 
 <span class="spanb"><div class="des1">
     
	 <p class="des"><?php echo $row['description']?></p>
	 <p class="des2">Start Date : <?php echo $row['start'] ?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp End Date : <?php echo $row['end'] ?> </p>
	 <p class="des2">Ticket Price : <?php echo $row['price'] ?> </p>
 
 </div></span>

<?php 

	}
?>

<?php 

$connection=mysqli_connect('localhost' , 'root' , '' , 'theater');

$movie_chake=mysqli_query($connection,"select * from movie where movie_id='$movie_id'");
while($row=mysqli_fetch_array($movie_chake))
{
	$m_name=$row['name'];
	$m_img=$row['img'];
    $category_id=$row['category_id'];
    //echo $category_id;	
	$s_t_2=$row['time_2'];
	$s_t_5=$row['time_5'];
	$s_t_8=$row['time_8'];
	$h_name=$row['h_name'];
	$start=$row['start'];
	$end=$row['end'];
	$price=$row['price'];
	$description=$row['description'];
	
	
	
	
	/*echo $m_name;
	echo $img;
	echo $c_id;
	echo $s_t_2;
	echo $s_t_5;
	echo $s_t_8;
	echo $h_name;
	echo $start;
	echo $end;
	echo $price;
	echo $description;*/
	//echo $c_id;
}


?>



<div class="card-body">

<form action="update_success.php" method="POST">

<h1 class="head"><b>Update Movie</b></h1><br>



<span class="span1"><div class="form-group row">
<label for="m_name" class="col-md-5 col-form-label text-md-right"><b><h4>Movie Name</h4></b></label>
<div class="col-md-7">
<input type="text"    placeholder="Enter Hare ..." class="form-control" name="m_name"  value="<?php echo $m_name ?>"  required>
</div>
</div></span>

<span class="span2"><div class="form-group row">
<label for="m_img" class="col-md-5 col-form-label text-md-right"><b><h4>Movie Image</h4></b></label>
<div class="col-md-7">
<input type="file"    placeholder="Enter Hare ..." class="form-control" name="m_img"   >
<input type="hidden" name="m_img_hi" value="<?php echo $m_img  ?>">
</div>
</div></span>



<span class="span3"><div class="form-group row">
<label for="h_name" class="col-md-5 col-form-label text-md-right"><b><h4>Hall Name</h4></b></label>
<div class="col-md-7">

<select  class="form-control" name="h_name"    >
<option  value="">Select Hall...</option>
<?php
$connection=mysqli_connect('localhost' , 'root' , '' , 'theater');

$pp="select * from theatre";

$result=mysqli_query($connection,$pp);

while($row=mysqli_fetch_array($result))
{
	
	echo "<option  value=' $row[name]'> $row[name] </option>";


}

?>
<input type="hidden" name="h_name_hi" value="<?php echo $h_name  ?>">
</select>
</div>
</div></span>


<span class="span4"><div class="form-group row">
<label for="h_name" class="col-md-5 col-form-label text-md-right"><b><h4>Category Name</h4></b></label>
<div class="col-md-7">

<select  class="form-control" name="c_name"   >
<option  value="">select category</option>
<?php
$connection=mysqli_connect('localhost' , 'root' , '' , 'theater');




$pp="select * from category ";

$result=mysqli_query($connection,$pp);

while($row=mysqli_fetch_array($result))
{
	
	echo "<option  value=' $row[category_id]'> $row[name] </option>";


}

?>


<input type="hidden" name="c_name_hi" value="<?php echo $category_id  ?>">

</select>
</div>
</div></span>



<span class="span5"><div class="form-group row">
<label for="start" class="col-md-5 col-form-label text-md-right"><b><h4>Start of Date</h4></b></label>
<div class="col-md-7">
<input type="date"    placeholder="Enter Hare ..." class="form-control" name="start" value="<?php echo $start ?>"   required>
</div>
</div></span>

<span class="span6"><div class="form-group row">
<label for="end" class="col-md-5 col-form-label text-md-right"><b><h4>End of Date</h4></b></label>
<div class="col-md-7">
<input type="date"    placeholder="Enter Hare ..." class="form-control" name="end" value="<?php echo $end ?>"    required>
</div>
</div></span>



<span class="span7"><div class="form-group row">
<label for="price" class="col-md-5 col-form-label text-md-right"><b><h4>Ticket Price</h4></b></label>
<div class="col-md-7">
<input type="text"    placeholder="Enter Hare ..." class="form-control" name="price"  value="<?php echo $price ?>"  required>
</div>
</div></span>



<span class="span8"><div class="form-group row">
<label for="description" class="col-md-5 col-form-label text-md-right"><b><h4>Movie Description</h4></b></label>
<div class="col-md-7">
<input type="text"  placeholder="Enter Hare ..." class="form-control" name="description"  value="<?php echo $description ?>"   required>
</div>
</div></span><br>

<h4 class="time">Select Time : </h4>

<div class="check">

  <input class="check1" type="checkbox"  name="2pm" value="1">
  <label for="2pm">&nbsp 2pm</label><br>
  <input type="hidden" name="2pm_hi" value="<?php echo $s_t_2 ?>">
  
  <input class="check1" type="checkbox"  name="5pm" value="1">
  <label for="5pm">&nbsp 5pm</label><br>
  <input type="hidden" name="5pm_hi" value="<?php echo $s_t_5 ?>">
   
  <input class="check1" type="checkbox"  name="8pm" value="1">
  <label for="8pm">&nbsp 8pm</label><br><br>
  <input type="hidden" name="8pm_hi" value="<?php echo $s_t_8 ?>">

</div>


  <input type="hidden" name="movie_id" value="<?php echo $movie_id ?>">

<div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
<button type="submit" name="submit1" class="btn btn-primary" >
Update
</button>
</div>
</div>




</form>




</div>

</div>
</body>
</html>


