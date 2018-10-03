<?php
session_start();
$id=$_SESSION['id'];
$st=$_SESSION['logged_in']; 
if(empty($id) or empty($st))
{
	header('location: ../index.php');
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Provisional | THDCIHET</title>
		<style>body
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
			<img src="../img/logo.png" width="100">
			<h1>THDC Institute of Hydropower Engineering and Technology</h1>
		</div>
		<nav style='display:grid;
	grid-template-columns:2fr 1fr;'>
			<h1>Provisional Marksheet Portal</h1>
			<div>
				<a href="./login.php" class='btn' >Applications</a>
				<a href="./logout.php" class='btn' >Logout</a>
			</div>
		</nav>
	</header>
<div class="xyz" style="padding-bottom:130px; ">
	<div class="lg">
		<div  class="bx">
			<h1 style="margin-top:-30px; ">Generated Provisionals</h1>
			<div class="grd">
	      	<div>
			<table  id='tbl'>
				   	<tbody>		<tr> <th>Sl. no.</th>
				      				<th>Student Name</th>
				      				<th>Roll No.</th>
				      				<th>Father's Name</th>
				      				<th>Branch</th>
				      				<th>File Name</th>
				      				<th>Generated Time</th></tr>
				      			<?php
				      			$conn=mysqli_connect('localhost','root','','spidersd_provisional');
								$qry="SELECT * FROM records ORDER BY tm ASC";
								$result=mysqli_query($conn,$qry);
								$i=1;
								while($row=mysqli_fetch_assoc($result)){
									$sl=$row['slno'];
									$nm=$row['name'];
									$roll=$row['roll'];
									$fnm=$row['fname'];
									$brnch=$row['branch'];
									$tm=$row['tm'];
									$st=$row['status'];
									$filename=$sl.'p'.$roll.'.pdf';
									if($st) {
										
									echo '<tr><td>'.$i.'</td><td>'.$nm.'</td><td>'.$roll.'</td><td>'.$fnm.'</td><td>'.$brnch.'</td><td>'.$filename.'</td><td>'.$tm.'</td></tr>';
									$i++;
									}
								}
				      			?>
				      			</tbody>
				      		</table>   
	      </div>
	  </div> 	
	</div>
</div>
</div>
		<?php
	include '../footer.php';
	?>
</body>
</html>