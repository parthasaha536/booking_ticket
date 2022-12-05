<?php  
/** 
 * Created by PhpStorm. 
 * User: Ehtesham Mehmood 
 * Date: 11/21/2014 
 * Time: 2:46 AM 
 */  
  
session_start();//session is a way to store information (in variables) to be used across multiple pages.  

$connection=mysqli_connect('localhost','root','','theater');




$pp="UPDATE customer SET switch = '0' WHERE email ='$_SESSION[email]'";
$oo1=mysqli_query($connection,$pp);

session_destroy();  
header("Location: welcome.php");//use for the redirection to some page  
?> 