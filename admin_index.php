

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
	  height:800px;
	  width:1000px;
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
	margin-top:20px;
	
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


$query="select * from movie";

$query1=mysqli_query($connection,$query);

?>

<form action="admin_index_update.php" method="post">

<table class="table table-striped">
<thead>
    <tr  class="table-danger">
      <th scope="col">Serial</th>
      <th scope="col">Movie Name</th>
	  <th scope="col">Status</th>
      <th scope="col">Price</th>
	  <th scope="col">Description</th>
	  <th scope="col">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Action</th>
    </tr>
</thead>

<tbody>


<?php
while($row=mysqli_fetch_array($query1))
{
	
	?>
	
	<tr>
      <th width="70px" scope="row"><?php echo $row['movie_id'] ?></th>
      <td width="180px"><?php echo $row['name'] ?></td>
	  
	   <?php
	     
		 if($row['status']==1)
		 {
			 
			 ?>
			 <td scope="col">Running</td>
			 
		<?php	 
		 }
		 else if($row['status']==2)
		 {
			 
			 ?>
			 <td scope="col">Upcoming...</td>
			<?php 
			
		 }
		 
		 else
		 {
			 ?>
			 
			 <td scope="col">OFF</td>
			 <?php
			 
		 }
	  
	  
	  ?>
	  
	  
	  
      <td width="100px"><?php  echo $row['price'] ?></td>
	  <td width="500px"><?php  echo $row['description'] ?></td>
	  <td width="300px">
	  
	  
	  <span class="span1">
	  <div class="form-group row mb-0">
      <div class="col-md-6 offset-md-4">
      <button type="submit" name="submit" class="btn btn-primary" value="<?php echo $row['movie_id']?>" >
       Update
      </button>
      </div>
      </div></span>
	  
	  
	  <span class="span2">
	  <div class="form-group row mb-0">
      <div class="col-md-6 offset-md-4">
      <button type="submit" name="submit1" class="btn btn-danger" value="<?php echo $row['movie_id']?>" >
       OFF
      </button>
      </div>
      </div></span>
	  
	  
	  
	  </td>
    </tr>
	
<?php
	
}	




?>


</tbody>
</table>
</div>

</form>



</body>
</html>