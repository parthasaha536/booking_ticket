

<?php  
session_start();//session starts here  

//error_reporting(0);
$agent_email=$_SESSION['email'];
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
	  width:900px;
	  -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
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
.ppp{
	margin-left:120px;
}


</style>

<body>


<div class="ppp">


<?php  include("nav.php"); ?>

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
	
	<input type="hidden" name="customer_email" value="<?php echo $row['email']  ?>">
	<tr>
      <th width="70px" scope="row"><?php echo $j ?></th>
      <td width="100px"><?php echo $row['email'] ?></td>
	  
      <td width="100px"><?php  echo $row['message'] ?></td>
	  
	 
	  
	  <td width="40px">
	  
	  <?php 
	  
	  
	     if($row['status']==1)
		 {
			 
		 
	  
	  
	  ?>
	  <span class="span1">
	  <div class="form-group row mb-0">
      <div class="col-md-6 offset-md-4">
      <button type="submit" name="submit" class="btn btn-primary" value="<?php echo $row['id']?>" >
       Reply
      </button>
      </div>
      </div></span>
	  
	  <?php
	  
		 }
		 else
		 {
			 ?>
			 <h5>Done</h5>
			 
			 <?php
		 }
		 
		 
		 ?>

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