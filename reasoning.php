<html>
<head>
<script>
 function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
  preventBack();
</script>
</head>

<body>
<div style="background-color:yellow;width:100%;height:120px;font-size:35;"><br>
REASONING EXAMINATION^^^
</div>


<div style="background-image:url(back13.jpg);width:100%;height:415px;margin-top:-1em;">
<p style="color:red;font-size:16;">
<?php 
session_start();
echo "Welcome:".$_SESSION["name"];
?>
</p>

<form action="" method="POST">

<div style="margin-left:50em;font-size:18;"><br>
<b>(6*5=30)</b>
</div>


<table border='1' width="700" height="65">
<tr>
<td>Q-1. BEH, DGJ, (?), EJO, GLQ, INS, ?</td>
<td><input type="radio" name="t1" value="flr">FLR</td>
<td><input type="radio" name="t1" value="fis">FIS</td>
<td><input type="radio" name="t1" value="fko">FKO</td>
<td><input type="radio" name="t1" value="fil">FIL</td>
</tr>
</table>

<br>

<table border='1' width="700">
<tr>
<td>Q-2. APZLT, CQYNR, ERXPP, GSWRN,----?</td>
<td><input type="radio" name="t2" value="kvijuj">KVIJUJ</td>
<td><input type="radio" name="t2" value="juuvk">JUUVK</td>
<td><input type="radio" name="t2" value="itvtl">ITVTL</td>
<td><input type="radio" name="t2" value="kuuvk">KUUVK</td>
</tr>
</table>

<br>

<table border='1' width="700">
<tr>
<td>Q-3. Light : Sun : : Heat : ?</td>
<td><input type="radio" name="t3" value="electricity">Electricity</td>
<td><input type="radio" name="t3" value="moon">Moon</td>
<td><input type="radio" name="t3" value="fire">Fire</td>
<td><input type="radio" name="t3" value="star">Star</td>
</tr>
</table>

<br>

<table border='1' width="700">
<tr>
<td>Q-4. Parrot : Cage : : Man : ?</td>
<td><input type="radio" name="t4" value="electricity">Home</td>
<td><input type="radio" name="t4" value="motorcar">Motorcar</td>
<td><input type="radio" name="t4" value="prison">Prison</td>
<td><input type="radio" name="t4" value="forest">Forest</td>
</tr>
</table>

<br>

<table border='1' width="700">
<tr>
<td>Q-5. If 3 x 6 = 18, 5 x 3 = 16, 8 x 2 = 20. Find the value of 4 x 6 = ?</td>
<td><input type="radio" name="t5" value="12">12</td>
<td><input type="radio" name="t5" value="13">13</td>
<td><input type="radio" name="t5" value="33">33</td>
<td><input type="radio" name="t5" value="20">20</td>
</tr>
</table>

<br>

<table border='1' width="700">
<tr>
<td>Q-6. 8, 20, 36, 56,--</td>
<td><input type="radio" name="t6" value="80">80</td>
<td><input type="radio" name="t6" value="100">100</td>
<td><input type="radio" name="t6" value="64">64</td>
<td><input type="radio" name="t6" value="84">84</td>
</tr>
</table>

<table style="margin-left:50em;margin-top:-8em;">
<tr>
<td>
<input type="submit" name="submit" value="Submit" style="background-color:white;color:red;font-size:1.5em;border-radius:30px;"></input>
</td>
</tr>
</table>
<br><br>


</form>
</div>

<div style="background-color:yellow;width:100%;height:auto;font-size:20;">
<b>**KEY POINTS|||</b>
<p style="margin-left:8em;margin-right:4em;margin-top:0.5em;font-size:18;">
Welcome to <b>REASONING EXAMINATION.</b> Every question is <b>compulsory</b> to attempt. No <b>negative marking</b> is there. Remember, once the data is been 
<b>submited</b> can't be change again and the <b>result</b> will be shown as all the sections get completed by the user.</p>
<?php
   $obtain=$_SESSION['ob'];
   if(isset($_POST['submit']))
   {
	   
	   $que1=&$_POST['t1'];
	   $que2=&$_POST['t2'];
	   $que3=&$_POST['t3'];
	   $que4=&$_POST['t4'];
	   $que5=&$_POST['t5'];
	   $que6=&$_POST['t6'];
	   if($que1=="fil")
	   {
		  $obtain=$obtain+5;
		 
	   }
	   if($que2=="itvtl")
	   {
		   $obtain=$obtain+5;
	   }
	  if($que3=="fire")
	  {
		  $obtain=$obtain+5;
	  }
	  if($que4=="prison")
	  {
		  $obtain=$obtain+5;
	  }
	  if($que5=="20")
	  {
		  $obtain=$obtain+5;
	  }
	  if($que6=="80")
	  {
		  $obtain=$obtain+5;
	  }
	  $_SESSION['ob']=$obtain;
	//echo "total marks=".$_SESSION['ob'];
	header("location:aptistart.php");
   }
?>

</div>
</body>
</html>
