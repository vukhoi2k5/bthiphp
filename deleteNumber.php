<<?php
 $id = $_GET["id"];


$severname="localhost";
$passwork="";
$username="root";
$db="baikiemtra_php";

$conn= new mysqli($severname,$passwork,$username,$db);

$sql= "delete from danhba where id=$id";

$ds =$conn ->query($sql);

if($db==true){
    header("location:index.php");
}
else{
    echo "Error";
}