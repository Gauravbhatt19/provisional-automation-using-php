<?php
session_start();
if(empty($_POST['sub1']) or is_null($_SESSION['name']))
{
	header('location: index.php');
}
else{
$conn=mysqli_connect('localhost','root','','spidersd_provisional');
$i=1;
$p='sub'.$i;
$name=$_SESSION['name'];
$fname=$_SESSION['fname'];
$roll=$_SESSION['roll'];
$brnch=$_SESSION['branch'];
$email=$_SESSION['email'];
$qry="INSERT INTO records1(name,fname,roll,branch,email) VALUES ('{$name}','{$fname}','{$roll}','{$brnch}','{$email}')";
$result=mysqli_query($conn,$qry);
$qry="SELECT * FROM records1";
$result=mysqli_query($conn,$qry);
$row_count=mysqli_num_rows($result);
$id=$row_count;
while (!empty($_POST[$p])) {
	$pr='sub'.$i;
$sb1=mysqli_escape_string($conn,$_POST[$pr]);
	$pr2='mme'.$i;
$me1=mysqli_escape_string($conn,$_POST[$pr2]);
	$pr3='mmi'.$i;
$mi1=mysqli_escape_string($conn,$_POST[$pr3]);
	$pr4='my'.$i;
$my1=mysqli_escape_string($conn,$_POST[$pr4]);
	$pr5='extyp'.$i;
$typ1=mysqli_escape_string($conn,$_POST[$pr5]);
$qry1="INSERT INTO marks(subject,mmsem,mmses,mnth_yr,exam_type,roll,ref) VALUES ('{$sb1}','{$me1}','{$mi1}','{$my1}','{$typ1}','{$roll}','{$id}')";
$result=mysqli_query($conn,$qry1);
$i++;
$p='sub'.$i;
}
}
session_unset();
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Provisional | THDCIHET</title>	
	<style>
	body
{
	font-family:Verdana,arial; 
	overflow-x:hidden; 
}
a
{
	text-decoration:none;
	color:#fff;  
}
ul li
{
	list-style-type:none;  
}
nav
{	 
	background-color:rgba(131,222,205,1); 
	color:rgba(62,82,78,0.7); 
	margin:0px -8px; 
}
nav h1
{
	padding:10px; 
	text-align:center; 
}
.logo
{	transition:1s; 
	display:grid;
	grid-template-columns:1fr 99999fr; 
	text-align:center;  
}
.logo h1
{
	font-size:1.1rem; 
	color:rgba(15,31,145,1);
}
.bfg
{
 position:fixed; width:70%; top:200px;
}
@media only screen and (max-width:288px)
{
.logo
{	transition:1s; 
	display:none;  
}
nav
{
	margin-top:-8px; 
}
}
@media only screen and (min-width:768px)
{.logo
	{

	margin-left:50px;
		}
		
		.logo h1
{
	font-size:1.5rem; 
}
nav
{
	grid-template-columns:1fr 1fr; 
}
.bfg
{
 width:40%;
left:25%;
top:25%;  }
}
@media only screen and (min-width:1200px)
{	.logo h1
{
	font-size:2rem; 
}
}
footer
{	top:8px;
	position:relative; 
	background-color:rgba(50,50,50,0.7); 
	color:rgba(215,228,245,1);
	text-align:center; 
	padding:20px;
	margin:-8px -8px -8px -8px;
}	
.bx
{
	display:grid;
	grid-template-columns:repeat(auto-fit,1fr);
}
.bx div
{
	width:100%; 
}
.xyz
{
	display: grid;
	grid-template-columns:repeat(auto-fit,minmax(400px,1fr)); 
	background-color:rgba(215,228,245,1);
	color:rgba(40,40,40,0.7);  
	margin:-20px -10px -8px -8px;  
	padding:10px; 
}

.lg
{
	margin-left:-8px; 
	background-color:rgba(215,228,245,1);

	padding:30px;  
}
.bd
{	background-color:rgba(215,228,245,1);
	margin:-8px;
	margin-top:0px;
	display:grid;
	grid-template-columns:1fr;  
	padding:10px 0px; 
	color:rgba(40,40,40,0.7); 

}
.bx h1
{
	text-align:center;
	background-color: rgba(255,255,255,0.7);
	margin:8px 20px; 
	padding:10px; 
}
.bx ol
{
	background-color:rgba(0,0,0,0.7);
	margin:-8px 20px 8px 20px;
	padding:10px; 
	color:#fff; 
	padding-left:40px; 
}
.bx li
{
	border-bottom:1px dashed #fff; 
}
.bx ol>li p,.bx ol>li h6
{
	display:inline; 
}
.hglt
{
	animation-name:attch;
	animation-iteration-count:infinite;
	animation-duration:1s; 
	animation-timing-function:linear;
}
@keyframes attch
{
	0%{color:yellow;}
	30%{color:white;}
	100%{color:blue;}
}
.lg
{
	background-color:#fff;
	border-radius:5px;
	box-shadow: 0px 0px 5px  #000;   
	margin:20px;
}
.lg label,.bo
{
	margin:10px; 
	font-size:0.9rem; 
}
.bo input ,.bo select,.bo label
{
	padding:10px;
	width:90%;
	font-size: 1rem;
}
.cd {
	display: grid;
	grid-template-columns:1fr 1fr; 
}
.bo input[type='submit']
{
	background-color:rgba(0,162,232,1); 
	border:0px;
	color:#fff;
	font-weight:bolder; 
	transition:0.5s; 
	border-radius:2px; 
}
.bo input[type='submit']:hover
{
	background-color:rgba(0,62,132,1); 
	transition:0.5s; 
}
.btn 
{	border:1px solid rgba(52,59,88,1);
	padding:8px;	 
	border-radius:5px;
	color:#fff;
	font-weight:bolder;
	background-color:rgba(0,53,147,0.7); 
	height:35px; 
	margin:1px;
	text-align:center; position:relative;
	top:20px;
	}
.btn:hover
{
	background-color:rgba(0,53,147,1);
}
.shw
{
	display:block; 
}
.xyz
{
	display: grid;
	grid-template-columns:repeat(auto-fit,minmax(400px,1fr)); 
	background-color:rgba(215,228,245,1);
	color:rgba(40,40,40,0.7);  
	margin:-20px -10px -8px -8px;  
	padding:10px; 
}
.grd
{
	display:grid;
	grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
}
table
{
	width:100%;
	text-align:center; 
	overflow-x:scroll; 
	background-color:#fff; 
}
table th
{
	padding:10px; 
	border:1px solid #000; 
	background-color: rgba(48,57,177,1);
	color:#fff;
}
table td
{
	padding:1px; 
	border:1px solid #000; 
}

</style>
	<script>
		function bdf()
		{
			document.getElementById('bdf').classList.toggle('shw');
		}
	</script>
</head>
<body>
	<header>
		<div class="logo">
			<img src="img/logo.png" width="100">
			<h1>THDC Institute of Hydropower Engineering and Technology</h1>
		</div>
		<nav>
			<h1>Provisional Marksheet Portal</h1>
		</nav>
	</header>
	<div  class="bx xyz" style="padding-bottom:200px; ">
				<div class="grd">
					<h1>Your Request is submitted you will get copy of Provision within 48 hrs in your this-<?php echo $email;?> email account .</h1>
	      	</div>
	      </div>

	<?php
	include 'footer.php';
	?>
</body>
</html>
