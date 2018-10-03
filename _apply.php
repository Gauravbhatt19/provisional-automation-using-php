<?php
session_start();
if(empty($_POST['sname'])){
	header('location: index.php');
}
$conn=mysqli_connect('localhost','root','','spidersd_provisional');
$nm=mysqli_escape_string($conn,$_POST['sname']);
$fnm=mysqli_escape_string($conn,$_POST['fname']);
$rno=mysqli_escape_string($conn,$_POST['rno']);
$brnch=mysqli_escape_string($conn,$_POST['brnch']);
$mail=mysqli_escape_string($conn,$_POST['mail']);
if(empty($nm)){
	echo"<script type='text/javascript'>
	window.setTimeout(function() { alert( 'Please Enter Valid Name...!' );
    window.location = 'index.php';},0);
	</script>";
}
if(empty($fnm)){
	echo"<script type='text/javascript'>
	window.setTimeout(function() { alert( 'Please Enter Valid Father's Name...!' );
    window.location = 'index.php';},0);
	</script>";
}
if(empty($rno)){
	echo"<script type='text/javascript'>
	window.setTimeout(function() { alert( 'Please Enter Valid Roll no. ..!' );
    window.location = 'index.php';},0);
	</script>";
}
if(empty($brnch)){
	echo"<script type='text/javascript'>
	window.setTimeout(function() { alert( 'Please Enter Valid branch ...!' );
    window.location = 'index.php';},0);
	</script>";
}
if(empty($mail)){
	echo"<script type='text/javascript'>
	window.setTimeout(function() { alert( 'Please Enter Valid Email Id. ..!' );
    window.location = 'index.php';},0);
	</script>";
}
$_SESSION['name']=$nm;
$_SESSION['fname']=$fnm;
$_SESSION['roll']=$rno;
$_SESSION['branch']=$brnch;
$_SESSION['email']=$mail;
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Provisional | THDCIHET</title>
	<script type="text/javascript">
		// function add(xyz){

		// 	var updt=document.getElementById(xyz+'om');
		// 	var inpt1=document.getElementById(xyz+'im1');
		// 	var inpt2=document.getElementById(xyz+'im2');
		// 	var x=inpt1.value;
		// 	var y=inpt2.value;
		// 	updt.innerHTML=eval('x-(-y)');
		// }
		var i=1;
		function addsub()
		{
			i++;
  var tr = document.createElement("tr");
  tr.id='tr'+i;
  var td = document.createElement("td");
  var slno= i;
  var t = document.createTextNode(slno);
  td.appendChild(t);
  tr.appendChild(td);
  var inpt=document.createElement("input");
  inpt.placeholder='Enter Subject code & name';
  inpt.style.width='100%';
  inpt.name='sub'+i;
  var td1= document.createElement("td");
  td1.appendChild(inpt);
  tr.appendChild(td1);
  var inpt1=document.createElement("input");
  inpt1.placeholder='e.g. 100 or 50';
  inpt1.style.width='100%';
  inpt1.name='mme'+i;
  var td2= document.createElement("td"); 
  td2.appendChild(inpt1);
  tr.appendChild(td2);
  var inpt2=document.createElement("input");
  inpt2.placeholder='e.g. 50 or 25';
  inpt2.style.width='100%';
  inpt2.name='mmi'+i;
  var td3= document.createElement("td");
  td3.appendChild(inpt2);
  tr.appendChild(td3);
  var inpt3=document.createElement("input");
  inpt3.placeholder='e.g. Oct 2015';
  inpt3.style.width='100%';
  inpt3.name='my'+i;
  var td9= document.createElement("td");
  td9.appendChild(inpt3);
  tr.appendChild(td9);
  var slct=document.createElement("select");
  slct.style.width='100%';
  slct.name='extyp'+i;
  var opt1=document.createElement("option");
  opt1.innerHTML='Exam type';
  opt1.value='0';
  opt1.selected='1';
  opt1.disabled='1';
  slct.appendChild(opt1);
  var opt2=document.createElement("option");
  opt2.innerHTML='Regular Back';
  opt2.value='1';
  slct.appendChild(opt2);
  var opt3=document.createElement("option");
  opt3.innerHTML='Internal Back';
  opt3.value='2';
  slct.appendChild(opt3);
  var opt4=document.createElement("option");
  opt4.innerHTML='Regular';
  opt4.value='3';
  slct.appendChild(opt4);
  var td10= document.createElement("td");
  td10.appendChild(slct);
  tr.appendChild(td10);
  document.getElementById("tbl").appendChild(tr);
      function add1(){
  	push(i);
  }
}
   function delsub()
		{ 
    var prid = document.getElementById("tbl");
    if(i>=2){
    prid.removeChild(prid.childNodes[i+1]);
    		i--; 
    	}
    	}
	</script>
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
			<img src="img/logo.png" width="100">
			<h1>THDC Institute of Hydropower Engineering and Technology</h1>
		</div>
		<nav>
			<h1>Provisional Marksheet Portal</h1>
		</nav>
	</header>
	<div  class="bx xyz">
				<div class="grd">
	      	<div>
	      		<table>
				   	<tbody>		<tr> <th>Name:</th>
				      				<td><?php echo $_SESSION['name'];?></td>
				      				<th>Father's Name:</th>
				      				<td><?php echo $_SESSION['fname'];?></td>
				      			</tr>
				      					<tr><th>Roll No.:</th>
				      						<td><?php echo $_SESSION['roll'];?></td>
						      				<th>Branch:</th>
						      				<td><?php echo $_SESSION['branch'];?></td>
									</tr>
				      			</tbody>
				      		</table>    
	      </div>
	  </div> 
</div>
<div class="xyz" style="padding-bottom:100px; ">
	<div class="lg">
		<div  class="bx">
			<h1 style="margin-top:-30px; ">Enter Details for Provisional</h1>
			<div class="grd">
	      	<div>
	      		<form action="./sub.php" method='POST'>
			<table  id='tbl'>
				   	<tbody>		<tr> <th rowspan="2">S. No.</th>
				      				<th rowspan="2">Subject</th>
				      				<th colspan="2">Maximum Marks</th>
				      				<th rowspan="2">Month & Year</th>
				      				<th rowspan="2">Exam</th></tr>
				      					<tr>
				      				<th>Sem</th>
				      				<th>Ses</th>
									</tr>
				      				<tr id='tr1'>
				      					<td>1</td>
				      					<td><input type="text" style='width:100%;' placeholder="Enter Subject code & name" name='sub1'  required/></td>
				      					<td>
				      						<!-- <input type="text" style='width:100%;' placeholder="e.g. 100 or 50" onchange="add('1')"  id='1im1'/> -->
											<input type="number" style='width:100%;' placeholder="e.g. 100 or 50" id='1im1' name='mme1'  required/>
				      					</td>
				      					<td><input type="number" style='width:100%;' placeholder="e.g. 50 or 25"  id='1im2'  name='mmi1'  required/></td>
				      					<td><input type="text" style='width:100%;' placeholder="e.g. Oct 2015" id='1im2'  name='my1'  required/></td>
				      					<td><select id="drp1" style='width:100%;'  name='extyp1' required>
				      						<option value="" disabled selected>Exam type</option>
				      						<option value="REGULAR BACK">Regular Back</option>
				      						<option value="INTERNAL BACK">Internal Back</option>
				      						<option value="SPECIAL BACK">Special Back</option>
				      					</select></td>
				      				</tr> 
				      			</tbody>
				      		</table>
				      		<a href="javascript:void(0)" onclick='addsub()' class="btn" style="width:100%;height:100%;">Add More Subject</a>	
				      		<a href="javascript:void(0)" onclick='delsub()' class="btn" style="width:100%;height:100%;">Delete Last Subject</a>	
				      		<input type="submit" class='btn' value="Apply for Provisional" />	
				      		</form>    
	      </div>
	  </div> 	
	</div>
</div>
</div>

	<?php
	include 'footer.php';
	?>
</body>
</html>