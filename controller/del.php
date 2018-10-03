<?php
session_start();
$id=$_SESSION['id'];
$st=$_SESSION['logged_in']; 
if(empty($id) or empty($st))
{
	header('location: ../index.php');
}
else
{
	 $conn=mysqli_connect('localhost','root','','spidersd_provisional');
				   				$id=$_GET['ref'];
								$qry="DELETE FROM records WHERE slno='{$id}'";
								$result=mysqli_query($conn,$qry);
								$qry="DELETE FROM marks WHERE ref='{$id}'";
								$result=mysqli_query($conn,$qry);
									echo"<script type='text/javascript'>
	window.setTimeout(function() { alert( 'Record Deleted..!' );
    window.location = './login.php';},0);
	</script>";
}
?>