<?php  
session_start();//session starts here 
 
 error_reporting(0);
 
 $r= $_SESSION['id'];
// echo $r;
 
 $connection=mysqli_connect("localhost","root","","theater");
 
 $query="select * from books where customer_id='$r'";
 $query1=mysqli_query($connection,$query);
 while($row=mysqli_fetch_array($query1))
 {
	 echo $row['movie_name'];
	 echo "<br>";
 }
 
  
?>