<?php
session_start();
$id=$_SESSION['id'];
$st=$_SESSION['logged_in']; 
if(empty($id) or empty($st))
{
  header('location: ../index.php');
}
$conn=mysqli_connect('localhost','root','','spidersd_provisional');
$id=mysqli_escape_string($conn,$_POST['iden']);
$mail=mysqli_escape_string($conn,$_POST['mail']);
$name=mysqli_escape_string($conn,$_POST['nm']);
$fname=mysqli_escape_string($conn,$_POST['fnm']);
$roll=mysqli_escape_string($conn,$_POST['roll']);
$brnch=mysqli_escape_string($conn,$_POST['brnch']);
$qry="UPDATE records SET status='1',tm=now() WHERE slno='$id'";
$result=mysqli_query($conn,$qry);
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style type="text/css">table{
  width:96%;
  margin:2%;  
  border:1px solid #000;
  }
th,td
{border:1px solid #000;
  margin:-8px;
}
</style>
</head>
<body style="font-family: Calibri">
  <header style="border-bottom:4px solid #000; text-align:center; display:grid;grid-template-columns:4fr 40fr; line-height:0.5rem;  ">
    <img height=120 style="padding-left:40px; "src="../img/logo.png">
    <div style="margin-left:-130px;"><h2>टी० एच ० डी० सी० हाइड्रोपावर अभियांत्रिकी एवं प्रौद्योगिकी संस्थान, टिहरी</h2><h2>THDC Institute of Hydropower Engineering and Technology, Tehri</h2>
    <h3>Bhagirathipuram, Tehri Garhwal, 249124 Uttarakhand,India</h3>
    <p >Website: http://www.thdcihet.ac.in</p>
  </div></header>
  <p style="font-weight:bolder; float :right; padding-right:50px;">Date:03/10/2018</p>
  <table cellspacing="0" cellpadding="5">
  <tbody style="text-align:left;">
    <tr><th>Student Name :</th>
    <td><?php 
     echo $name;
    ?></td> 
    <th>Father&#39;s Name : </th>
    <td>Mr. <?php 
    echo $fname;
    ?></td></tr><tr>
    <th>Roll No. :</th>
    <td><?php 
    echo $roll;
    ?></td>
    <th>Branch :</th>
    <td><?php 
    echo $brnch;
    ?></td>
  </tr>


  </tbody>
</table>
<h3 style="text-align:center; text-decoration:underline;">Back Paper Tabulation Mark Sheet (Provisional)</h3>
<table cellspacing="0" cellpadding="5">
  <tbody style="text-align:center;">
    <tr><th rowspan="2">S. No.</th>
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
$i=1;
$p='sub'.$i;
while (!empty($_POST[$p])) {
  $pr='sub'.$i;
$sub=mysqli_escape_string($conn,$_POST[$pr]);
  $pr2='mmsem'.$i;
$mmsem=mysqli_escape_string($conn,$_POST[$pr2]);
  $pr3='mmses'.$i;
$mmses=mysqli_escape_string($conn,$_POST[$pr3]);
  $pr4='mmtotal'.$i;
$mmtotal=mysqli_escape_string($conn,$_POST[$pr4]);
  $pr5='obtmrksem'.$i;
$obtsem=mysqli_escape_string($conn,$_POST[$pr5]);
  $pr6='obtmrkses'.$i;
$obtses=mysqli_escape_string($conn,$_POST[$pr6]);
  $pr7='obtmrktotal'.$i;
$obttotal=mysqli_escape_string($conn,$_POST[$pr7]);
  $pr8='result'.$i;
$result=mysqli_escape_string($conn,$_POST[$pr8]);
  $pr9='mnth_yr'.$i;
$mnth_yr=mysqli_escape_string($conn,$_POST[$pr9]);
  $pr10='exam_type'.$i;
$exam_type=mysqli_escape_string($conn,$_POST[$pr10]);
echo '<tr><td>'.$i.'</td>
    <td>'.$sub.'</td>
    <td>'.$mmsem.'</td>
    <td>'.$mmses.'</td>
    <td>'.$mmtotal.'</td>
    <td>'.$obtsem.'</td>
    <td>'.$obtses.'</td>
    <td>'.$obttotal.'</td>
    <td>'.$result.'</td>
    <td>'.$mnth_yr.'</td>
    <td>'.$exam_type.'</td></tr>';
$i++;
$p='sub'.$i;
}
?>

  </tbody>
</table>
<div style="margin-top:50px;">
<p style="font-weight:bolder; float:left; padding-left:80px; ">Compiled by</p>
<p style="font-weight:bolder; float:right; padding-right:80px; ">Dy. Controller of Examination, THDC-IHET</p>
<p style=" float:left; margin:0px 80px; ">Note: While severe caution has been taken in compiling the data, even though if any case of error in statement of marks has been found, the marks entered in the tabulation chart of university / Institute shall be treated as correct and final.</p>
</div>
<a style='position:fixed; bottom:0px; left:45%; ' href="javascript:void(0)" onclick="window.print()">Print and download</a>
</body>
</html>