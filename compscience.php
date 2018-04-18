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

<div style="background-color:deepskyblue;width:100%;height:120px;font-size:34;"><br>
COMPUTER SCIENCE EXAMINATION<b>^^^</b>
</div>

<div style="background-image:url(lightblue.jpg);width:100%;height:420px;margin-top:-1em;">

<p style="color:red;font-size:16;">
<?php 
session_start();

echo "Welcome:".$_SESSION["name"];
?>
</p>

<form  method="POST">

<div style="margin-left:50em;font-size:18;"><br>
<b>(6*5=30)</b>
</div>

<table border='1' width="600" style="margin-top:-2em;">
<tr>
<b>
<td>Q-1.How many color dots make up one color pixel on a screen?</td></b>
<td><input type="radio" name="r7" value="256">256</input></td>
<td><input type="radio" name="r7" value="16">16</input></td>
<td><input type="radio" name="r7" value="3">3</input></td>
<td><input type="radio" name="r7" value="1">1</input></td
</tr>
</table>
<br>
<table border='1' width="650">
<tr>
<td>Q-2.Data is stored on diskettes in what form?</td>
<td><input type="radio" name="r8" value="ink">ink</input></td>
<td><input type="radio" name="r8" value="laser bubbles">laser bubbles</input></td>
<td><input type="radio" name="r8" value="magnetism">magnetism</input></td>
<td><input type="radio" name="r8" value="circuits">circuits</input></td>
</tr> 
</table>

<br>

<table border="1" width="750">
<tr>
<td>Q-3.Which of the following languages is more suited to a structured program?</td>
<td><input type="radio" name="r9" value="PL/1">PL/1</input></td>
<td><input type="radio" name="r9" value="fortan">FORTRAN</input></td>
<td><input type="radio" name="r9" value="basic">BASIC</input></td>
<td><input type="radio" name="r9" value="pascal">PASCAL</input></td>
<td><input type="radio" name="r9" value="none of the above">None of the above</input></td>
</tr>
</table>

<br>

<table border='1' width="850">
<tr>
<td>Q-4.A computer assisted method for the recording and analyzing of existing or hypothetical systems is?</td>
<td><input type="radio" name="r10" value="data transmission">Data transmission</input></td>
<td><input type="radio" name="r10" value="data flow">Data flow</input></td>
<td><input type="radio" name="r10" value="data capture">Data capture</input></td>
<td><input type="radio" name="r10" value="data processing">Data processing</input></td>
<td><input type="radio" name="r10" value="none of the above">None of the above</input></td>
</tr>
</table>

<br>

<table border='1' width="600">
<tr>
<td>Q-5.The brain of any computer system is?</td>
<td><input type="radio" name="r11" value="alu">ALU</input></td>
<td><input type="radio" name="r11" value="memory">Memory</input></td>
<td><input type="radio" name="r11" value="cpu">CPU</input></td>
<td><input type="radio" name="r11" value="control unit">Control unit</input></td>
<td><input type="radio" name="r11" value="none of the above">None of the above</input></td>
</tr>
</table>

<br>

<table border='1' width="800">
<td>Q.6.What difference does the 5th generation computer have from other generation computers?</td>
<td><input type="radio" name="r12" value="technological advancement">Technological advancement</input></td>
<td><input type="radio" name="r12" value="scientific code">Scientific code</input></td>
<td><input type="radio" name="r12" value="object oriented programming">Object Oriented Programming</input></td>
<td><input type="radio" name="r12" value="all of the above">All of the above</input></td>
<td><input type="radio" name="r12" value="none of the above">None of the above</input></td>
</input>
</tr>
</table>

<table style="margin-left:57em;margin-top:-8em;">
<tr>
<td>
<input type="submit" name="submit" value="Submit" style="background-color:white;color:red;font-size:1.5em;border-radius:30px;"></input>
</td>
</tr>
</table>
<br><br>


</form>
</div>

<div style="background-color:deepskyblue;width:100%;height:auto;font-size:20;margin-top:-0.5em;">
<b>**KEY POINTS|||</b>
<p style="margin-left:8em;margin-right:8em;font-size:18;">
Welcome to <b>COMPUTER SCIENCE EXAMINATION.</b> Every question is <b>compulsory</b> to attempt. No <b>negative marking</b> is there. Remember, once the data is been 
<b>submited</b> can't be change again and the <b>result</b> will be shown as all the sections get completed by the user.<br></p>


<?php
   $obtain=0;
   if(isset($_POST['submit']))
   {
	   $que1=&$_POST['r7'];
	   $que2=&$_POST['r8'];
	   $que3=&$_POST['r9'];
	   $que4=&$_POST['r10'];
	   $que5=&$_POST['r11'];
	   $que6=&$_POST['r12'];
	   if($que1=="3")
	   {
		  $obtain=$obtain+5;
		 
	   }
	   if($que2=="magnetism")
	   {
		   $obtain=$obtain+5;
	   }
	  if($que3=="PL/1")
	  {
		  $obtain=$obtain+5;
	  }
	  if($que4=="data processing")
	  {
		  $obtain=$obtain+5;
	  }
	  if($que5=="cpu")
	  {
		  $obtain=$obtain+5;
	  }
	  if($que6=="technological advancement")
	  {
		  $obtain=$obtain+5;		  
	  }
	  $_SESSION['ob']=$obtain;
	  header("location:gkstart.php");
	  }
	  
	?>
</div>
</body>
</html>
