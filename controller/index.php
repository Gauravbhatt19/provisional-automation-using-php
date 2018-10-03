<?php
session_start();
$conn=mysqli_connect('localhost','root','','spidersd_provisional');
$id=mysqli_escape_string($conn,$_POST['lid']);
$pass=mysqli_escape_string($conn,$_POST['pass']);
if(empty($id) or empty($pass))
{
	header('location: ../index.php');
}
else
{
	$result=mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
if ( $result->num_rows== 0 )
{ 
 		echo"<script type='text/javascript'>
	window.setTimeout(function() { alert( 'Invalid ID !' );
    window.location = '../index.php';},0);
	</script>";
}
else {  $result_id = $result->fetch_assoc();
if(password_verify($pass,$result_id['pass']))
{       
		$_SESSION['id'] = $result_id['id'];
        $_SESSION['logged_in'] = true;
    	   header("location: ./login.php");
    }
  else {
   echo"<script type='text/javascript'>
	window.setTimeout(function() { alert( 'Invalid Password..!' );
    window.location = '../index.php';},0);
	</script>";
	 }
}
}
?>
