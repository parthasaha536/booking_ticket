


<?php
 
session_start();//session starts here  

//error_reporting(0);

$customer_id=$_SESSION['id'];


$connection=mysqli_connect("localhost" , "root" , "" , "theater");
if(isset($_POST['submit']))
{
	//$email=$_POST['email'];
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	//$value=$_POST['value'];
	
    //$update="UPDATE customer SET phn_number = '$phone' , password = '$password', name = '$name',  WHERE id ='$customer_id'";
	$update="UPDATE customer SET phn_number = '$phone', name = '$name' WHERE id = '$customer_id' ";
	$update1=mysqli_query($connection,$update);
	
	if($update1==true)
	{
		echo "Update Successfully";
	}
	else
	{
		echo "Update Failed ! ! ";
	}
	
}


?>