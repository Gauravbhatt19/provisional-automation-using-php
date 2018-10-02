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
</style>
	<script>
		function bdf()
		{
			document.getElementById('bdf').classList.toggle('shw');
		}
	</script>
</head>
<body>
	<?php
	include 'header.php';
	?>
	<div  style="background-color:rgba(0,0,0,0.7); position:fixed; width:100%; height:100%; top:0;left:0;z-index:100;" hidden id='bdf' >
<div class="lg bfg" style="z-index:101;transition:0.5s;">
		<form action="./_apply.php" class="bx" onsubmit="validate()" method="post">
			<h1>Login <span style='float:right;color:red;user-select:none; cursor:pointer;' onclick="bdf()">X</span></h1>
			<div>
				<label for="lid">Id</label></div>
				<div class="bo"><input type="text" id='lid' placeholder="Login ID"  name='lid'  required>
			</div>
			<div>
				<label for="pass">Password</label></div>
				<div class="bo"><input type="Password" id='pass' placeholder="Login Password"  name='pass' required>
			</div>
			<div class="bo">
				<input type="submit" value="Login" >
			</div>
		</form>
	</div>
</div>
	<div class="xyz">		
<div class="bd">
		<div class="bx" id="log">
	      	<h1>Instructions</h1>
	      	<ol>
	      	<li><h3> Kindly fill all your details in the form given in portal. (Applying)</h3></li>
<li><h3>  Once the details are filled , check the mail id which you provided. (Waiting Time)</h3></li>
<li><h3>  You shall receive a copy of the provisional marksheet on your mail id.(Receiving Soft Copy)</h3></li>
<li><h3> Take a Print out of this and then get it signed from the Dy.Controller of Examination Division.(Validating)</h3></li>
	      	</ol>
	      	</div>
	      </div>
<div class="lg">
		<form action="./_apply.php" class="bx" onsubmit="validate()" method="post">
			<div>
				<label for="stud-name">Student Name</label></div>
				<div class="bo"><input type="text" id='stud-name' placeholder="Student Name"  name='sname'  required>
			</div>
			<div>
				<label for="father-name">Father's Name</label></div>
				<div class="bo"><input type="text" id='father-name' placeholder="Father's Name"  name='fname' required>
			</div>
			<div>
				<label for="roll-no">Roll No.</label></div>
				<div class="bo"><input type="number" id='roll-no' placeholder="Roll No."  name='rno' required>
			</div>
					<div>
				<label for="brnch">Branch</label>			</div>
				<div class="bo"><select id='brnch' name='brnch'>
					<option selected value='1'>CSE</option>
					<option value="2">ECE</option>
					<option value="2">CE</option>
					<option value="2">ME</option>
					<option value="2">EE</option>	
				</select></div> 

			<div>
				<label for="mail">Email</label></div>
				<div class="bo"><input type="email" id='mail' placeholder="Where Provisional to be receive"  name='mail'  required>
			</div>
			<div class="bo">
				<input type="submit" value="Initiate for Provisional" >
			</div>
		</form>
	</div>
</div>
		<?php
	include 'footer.php';
	?>
</body>
</html>