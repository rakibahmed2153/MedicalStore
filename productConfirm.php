<?php


$con = mysqli_connect("localhost", "root", "","medicinestore");
if($con)
{
	//echo 'connection successful';
		
}

$sql= "insert into cart values('".$_POST["Pname"]."','".$_POST["quan"]."','".$_POST["txt"]."','".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["apartment"]."','".$_POST["house"]."','".$_POST["town"]."','".$_POST["postcode"]."','".$_POST["phone"]."','".$_POST["email"]."')";

if(!mysqli_query($con,$sql))
{
	echo 'not inserted';
		
}
else
{
	
	header("Location:Cart.php?Order Has Been Deliverd..Wait For The Confirmation");
}
?>