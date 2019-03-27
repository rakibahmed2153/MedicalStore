
<?php
require("functions.php");


$tmp=$_FILES['fileToUpload']['tmp_name'];
$name=$_FILES['fileToUpload']['name'];

$ext=getExt($name);
$target="images/".time().".".$ext;

if($ext!="jpg"){
	header("Location:addProduct.php?error=file type invalid");
}
else if(file_exists($target)){
	header("Location:addProduct.php?error=file already exist");
}
else{
	$t= move_uploaded_file($tmp,$target);
	$sql="insert into medicine values('','".$_POST["productname"]."','".$_POST["companyname"]."','".$_POST["category"]."','".$_POST["quantity"]."','".$_POST["price"]."','".$target."')";
	//echo $sql;
	$u=updateSQL($sql);
	header("Location:addProduct.php?Product Successfully Uploaded");
}
?>
