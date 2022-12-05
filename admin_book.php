<?php
date_default_timezone_set("Asia/Dhaka");
session_start();//session starts here  

error_reporting(0);

?>





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
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	<title>    </title>
<head>

<style>

body {
	 
	  
      font-family:Times, "Times New Roman", Georgia, serif;)
      background-size: cover;
	  background-repeat:No-repeat;
      overflow:auto;
	  height:900px;
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




.date4{
	margin-left:230px;
	margin-top:-4%;
	width:235px;
	border:2px solid #192a56;
	border-radius:10px;
	height:50px;
	color:#192a56;
	text-align:left;
	font-size:20px;
	position:absolute
	font-family:"Times New Roman", Times, serif;
	
}
h1{
	
	padding:10px;
	font-size:50px;
	color:#192a56;
	margin-left:500px;
	font-family:"Times New Roman", Times, serif;
}
.line{
	margin:10px;
	border-bottom:5px solid #192a56;
	width:495px;
	margin-left:400px;
	
}

.date1{
	border:3px solid #192a56;
	border-radius:10px;
	height:50px;
	color:#222f3e;
	text-align:center;
	margin-left:400px;
	font-size:20px;
	background-color:#bdc3c7;
	font-family:"Times New Roman", Times, serif;
}
.date2{
	border:3px solid #192a56;
	border-radius:10px;
	height:50px;
	color:#222f3e;
	text-align:center;
	margin-left:25px;
	font-size:20px;
	background-color:#bdc3c7;
	font-family:"Times New Roman", Times, serif;
}
.date3{
	border:3px solid green;
	height:50px;
	color:green;
	text-align:center;
	margin-left:25px;
	font-size:20px;
	font-family:"Times New Roman", Times, serif;
}

h2{
	font-size:25px;
	color:#192a56;
	margin-left:37px;
	font-family:"Times New Roman", Times, serif;
}

.buton{
	
	width:54px;
	height:30px;
	margin-left:267px;
	color:#192a56;
	border:1px solid #192a56;
	border-radius:8px;
	font-family:"Times New Roman", Times, serif;
	
}
.buton:hover{
	background-color:#192a56;
	color:white;
	font-family:"Times New Roman", Times, serif;
}

.buton1{
	border:1px solid #192a56;
	border-radius:8px;
	color:#192a56;
	height:30px;
	margin-left:50px;
	font-family:"Times New Roman", Times, serif;
}
.buton1:hover{
	background-color:#192a56;
	color:white;
	font-family:"Times New Roman", Times, serif;
}

.chart{
	margin-left:550px;
	width:450px;
	 position:absolute;
	margin-top:-50px;
	
}
.chart1{
	margin-left:650px;
	width:450px;
	 position:absolute;
	margin-top:00px;
	
}
.container{
	color:white;
}
.sale{
	margin-left:550px;
	position:absolute;
	margin-top:-9%;
	color:white;
	font-size:35px;
	font-family:"Times New Roman", Times, serif;
}

.table-striped{
	
	color:#192a56;
	margin-top:60px;
	margin-left:80px;
	width:500px;
}
table{
	text-align:justify;
	
}



.thead{
	text-align:center;
}

.tab{
	
	margin-top:80%;
	
}
.monthly{
	border:1px solid #192a56;
	border-radius:8px;
	width:232px;
	height:30px;
	padding:2px;
	position:absolute;
	margin-top:-3%;
	margin-left:19.6%;
	font-family:"Times New Roman", Times, serif;
	background-color:white;
	color:#192a56;
	text-decoration:none;
	text-align:center;
}

