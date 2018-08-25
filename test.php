<?php
$username = "s1272188";
$password = "pZHXvNzsCt6SrKmM";
$database = "d1272188";
$link = mysqli_connect("127.0.0.1",$username, $password, $database);
$output = array();
$owner = $_POST['owner'];
$age = $_POST['age'];
$brand = $_POST['brand'];
$number = $_POST['number'];
$Sql_query = "insert into Cars (owner,age,brand,number) values ('$owner','$age','$brand','$number')";
if(mysqli_query($link,$Sql_query)){
	echo 'Data Submit Successfully';
}
else{
echo 'Try Again';
}
mysqli_close($link);
?>
