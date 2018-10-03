<?php
$conn=mysqli_connect('localhost','root','','spidersd_provisional');
$id='GB1924';
$pass='12345';
$pass= password_hash($pass, PASSWORD_DEFAULT);
$qry="INSERT INTO users (id,pass) VALUES ('{$id}','{$pass}')";
$result=mysqli_query($conn,$qry);
if($result)
{ echo "Hello ".$id." , Succesfully Registered";
}
else
{	$first=mysqli_error($conn);
	$second='Duplicate';
	if( (strpos($first,$second) !== false)) {
	echo "<h1>Duplicate Entry, Try again different User id..!</h1>";
}
else {
	echo "Some Unknown Error Try again.!";}
}
?>