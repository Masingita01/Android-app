<?php
$username = "s1272188";
$password = "pZHXvNzsCt6SrKmM";
$database = "d1272188";
$link = mysqli_connect("127.0.0.1",$username, $password, $database);
$output = array();
/* Select queries return a resultset*/
if($result = mysqli_query($link, "SELECT * from Cars")){
	while($row=$result->fetch_assoc()){
		$output[]=$row;
	}
}
mysqli_close($link);
echo json_encode($output);
?>
