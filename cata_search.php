<?php  
session_start();//session starts here  

error_reporting(0);

 if(isset($_POST['submit']))
 {
	 $c_id=$_POST['c_name'];
	// echo $c_id;
 }
 
 //echo $id;

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
	margin-left:400px;
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

.form-control{
	margin-left:115px;
	margin-top:10px;
	border:2px solid red;
	border-radius:10px;
	width:250px;
}

.btn-primary{
	background-color:red;
	color:white;
	border:1px solid white;
	margin-left:-80px;
	margin-top:-57px;
}
.btn-primary:hover{
	color:red;
	background-color:white;
	border:2px solid red;
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
		 
		 
 <div class="col-sm-4">

    <div class="navbar">
     <a class="menu" href="http://localhost/reservation/home2.php">Home </a>
     |<a class="menu" href="http://localhost/reservation/reserve.php">| Reserve | </a>
     <a class="menu" href="#"> Contact us ||</a>&nbsp&nbsp&nbsp&nbsp&nbsp
	 
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
</div>


<?php

$connection=mysqli_connect('localhost' , 'root' , '' , 'theater');

$pp="select name from category where category_id=$c_id";

$result=mysqli_query($connection,$pp);
while($row=mysqli_fetch_array($result))
{
	$c_name=$row['name'];
	//echo $c_name;
}


?>




<h1 class="head"><b>Now Showing <?php echo $c_name ?> Movie</b></h1>
<form action="cata_search.php" method="post">

<select  class="form-control" name="c_name"    required>
<option  value="">Select Category</option>
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


<div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
<button type="submit" name="submit" class="btn btn-primary" >
Search
</button>
</div>
</div>


</form>


<br><br>
<form action="booking.php" method="POST">
<?php

$connection=mysqli_connect("localhost","root","","theater");

?>


<?php

 
		$i='0';
		$j='0';
        $g='4';//////fghjk
		$t='1';
		$y='0';

        $connection=mysqli_connect("localhost","root","","theater");
		
		//echo $c_id;
               
		$qury="select COUNT(status) as status from movie where status=1";
		//$qury="select COUNT(category_id) as status from movie where category_id='$c_id'";
		$qury1=mysqli_query($connection,$qury);
		while($row=mysqli_fetch_array($qury1))
		{
			$p=$row['status'];
		}
		$f=$p;

        $sql = "SELECT * FROM movie"; 
        $res_data = mysqli_query($connection,$sql);

while($row=mysqli_fetch_array($res_data))
{
		if($row['status']==1 && $row['category_id']==$c_id)
		{
			$i++;
?>
            <button class="button" type="submit" name="submit"  value="<?php echo $row['movie_id'] ?>">
			 <?php echo "<img  class='list' src='$row[img]' width=200 height=300>";?>
			 </button>
		    
			<?php 
		  
		
		  if($i==$g)//$g=4 $i=0
	      {
			echo"<br>";
			$sql1 = "SELECT * FROM movie"; 
            $res_data1 = mysqli_query($connection,$sql1);
			$y=$j;
			
			while($row=mysqli_fetch_array($res_data1))
			{
				if($row['status']==1 && $row['category_id']==$c_id)
				{
					
					
					if($j>=$g)//$g=4 $j=0
					{
						 //break;
					}
					else
					{
						if($t>$y)//$t=1 $y=0
						{
							
						  echo"<input class='name' type='text' value='$row[name]'>";
					      $j++;
						
						}
						$t++;
						
					}
				
					
				}
				
				
			}
			$t='1';
			$p=$f-$g; 
			if($p>4) //$p=7 $f=7
		    {   
			 $u=$f-$p;
		 	 $g=$g+$u;
		    }
			else
			{
				$g=$g+$p;
			}
			echo "<br><br><br>";
			
		 }
		
	
	}
	
}
  



?>
<br><br><br><br><br><br>


<script type="text/javascript">
  function reply_click(clicked_id)
  {
     
	  

  
      localStorage.setItem("passValue",clicked_id);
  }


  
</script>


</form>


</body>
</html>