.monthly:hover{
	text-decoration:none;
	background-color:#192a56;
	color:white;
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


<br>





<form action"" method="post">
<div>
<h1>Admin Page</h1>
</div>
<div class="line">

</div>
<br>
<div>
<input type="text" class="date1" placeholder="date" name="date" value=<?php echo " " . date("d/m/Y")?> disabled>

<input type="text" class="date2" placeholder="date" name="day" value=<?php echo " " . date("l") ?> disabled>

</div>
<br><br><br>
<div>
<h2>Enter Query Month<h2>

<select class="date4" name="month">
<option value="">&nbsp&nbsp&nbspSelect Month . . .</option>
<option value="January">&nbsp&nbsp&nbspJanuary</option>
<option value="February">&nbsp&nbsp&nbspFebruary</option>
<option value="March">&nbsp&nbsp&nbspMarch</option>
<option value="April">&nbsp&nbsp&nbspApril</option>
<option value="May">&nbsp&nbsp&nbspMay</option>
<option value="June">&nbsp&nbsp&nbspJune</option>
<option value="July">&nbsp&nbsp&nbspJuly</option>
<option value="August">&nbsp&nbsp&nbspAugust</option>
<option value="September">&nbsp&nbsp&nbspSeptember</option>
<option value="October">&nbsp&nbsp&nbspOctober</option>
<option value="November">&nbsp&nbsp&nbspNovember</option>
<option value="December">&nbsp&nbsp&nbspDecember</option>
</select>
</div>
<div>
<input type="submit" class="buton" name="submit" value="Go">

<input type="submit" class="buton1" name="show" value="Show monthly sale">
</form>
</div>
<div class="container">
   <h3 class="sale" align="center">Monthly sale Data Graph</h3>   
   <br /><br />
   <div class="chart" id="chart"></div>
</div>
<div class="chart1" id="chart1"></div>
</div>
<a class="monthly" href='http://localhost/reservation/monthly_movie_analysis.php'>Monthly Movie Sale Analysis</a>







<?php


$connection=mysqli_connect("localhost","root","","theater");

if(isset($_POST['show']))
{
	
	?>
	
<table class="table table-striped">
<thead>
    <tr  class="table-danger">
      
      <th scope="col">Month</th>
	  <th scope="col">Year</th>
	  <th scope="col">Total</th>
    </tr>
</thead>

<tbody>


<?php

$query="Select monthname(date) as month,year(date) as year,sum(bill) as total_bil 
from books 

group by year(date),month(date) ";


$result=mysqli_query($connection,$query);



$u='1';
$chart_data = '';
$sum1='0';
while($row=mysqli_fetch_array($result))
{
	
	?>
	<tr>
     
      <td width="150px"><?php echo $row['month'] ?></td>
	  <td width="150px"><?php echo $row['year'] ?></td>
	  <td width="00px"><?php  echo $row['total_bil'] ?></td>
    </tr>
	
	<?php
	$sum1=$sum1+$row['total_bil'] ;
	
	$chart_data .= "{ month:'".$row["month"]."', total:".$row["total_bil"]."}, ";
	$u++;
	
}

?>

    <tr>
     
      <td width="150px"></td>
	  <th width="150px">Total</th>
	  <th width="00px"><?php  echo $sum1?>/=</th>
    </tr>
	
	<?php

$chart_data = substr($chart_data, 0, -2);






}

?>

</tbody>
</table>





<?php

if(isset($_POST['submit']))
{
	
	?>
	
<table class="table table-striped">
<thead>
    <tr  class="table-danger">
	
      <th scope="col">Day</th>
      <th scope="col">Month</th>
	  <th scope="col">Year</th>
	  <th scope="col">Total</th>
    </tr>
</thead>

<tbody>
	
	<?php
	
$dat=$_POST['month'];
$query="Select day(date) as date,monthname(date) as month,year(date) as year,SUM(bill) as total_bil 
from books
where monthname(date)='$dat'
group by date ";


//echo"Partha Saha";

$result=mysqli_query($connection,$query);
   

	$chart_data1 = '';

/*while($row1=mysqli_fetch_array($result))
{
	echo"$row1[month] sale data";
	break;
}*/
	$sum='0';
while($row=mysqli_fetch_array($result))
{
	
	?>
	<tr>
	  <td width="180px"><?php echo $row['date'] ?></td>
      <td width="180px"><?php echo $row['month'] ?></td>
	  <td width="100px"><?php echo $row['year'] ?></td>
	  <td width="00px"><?php  echo $row['total_bil'] ?></td>
    </tr>
	<?php
	
	 $sum=$sum+$row['total_bil'];
	
	?>
	
	<?php
	$chart_data1 .= "{ day:'".$row["date"]."', total:".$row["total_bil"]."}, ";
}
?>

    <tr>
	  <td width="150px"><?php  ?></td>
      <td width="150px"><?php ?></td>
	  <th width="100px">Total</th>
	  <th width="00px"><?php  echo $sum ?>/=</th>
    </tr>
	
	<?php
$chart_data1 = substr($chart_data1, 0, -2);
//echo"<a href='http://localhost/facebook/one_month_sale.php'>Show One montth chart</a>";



}





?>


<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'month',
 ykeys:['total'],
 numLines: 6,
 labels:['total'],
 barSizeRatio:0.4,
 barColors:['#192a56'],
 barRadius: [0, 10, 0, 10],
 barOpacity: 0.7,
 gridTextColor:['#2f3542'],
 gridTextSize:['15'],
 hideHover:'auto',
 stacked:true
});
</script>

<script>
Morris.Bar({
 element : 'chart1',
 data:[<?php echo $chart_data1; ?>],
 xkey:'day',
 ykeys:['total'],
 numLines: 6,
 labels:['total'],
 barSizeRatio:0.5,
 barColors:['#192a56'],
 barRadius: [0, 10, 0, 10],
 barOpacity: 0.7,
 gridTextColor:['#2f3542'],
 gridTextSize:['15'],
 hideHover:'auto',
 stacked:true
});
</script>

</body>
</html>
