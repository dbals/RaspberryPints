<?php
session_start();
if(!isset( $_SESSION['myusername'] )){
header("location:index.php");
}
require 'includes/conn.php';
require '../includes/config_names.php';


// Get values from form 
$BreweryID=$_POST['BreweryID'];




// update data in mysql database
$sql="UPDATE config SET configValue='$BreweryID' WHERE configName ='BreweryID'";
$result=mysql_query($sql);

// if successfully updated.
if($result){
echo "Successful";
echo "<BR>";
echo "<script>location.href='personalize.php';</script>";
}

else {
echo "ERROR";
}

?> 