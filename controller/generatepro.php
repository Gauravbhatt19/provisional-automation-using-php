<?php
session_start();
$id=$_SESSION['id'];
$st=$_SESSION['logged_in']; 
if(empty($id) or empty($st))
{
	header('location: ../index.php');
}
?><html>
<head>
	<meta charset="UTF-8">
	<title>Provisional | THDCIHET</title>
	<script type="text/javascript">
		function add(xyz){
			var inpt1=document.getElementById('in1'+xyz);
			var inpt2=document.getElementById('in2'+xyz);
			var updt=document.getElementById('out'+xyz);
			var updt1=document.getElementById('out1'+xyz);
			var x=inpt1.value;
			var y=inpt2.value;
			updt.value=eval('x-(-y)');
			if((updt.value>=60) && (x>=30)) {
				updt1.value='PASS';
			}
			else
			{
				updt1.value="FAIL";
			}

		}
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
			<img src="../img/logo.png" width="100">
			<h1>THDC Institute of Hydropower Engineering and Technology</h1>
		</div>
		<nav>
			<h1>Provisional Marksheet Portal</h1>
		</nav>
	</header>
	      		<form action="./print_gen.php" method='POST'>
	<div  class="bx xyz">
				<div class="grd">
	      	<div>
	      		<table>
				   	<tbody>		<tr> <th>Name:</th>
				   		<?php $conn=mysqli_connect('localhost','root','','spidersd_provisional');
				   				$id=$_GET['ref'];
								$qry="SELECT * FROM records WHERE slno='{$id}'";
								$result=mysqli_query($conn,$qry);
								$row=mysqli_fetch_assoc($result);
									$sl=$row['slno'];
									$nm=$row['name'];
									$roll=$row['roll'];
									$fnm=$row['fname'];
									$brnch=$row['branch'];
									$st=$row['status'];
									$mail=$row['email'];?>
									<?php echo '<input type="number" name="iden" hidden value="'.$sl.'""><input type="text" name="mail" hidden value="'.$mail.'"">'; ?>
				      				<td><?php echo '<input style="padding:10px;width:100%; font-size:1.1rem; text-align:center;" type="text" name="nm" value="'.$nm.'">';?></td>
				      				<th>Father's Name:</th>
				      				<td><?php echo '<input style="padding:10px;width:100%; font-size:1.1rem; text-align:center;" type="text" name="fnm" value="'.$fnm.'">';?></td>
				      			</tr>
				      					<tr><th>Roll No.:</th>
				      						<td><?php echo '<input style="padding:10px;width:100%; font-size:1.1rem; text-align:center;" name="roll" type="text" value="'.$roll.'">';?></td>
						      				<th>Branch:</th>
						      				<td><?php echo '<input style="padding:10px;width:100%; font-size:1.1rem; text-align:center;" name="brnch" type="text" value="'.$brnch.'">';?></td>
									</tr>
				      			</tbody>
				      		</table>    
	      </div>
	  </div> 
</div>
<div class="xyz" style="padding-bottom:100px; ">
	<div class="lg">
		<div  class="bx">
			<h1 style="margin-top:-30px; ">Details for Provisional</h1>
			<div class="grd">
	      	<div>
			<table  id='tbl'>
				   	<tbody style="width:100%;">		<tr> <th rowspan="2">S. No.</th>
				      				<th rowspan="2">Subject</th>
				      				<th colspan="3">Maximum Marks</th>
				      				<th colspan="3">Marks Obtained</th>
				      				<th rowspan="2">Result</th>
				      				<th rowspan="2">Month & Year</th>
				      				<th rowspan="2">Exam</th></tr>
				      					<tr>
				      				<th>Sem</th>
				      				<th>Ses</th>
				      				<th>Total</th>
				      				<th>Sem</th>
				      				<th>Ses</th>
				      				<th>Total</th>
									</tr>
									<?php
									$qry="SELECT * FROM marks WHERE ref='{$id}'";
									$result=mysqli_query($conn,$qry);
									$i=1;
									while($row=mysqli_fetch_assoc($result)){
									$sub=$row['subject'];
									$mmsem=$row['mmsem'];
									$mmses=$row['mmses'];
									$mmtotal=$mmsem+$mmses;
									$mnth_yr=$row['mnth_yr'];
									$exam_type=$row['exam_type'];
									echo '<tr><td>'.$i.'</td><td style="width:80%;"><input type="text" name="sub'.$i.'" style="padding:5px; font-size:1.01rem; text-align:center; width:100%;" value="'.$sub.'"></td><td><input type="number" style="padding:5px; width:100%; font-size:1.01rem; text-align:center;" name="mmsem'.$i.'" value="'.$mmsem.'"></td><td><input type="number" style="padding:5px;width:100%; font-size:1.01rem;  text-align:center;" value="'.$mmses.'" name="mmses'.$i.'"></td><td><input type="number" style="padding:5px;width:100%; font-size:1.01rem; text-align:center;" name="mmtotal'.$i.'" value="'.$mmtotal.'"></td><td><input id="in1'.$i.'"  onchange="add('.$i.')" type="number" name="obtmrksem'.$i.'" style="padding:5px;width:100%; font-size:1.01rem; text-align:center;" value="00"></td><td><input type="number" name="obtmrkses'.$i.'" style="padding:5px;width:100%; font-size:1.01rem; text-align:center;" value="00" onchange="add('.$i.')" id="in2'.$i.'" ></td><td><input id="out'.$i.'" type="number" style="padding:5px;width:100%; font-size:1.01rem; text-align:center;" value="00" name="obtmrktotal'.$i.'" ></td><td><input type="text" id="out1'.$i.'"  name="result'.$i.'" style="padding:5px;width:100%; font-size:1.01rem; text-align:center;" value="FAIL"></td><td style="width:20%;"><input type="text" style="padding:5px;width:100%; font-size:1.01rem; text-align:center;" name="mnth_yr'.$i.'" value="'.$mnth_yr.'"></td><td><input type="text" style="padding:5px;  font-size:1.01rem; text-align:center;" name="exam_type'.$i.'" value="'.$exam_type.'"></td></tr>';
									$i++;
								}
									?>
				      			</tbody>
				      		</table>
				      		<?php $lnk='del.php?ref='.$_GET['ref']; ?>
				      		<?php echo '<a href="'.$lnk.'"  class="btn" style="width:100%;height:100%;">Delete Record</a>'; ?> 	
				      		<input type="submit" class='btn' value="Generate Provisional" />  
	      </div>
	  </div> 	
	</div>
</div>
</div>
</form>  

	<?php
	include '..\footer.php';
	?>
</body>
</html>