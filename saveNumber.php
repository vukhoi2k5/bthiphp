<?php
$name=$_POST["Name"];
$PhoneNumber=$_POST["PhoneNumber"];

$severname="localhost";
$passwork="";
$username="root";
$db="baikiemtra_php";

$conn= new mysqli($severname,$passwork,$username,$db);

$ds= "insert into danhba(Name,PhoneNumber) values('$name','$PhoneNumber')";

if ($conn-> query($ds)===TRUE){
    header("location:index.php");
}
else{
    echo "Error";
}


?>
