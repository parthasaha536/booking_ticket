
<?php  
session_start();//session starts here 
 
 //error_reporting(0);
 $email=$_SESSION['email'];
 
 $connection=mysqli_connect("localhost" , "root" , "" , "theater");
 
$value='0';
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
	 
font-family:Times, "Times New Roman", Georgia, serif;
}


.card-body{
	color:red;
	margin-top:200px;
	margin-left:350px;
	width:600px;
	border:2px solid red;
	
	border-radius:20px;
}

.btn-primary{
	background-color:red;
	color:white;
	width:200px;
	border:1px solid white;
	margin-left:-78px;
	border-radius:10px;
}
.btn-primary:hover{
	color:red;
	background-color:white;
	border:2px solid red;
}

.form-control{
	margin-top:10px;
	border:2px solid red;
	border-radius:10px;
	width:350px;
	
	margin-left:-20px;
}

.head{
	margin-left:190px;
	color:#6F1E51;
}
.text-md-right{
	margin-left:-110px;
}
.correct
{
	background-color:#ffcccc;
	padding-left:40px;
	color:red;
	width:370px;
	position:absolute;
	height:60px;
	font-size:17px;
	margin-left:450px;
	margin-top:-300px;
    border-left:8px solid red;
	border-right:none;
	border-top:none;
	border-bottom:none;
}

</style>

<body>

 

<div class="card-body">

<h3 class="head">Tell Us Your Problem</h3>

<form action="" method="POST">


<span class="span1"><div class="form-group row">
<label for="message" class="col-md-5 col-form-label text-md-right"><b><h4>Message</h4></b></label>
<div class="col-md-7">
<textarea type="text"    placeholder="Drop Your Message Here . . ." class="form-control" name="message"    required ></textarea>
</div>
</div></span>

<input type="hidden" name="email" value="<?php echo $email ?>">
<input type="hidden" name="value" value="1">
   <div class="form-group row mb-0">
   <div class="col-md-6 offset-md-4">
   <button type="submit" name="submit" value="<?php  echo $email ?>" class="btn btn-primary" >
    Send
   </button>
   </div>
   </div>



</form>



</div>

<?php

if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$message=$_POST['message'];
	$value=$_POST['value'];
	
	
	
		$query="INSERT INTO contact (email,message) VALUES ('$email','$message')";
	    $query1=mysqli_query($connection,$query);
		
	
	/*$query="INSERT INTO contact (email,message) VALUES ('$email','$message')";
	$query1=mysqli_query($connection,$query);*/
	
	
	$subject="Contact-Help";
	$body2="Dear Sir,";
	//echo $body;
	$body1="Thank you for supporting us. Our agent will be contact you within 24 hours.";
	$headers="From : parthasaha536@gmail.com";
	//echo "<input type='text' value='Message Send Failed ! !' class='correct' disabled>";
	if($query1==true)
	{
		
		if(mail($email,$subject,$body1,$body2,$headers))
		{
			?>
			
		   <script>
		    window.location.href='http://localhost/reservation/home2.php';
		   </script>
		   
		   <?php
		   
		}
		
	}
	else
	{
		echo "<input type='text' value='Message Send Failed ! !' class='correct' disabled>";
	}
	
	
}





?>










</body>
</html>