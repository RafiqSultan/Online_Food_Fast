<?php
// main connection in frontend and admin
$serverName="localhost";
$userName="root";
$password="";
$db_Name="online-food-delivery";
// Craete connection with database
$connection=mysqli_connect($serverName,$userName,$password,$db_Name);
//Check connection 
if(!$connection){
    echo " ERROR ON ACCESSING DATABASE".mysqli_connect_error();
}
?>