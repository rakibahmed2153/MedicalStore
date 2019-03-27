<?php
require("functions.php");
$auth=array();

//loadFromMySQL3("select * from admin");
//loadFromText();
LoadXml();
$u=$_POST['username'];
//$p=md5($_POST['password']);
$p=$_POST['password'];
$t=0;
session_start();
foreach($auth as $a){
	
	if($u==$a["Firstname"] && $p==$a["Password"]){
		
		$t=1;
		$_SESSION["flag"]="loginSuccess";
		header("Location:Admin.php");
		break;
	}
}
if($t==0){
	header("Location:login.html?error=Invalid User");
}

      

?>