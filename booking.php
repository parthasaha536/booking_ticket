<?php

session_start();
 error_reporting(0);
 
 
 $user_id= $_SESSION['id'];
 
 


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
	  height:1000px;
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
  min-width: 180px;
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


.span1{
	display:inline-block;
	margin-left:55px;
}
.span2{
	
	
	display:inline-block;
	margin-left:10px;
}


.card-body{
	color:#6F1E51;
	margin-top:10px;
	margin-left:55px;
	width:900px;
	border:2px solid #6F1E51;
	border-radius:20px;
}
.form-control{
	
	margin-top:10px;
	border:2px solid #6F1E51;
	border-radius:10px;
	width:250px;
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
	
	border:8px solid #6F1E51;
	border-radius:20px;
}




.span3{
	display:inline-block;
	margin-left:20px;
	
}
.span4{
	display:inline-block;
	margin-left:40px;

}
.span5{
	display:inline-block;
	margin-left:24px;
	
}
.span6{
	display:inline-block;
	margin-left:60px;
	
}
.span7{
	display:inline-block;
	margin-left:26px;

}


.span8{
	display:inline-block;
	margin-left:72px;

}

.span9{
	display:inline-block;
	margin-left:27px;

}

.span10{
	display:inline-block;
	margin-left:65px;

}


.head{
	margin-left:360px;
	color:#6F1E51;
}


.btn-primary{
	
	background-color:#6F1E51;
	border:1px solid white;
	margin-left:-145px;
}




.btn-primary:hover{
	
	text-decoration:none;
	color:#6F1E51;
	background-color:white;
	border:1px solid #6F1E51;
}





</style>



<body>


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
     <a class="menu" href="#"> Contact us ||</a>&nbsp&nbsp&nbsp&nbsp&nbsp
	 
	 <div class="dropdown">
	 <i class="fas fa-user-circle"></i>&nbsp<?php echo $_SESSION['name'];?> 
	 <div class="dropdown-content">
	 <a class="menu" href="http://localhost/reservation/booking_history.php">Booking History </a>
	 <a class="menu" href="http://localhost/reservation/logout.php">Log out </a>
	 </div>
	 </div>
	 

	 
	 
    </div>
</div>
<div>
</div>
</div>
</div>

<br>


<?php



$connection=mysqli_connect('localhost' , 'root' , '' , 'theater');


//$test ="<span id=\"result\"></span>";

if(isset($_POST['submit']))
{
	
	$movie_id=$_POST['submit'];
	
	//echo $yy;
}

//$yy='0';
//$rr=$test;




 //echo $yy;

$query="select * from movie where movie_id='$movie_id' ";

$query1=mysqli_query($connection,$query);

//echo $movie_id;

$query2="select category_id from movie where movie_id='$movie_id'";
$query3=mysqli_query($connection,$query2);
while($row=mysqli_fetch_array($query3))
{
	
	$category_id=$row['category_id'];
	//echo $category_id;
}



//echo $category_id;



$hh="select * from category where category_id='$category_id'";
$hh1=mysqli_query($connection,$hh);


while($row=mysqli_fetch_array($hh1))
{
	//echo"yccvhbjn";
	$c_name=$row['name'];
	
	
	//echo $c_name;
}





while($row=mysqli_fetch_array($query1))
	
	{
		
	

?>





<form action="confirm_book.php" method="POST">





<span class="span1"> <div class="pic">
<?php

 echo "<img class='img1' src='$row[img]' width=200 height=300>";


	
?>
     
	
 
 </div></span>
 
 
 <span class="span2"><div class="des1">
     
	 <p class="des"><?php echo $row['description']?></p>
	 <p class="des2">Start Date : <?php echo $row['start'] ?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp End Date : <?php echo $row['end'] ?> </p>
	 <p class="des2">Ticket Price : <?php echo $row['price'] ?> </p>
 
 </div></span>





<div class="card-body">

<h1 class="head"><b>Book Movie</b></h1><br>

<span class="span3"><div class="form-group row">
<label for="m_name" class="col-md-4 col-form-label text-md-right"><b><h4>Movie Name</h4></b></label>
<div class="col-md-5">
<input type="text"    placeholder="Enter Hare ..." class="form-control" name="name" value="<?php echo $row['name']?>" disabled   required>
<input type="hidden" name="m_name" value="<?php echo $row['name']?>">
</div>
</div></span>

<span class="span4"><div class="form-group row">
<label for="b_name" class="col-md-4 col-form-label text-md-right"><b><h4>Booking Name</h4></b></label>
<div class="col-md-5">
<input type="text"    placeholder="Enter Hare ..." class="form-control" name="b_name"   required>
</div>
</div></span>

<span class="span5"><div class="form-group row">
<label for="b_phone" class="col-md-4 col-form-label text-md-right"><b><h4>Phone No.</h4></b></label>
<div class="col-md-5">
<input type="text"   placeholder="Enter Hare ..." class="form-control" name="b_phone"   required>
</div>
</div></span>



<span class="span6"><div class="form-group row">
<label for="b_time" class="col-md-4 col-form-label text-md-right"><b><h4>Select Time</h4></b></label>
<div class="col-md-5">
<select name="b_select" class="form-control" >

<?php

if($row['time_2']==1)
{
	?>
	<option class="option" value="2pm">2pm </option>
	<?php
}
if($row['time_5']==1)
{
	?>
	<option class="option" value="5pm">5pm </option>
	<?php
}
if($row['time_8']==1)
{
	?>
	<option class="option" value="8pm">8pm </option>
	<?php
}


?>
</select>
</div>
</div></span>


<?php

//select movie_name,SUM(sits),time from books where movie_name=' Avenger(End Game)' GROUP BY date='2021-12-05' AND time='2pm'
//select movie_name,SUM(sits),time from books where movie_name=' Avenger(End Game)' AND time='2pm' AND date='2021-12-05'

?>

<span class="span7"><div class="form-group row">
<label for="b_sit" class="col-md-4 col-form-label text-md-right"><b><h4>Total Sits</h4></b></label>
<div class="col-md-5">
<input type="number"   placeholder="Enter Hare ..." class="form-control" name="b_sit"   required>
</div>
</div></span>



<span class="span8"><div class="form-group row">
<label for="h_name" class="col-md-4 col-form-label text-md-right"><b><h4>Hall Name</h4></b></label>
<div class="col-md-5">
<input type="text"   placeholder="" class="form-control" name="name" value="<?php echo $row['h_name'] ?>" disabled   required>
<input type="hidden" name="h_name" value="<?php echo $row['h_name']?>">
</div>
</div></span>


<span class="span9"><div class="form-group row">
<label for="c_name" class="col-md-4 col-form-label text-md-right"><b><h4>Category</h4></b></label>
<div class="col-md-5">
<input type="text"   placeholder="" class="form-control" name="name" value="<?php echo $c_name ?>" disabled  required>
<input type="hidden" name="c_name" value="<?php echo $c_name ?>">
</div>
</div></span>


<span class="span10"><div class="form-group row">
<label for="date" class="col-md-4 col-form-label text-md-right"><b><h4>Booking Date</h4></b></label>
<div class="col-md-5">
<input type="date"   placeholder="" class="form-control" name="date"    required>
</div>
</div></span>

<input type="hidden" name="movie_id" value="<?php echo $movie_id ?>">
<input type="hidden" name="category_id" value="<?php echo $category_id ?>">



<div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
<button type="submit"  name="submit" class="btn btn-primary" >
Book
</button>
</div>
</div>



<?php 

	}
?>


</div>


</form>







</body>
</html>