
<?php  
session_start();//session starts here 
 
 error_reporting(0);
  
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



.card-body{
	color:red;
	margin-top:30px;
	margin-left:200px;
	width:1000px;
	border:2px solid red;
	
	border-radius:20px;
}

.btn-primary{
	background-color:red;
	color:white;
	border:1px solid white;
	margin-left:-140px;
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
	width:105px;
}
.row{
	font-size:25px;
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
	margin-left:55px;
}
.span5{
	display:inline-block;
	margin-left:20px;
}
.span6{
	display:inline-block;
	margin-left:55px;
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
	margin-left:360px;
	color:#6F1E51;
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
	
  
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #bdc3c7;
  min-width: 150px;
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

.table-striped{
	
	width:350px;
	margin-left:200px;
}

</style>


<body>

<div class="img">

<?php //include("nav.php"); ?>





<br><br>

<table class="table table-striped">
<thead>
    <tr  class="table-primary">
      
      <th scope="col">Hall Name</th>
	  <th scope="col">Recommendation</th>
    </tr>
</thead>

<tbody>

<?php


$connection=mysqli_connect("localhost","root","","theater");


$hall="select name from theatre";
$hall1=mysqli_query($connection,$hall);
while($row=mysqli_fetch_array($hall1))
{
	?>
	
<tr>

<?php

 $h_name=$row['name'];

$query="select h_name, SUM(time_2) as time_2 , Sum(time_5) as time_5 , Sum(time_8) as time_8 from movie where h_name='$h_name'";
$query1=mysqli_query($connection,$query);
$i='2';
while($row=mysqli_fetch_array($query1))
{
	
	?>
	
	<td><?php echo $row['h_name'];?></td>
	<td>
	<?php
	for($i=2;$i<=8;$i=$i+3)
	{
		if($row['time_'.$i]==0)
	    {
		
		 echo "(Time : ".$i.")";
		
	    }
		
	}
	?>
	
	<?php
	if($row['time_2']>0 && $row['time_5']>0 && $row['time_8']>0 )
       {
		   
		   ?>
			<?php echo "All are Booked ! !";?>
			
			<?php
			
	   }
	   
	   ?>
	   
	   </td>
	<?php
}

?>

</tr>
<?php

}

?>



</tbody>
</table>









<div class="card-body">

<form action="" method="POST">

<h1 class="head"><b>Upload New Movie</b></h1><br>


<span class="span1"><div class="form-group row">
<label for="m_name" class="col-md-5 col-form-label text-md-right"><b><h4>Movie Name</h4></b></label>
<div class="col-md-7">
<input type="text"    placeholder="Enter Hare ..." class="form-control" name="m_name"   required>
</div>
</div></span>

<span class="span2"><div class="form-group row">
<label for="m_img" class="col-md-5 col-form-label text-md-right"><b><h4>Movie Image</h4></b></label>
<div class="col-md-7">
<input type="file"    placeholder="Enter Hare ..." class="form-control" name="m_img"    required>
</div>
</div></span>



<span class="span3"><div class="form-group row">
<label for="h_name" class="col-md-5 col-form-label text-md-right"><b><h4>Hall Name</h4></b></label>
<div class="col-md-7">

<select  class="form-control" name="h_name"   >
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

</select>
</div>
</div></span>


<span class="span4"><div class="form-group row">
<label for="h_name" class="col-md-5 col-form-label text-md-right"><b><h4>Category Name</h4></b></label>
<div class="col-md-7">

<select  class="form-control" name="c_name"    required>
<option  value="">Select Category...</option>
<?php
$connection=mysqli_connect('localhost' , 'root' , '' , 'theater');

$pp="select * from category";

$result=mysqli_query($connection,$pp);

while($row=mysqli_fetch_array($result))
{
	
	echo "<option  value=' $row[category_id]'> $row[name] </option>";


}

?>

</select>
</div>
</div></span>


<span class="span5"><div class="form-group row">
<label for="start" class="col-md-5 col-form-label text-md-right"><b><h4>Start of Date</h4></b></label>
<div class="col-md-7">
<input type="date"    placeholder="Enter Hare ..." class="form-control" name="start"    required>
</div>
</div></span>

<span class="span6"><div class="form-group row">
<label for="end" class="col-md-5 col-form-label text-md-right"><b><h4>End of Date</h4></b></label>
<div class="col-md-7">
<input type="date"    placeholder="Enter Hare ..." class="form-control" name="end"    required>
</div>
</div></span>



<span class="span7"><div class="form-group row">
<label for="price" class="col-md-5 col-form-label text-md-right"><b><h4>Ticket Price</h4></b></label>
<div class="col-md-7">
<input type="text"    placeholder="Enter Hare ..." class="form-control" name="price"    required>
</div>
</div></span>



<span class="span8"><div class="form-group row">
<label for="description" class="col-md-5 col-form-label text-md-right"><b><h4>Movie Description</h4></b></label>
<div class="col-md-7">
<textarea   placeholder="Enter Hare ..." class="form-control" name="description"    required></textarea>
</div>
</div></span><br>

<h4 class="time">Select Time : </h4>

<div class="check">

  <input class="check1" type="checkbox"  name="2pm" value="1">
  <label for="2pm">&nbsp 2pm</label><br>
  <input class="check1" type="checkbox"  name="5pm" value="1">
  <label for="5pm">&nbsp 5pm</label><br>
  <input class="check1" type="checkbox"  name="8pm" value="1">
  <label for="8pm">&nbsp 8pm</label><br><br>

</div>

<div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
<button type="submit" name="submit" class="btn btn-primary" >
Upload
</button>
</div>
</div>




</form>

</div>
</div>
<?php

$connection=mysqli_connect('localhost' , 'root' , '' , 'theater');


if(isset($_POST['submit']))
{
	
	//$admin=$_POST['admin'];
	/*$s_t_2='0';
    $s_t_5='0';
    $s_t_8='0';*/
	//select SUM(time_5) as time_5 from movie WHERE h_name='Hall-C'
	$m_name=$_POST['m_name'];
	$img=$_POST['m_img'];
	if($_POST['2pm']==Null)
	{
		$s_t_2='0';
	}
	else
	{
		
		$s_t_2=$_POST['2pm'];
	}
	//echo $s_t_2;
	if($_POST['5pm']==Null)
	{
		$s_t_5='0';
	}
	else
	{
		$s_t_5=$_POST['5pm'];
	}
	//echo $s_t_5;
	if($_POST['8pm']==Null)
	{
		$s_t_8='0';
	}
	else
	{
		$s_t_8=$_POST['8pm'];
	}
	//echo $s_t_8;
	$h_name=$_POST['h_name'];
	$c_name=$_POST['c_name'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	$price=$_POST['price'];
	//echo"<br>";
	//echo $price;
	$description=$_POST['description'];
	//echo"<br>";
	//echo $description;
	$stop='1';
	$qq=mysqli_query($connection,"select movie_id from movie");
	while($row=mysqli_fetch_array($qq))
	{
		
	      if($stop==$row['movie_id'])
		  {
			  $stop++;
	      }
	}
	if($stop==1)
	{
		$add="insert into movie(name,img,movie_id,category_id,time_2,time_5,time_8,h_name,start,end,price,description) values('$m_name','$img','$stop','$c_name','$s_t_2','$s_t_5','$s_t_8','$h_name','$start','$end','$price','$description')";
	    $re=mysqli_query($connection,$add);
	}
	$first=$stop-1;
	$qq1=mysqli_query($connection,"select * from movie where movie_id='$first' ");
	while($row=mysqli_fetch_array($qq1))
	{
		
		
		if($img==$row['img'])
		{
			
			
		}
		else
		{
			
			$add="insert into movie(name,img,movie_id,category_id,time_2,time_5,time_8,h_name,start,end,price,description) values('$m_name','$img','$stop','$c_name','$s_t_2','$s_t_5','$s_t_8','$h_name','$start','$end','$price','$description')";
	        $re=mysqli_query($connection,$add);
			
			
			
		}
	}
	
$year=date("Y");
$month=date("m");
$day=date("d");

$j=1;
$start=mysqli_query($connection,"select  day(STR_TO_DATE(start, '%Y-%m-%d')) As start_day , month(STR_TO_DATE(start, '%Y-%m-%d')) As start_month , year(STR_TO_DATE(start, '%Y-%m-%d')) As start_year from movie");
while($row=mysqli_fetch_array($start))
{
    /*if($row['start_day']==$day && $row['start_month']==$month && $row['start_year']==$year)
    {
	   $i='1';
	   $update="UPDATE movie SET status = '$i' WHERE movie_id = '$j'";
	   $re=mysqli_query($connection,$update);
    }*/
	if($row['start_year']==$year)
	{
		if($row['start_month']==$month)
		{
			if($row['start_day']==$day)
			{
				$i='1';
	            $update="UPDATE movie SET status = '$i' WHERE movie_id = '$j'";
	            $re=mysqli_query($connection,$update);	
			}
			else if($row['start_day']>$day)
			{
				$i='2';
	            $update="UPDATE movie SET status = '$i' WHERE movie_id = '$j'";
	            $re=mysqli_query($connection,$update);
			}
		}
		else if($row['start_month']>$month)
		{
			$i='2';
	        $update="UPDATE movie SET status = '$i' WHERE movie_id = '$j'";
	        $re=mysqli_query($connection,$update);
		}
	}
	else if($row['start_year']>$year)
	{
		$i='2';
	    $update="UPDATE movie SET status = '$i' WHERE movie_id = '$j'";
	    $re=mysqli_query($connection,$update);
	}


$j++;
}

$k='1';
$end=mysqli_query($connection,"select  day(STR_TO_DATE(end, '%Y-%m-%d')) As end_day , month(STR_TO_DATE(end, '%Y-%m-%d')) As end_month , year(STR_TO_DATE(end, '%Y-%m-%d')) As end_year from movie");
while($row=mysqli_fetch_array($end))
{
if($row['end_day']==$day && $row['end_month']==$month && $row['end_year']==$year)
{
	$i='0';
	$update="UPDATE movie SET status = '$i' WHERE movie_id = '$k'";
	$re=mysqli_query($connection,$update);
	$h_update="UPDATE movie SET time_2 = '0',time_5 = '0',time_8 = '0' WHERE movie_id = '$k'";
	$h_update1=mysqli_query($connection,$h_update);
}
$k++;
}


	
	
	
	
}

?>



</body>
</html>