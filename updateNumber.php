<<?php
 $id = $_POST["id"];
 $name = $_POST["Name"];
 $PhoneNumber=$_POST["PhoneNumber"];


$severname="localhost";
$passwork="";
$username="root";
$db="baikiemtra_php";

$conn= new mysqli($severname,$passwork,$username,$db);

$sql= "update danhba set name='$name', PhoneNumber=' $PhoneNumber' where id='$id'";

$ds =$conn ->query($sql);

if($db==true){
    header("location:index.php");
}
else{
    echo "Error";
}