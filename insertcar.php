<?php
$username = "s1272188";
$password = "pZHXvNzsCt6SrKmM";
$database  = "d1272188";
$link = mysqli_connect("127.0.0.1",$username, $password, $database);
$output = array();
$brand = $_POST["brand"];
$owner = $_POST["owner"];
$number = $_POST["number"];
$age = $_POST["age"];
if(!isset($owner, $age, $brand, $number)){
	$output["result"]= "you didnt send the required values";
	echo json_encode($output);
	die();
}
if($result = mysqli_query($link, "insert into Cars(owner,age,brand,number) values('$owner','$age','$brand','$number')"));
$output["result"]=$result;
mysqli_close($link);
echo json_encode($output);
?>
