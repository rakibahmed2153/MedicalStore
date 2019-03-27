<?php
require("functions.php");
$category=$_REQUEST["category"];
if(strtolower($category)=="health")
{
    addHealth();
    header('location: addProduct.php?New Product is Successfully Added');
}
else if(strtolower($category)=="baby")
{
    addBaby();
    header('location: addProduct.php?New Product is Successfully Added');
}
else if(strtolower($category)=="iv")
{
    addIv();
    header('location: addProduct.php?New Product is Successfully Added');
}
else if(strtolower($category)=="women")
{
    addWomen();
    header('location: addProduct.php?New Product is Successfully Added');
}
else if(strtolower($category)=="power")
{
    addPower();
    header('location: addProduct.php?New Product is Successfully Added');
}
else if(strtolower($category)=="orthopaedic")
{
    addOrthoaedic();
    header('location: addProduct.php?New Product is Successfully Added');
} 

else
{
	 header('location: addProduct.php?Invalid Category');
}

?>


