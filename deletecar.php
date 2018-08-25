<?php
$username = "s1272188";
$password = "pZHXvNzsCt6SrKmM";
$database  = "d1272188";
$link = msqli_connect("127.0.0.1",$username, $password, $database);
$output = array();
$id = $_REQUEST["id"];
if($result = mysqli_query($link, "delete from Cars where id=$id"));
$output["result"]=$result;
mysqli_close($link);
echo json_encode($output);
?>
