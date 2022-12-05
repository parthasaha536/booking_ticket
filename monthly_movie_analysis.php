

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
	
	color:#192a56;
	margin-top:60px;
	margin-left:-40px;
	width:500px;
}
table{
	text-align:justify;
	
}



.thead{
	text-align:center;
}

.chart{
	margin-left:-20px;
	width:600px;
	margin-top:40px;
}
  
 
  
 h3{
	 
	 font-size:60px;
	 font-family:"Times New Roman", Times, serif;
	font-weight:bold;
	color:#192a56;
	text-align:center;

 }
 h4{
	 font-size:25px;
	 margin-left:-20px;
	 color:#192a56;
	 font-family:"Times New Roman", Times, serif;
 }
 .que{
	 height:40px;
	 border:2px solid #192a56;
	 border-radius:10px;
	 color:#192a56;
	 text-align:left;
	 font-size:20px;
	 width:190px;
	 font-family:"Times New Roman", Times, serif;
 }
 .buton{
	 height:40px;
	 width:60px;
	 position:absolute;
	 padding:5px;
	 text-align:center;
	 border:1px solid #192a56;
	 border-radius:10px;
	 margin-left:10px;
	 margin-top:0.8px;
	 font-family:"Times New Roman", Times, serif;
	 font-size:20px;
	 color:#192a56;
	 background-color:white;
 }
 
 .buton:hover{
	 color:white;
	 background-color:#192a56;
	 border:1px solid #192a56;
	 border-radius:10px;
 }
 
.span1{
	display:inline-block;
	
}
.span2{
	display:inline-block;
	
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
<form action="" method="post">
  <div class="container">
   <h3 align="center">Monthly Movie Sale Analysis</h3><br>
   <h4>
 <select  name="que" class="que">
<option value="">Select Month . . .</option>
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>   
   
   <input type="submit" value="Go" name="submit" class="buton">
   </h4>
  
   
  </form>
  </body>
</html>
  
  
  
<?php



$connection=mysqli_connect("localhost","root","","theater");

$chart_data = '';
$t_total=0;


if(isset($_POST['submit']))
{
	
$dat=$_POST['que'];
	

	


$query="Select id, movie_name,booking_id,SUM(bill) as bill,monthname(date) as month,SUM(sits) as sits from books
where monthname(date)='$dat' 
group by movie_name";

$result=mysqli_query($connection,$query);



?>  




<div class="container">
<div class="row">
<div class="col-sm-6">

<table class="table table-striped">
<thead>
    <tr  class="table-danger">
      <th scope="col">Serial</th>
      <th scope="col">Movie Name</th>
	  <th scope="col">Sit Booked</th>
	  <th scope="col">Total Sell</th>
    </tr>
</thead>

<tbody>


<?php
$u='1';
while($row=mysqli_fetch_array($result))
{
	
	?>
	
	<tr>
      <th width="70px" scope="row"><?php echo $u ?></th>
      <td width="180px"><?php echo $row['movie_name'] ?></td>
	  <td width="100px"><?php echo $row['sits'] ?></td>
	  <td width="00px"><?php  echo $row['bill'] ?></td>
    </tr>
	
<?php
	$u++;
}

$query="Select SUM(bill) as total,monthname(date) as month from books 
where monthname(date)='$dat' 
group by month";
$result=mysqli_query($connection,$query);

while($row=mysqli_fetch_array($result))	
{
	?>
	<tr>
      <th width="70px" scope="row"></th>
      <th width="180px">Month(<?php echo $dat ?>)</th>
	  <th width="100px">Total </th>
	  <th width="00px"><?php  echo $row['total'] ?>/=</th>
    </tr>
	<?php
}




?>


</tbody>
</table>
</div>












<?php
$query="Select id, movie_name,booking_id,SUM(bill) as bill,monthname(date) as month,SUM(sits) as sits from books
where monthname(date)='$dat' 
group by movie_name";
$query1=mysqli_query($connection,$query);
while($row1 = mysqli_fetch_array($query1))
		{
			$chart_data .= "{ movie_name:'".$row1["movie_name"]."', sits:".$row1["sits"]."}, ";
		}




$chart_data = substr($chart_data, 0, -2);


}


?>
 


 <div class="col-sm-6">
   <div class="chart" id="chart"></div>
   </div>
   </div>
   </div>
 

<!--<p><?php echo $dat ?> sale data</p>!-->

<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'movie_name',
 ykeys:['sits'],
 //ylabels: 5,
 numLines: 6,
 labels:['sits'],
 barSizeRatio:0.4,
 barColors:['#192a56'],
 barRadius: [0, 10, 0, 10],
 barOpacity: 0.7,
 xLabelMargin: 50,
 gridTextColor:['#2f3542'],
 gridTextSize:['15'],
 hideHover:'auto',
 //stacked:true
 //axes:false,
 grid:true
});
</script>

