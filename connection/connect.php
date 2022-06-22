<?php
$serverName="localhost";
$userName="root";
$password="";
$db_Name="online-food-delivery";

$connection=mysqli_connect($serverName,$userName,$password,$db_Name);
if(!$connection){
    echo " ERROR ON ACCESSING DATABASE".mysqli_connect_error();
}
echo "<h1>Successfull Accessing</h1>"
?>