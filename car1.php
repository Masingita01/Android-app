<?php
$username = "s1272188";
$password = "pZHXvNzsCt6SrKmM";
$database = "d1272188";
$link = mysqli_connect("127.0.0.1", $username, $password, $database);
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$Sql_Query = "insert into pet (name,email) values('$name','$email')";
if(mysqli_query($link,$Sql_Query)){
	echo 'Data Submit Successfully';
}
else{
echo 'Try Again';
}
mysqli_close($link);
?>
