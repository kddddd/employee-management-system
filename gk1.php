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
<div style="background-color:moccasin;width:100%;height:120px;font-size:35;"><br>
GENERAL KNOWLEDGE EXAMINATION^^^
</div>

<div style="background-image:url(back6.jpg);width:100%;height:420px;margin-top:-1.2em;">
<p style="color:red;font-size:16;">
<?php 
session_start();
echo "Welcome:".$_SESSION["name"];
?>
</p>

<form action="" method="post">
<div style="margin-left:50em;font-size:18;">
<b>(6*5=30)</b>
</div>

<table border='1' width="700">
<tr>
<td>Q-1. A parallel port is most often used by?</td>
<td><input type="radio" name="r1" value="mouse">Mouse</input></td>
<td><input type="radio" name="r1" value="monitor">Monitor</input></td>
<td><input type="radio" name="r1" value="printer">Printer</input></td>
<td><input type="radio" name="r1" value="keyboard">Keyboard</input></td>
</tr>
</table>

<br>

<table border='1' width="900">
<tr>
<td>Q-2. Bluetooth technology allows?</td>
<td><input type="radio" name="r2" value="landline phone to mobile phone communication">Landline phone to mobile phone communication</input></td>
<td><input type="radio" name="r2" value="wireless communication between equipments">Wireless communication between equipments</input></td>
<td><input type="radio" name="r2" value="signal transmission on mobile phones only">Signal transmission on mobile phones only</input></td>
<td><input type="radio" name="r2" value="satellite television communication">Satellite television communication</input></td>
</tr>
</table>

<br>

<table border='1' width="700">
<tr>
<td>Q-3. Which of the following is an example of optical disk?</td>
<td><input type="radio" name="r3" value="memory disk">Memory disk</input></td>
<td><input type="radio" name="r3" value="magnetic disk">Magnetic disk</input></td>
<td><input type="radio" name="r3" value="hard disk">Hard disk</input></td>
<td><input type="radio" name="r3" value="digital versatile disk">Digital versatile disk</input></td>
</tr>
</table>

<br>

<table border='1' width="900">
<tr>
<td>Q-4. Which of the following is an example of storage devices?</td>
<td><input type="radio" name="r4" value="tapes">Tapes</input></td>
<td><input type="radio" name="r4" value="dvds">DVDs</input></td>
<td><input type="radio" name="r4" value="magentic disks">Magnetic Disks</input></td>
<td><input type="radio" name="r4" value="all of these">All of these</input></td>
</tr>
</table>

<br>

<table border='1' width="700">
<tr>
<td>Q-5. IC chips used in computer are made up of?</td>
<td><input type="radio" name="r5" value="silicon">Silicon</input></td>
<td><input type="radio" name="r5" value="chromium">Chromium</input></td>
<td><input type="radio" name="r5" value="lead">Lead</input></td>
<td><input type="radio" name="r5" value="silver">Silver</input></td>
</tr>
</table>

<br>

<table border='1' width="900">
<tr>
<td>Q-6. Which of the following is not an example of operating system?</td>
<td><input type="radio" name="r6" value="microsoft office">Microsoft office</input></td>
<td><input type="radio" name="r6" value="windows vista">Windows Vista</input></td>
<td><input type="radio" name="r6" value="unix">Unix</input></td>
<td><input type="radio" name="r6" value="ubuntu linux">Ubuntu Linux</input></td>
</tr>
</table>

<table style="margin-left:55em;margin-top:0.5em;">
<tr>
<td>
<input type="submit" name="submit" value="Submit" style="background-color:white;color:red;font-size:1.5em;border-radius:30px;"></input>
</td>
</tr>
</table>
<br><br>


</form>
</div>

<div style="background-color:moccasin;width:100%;height:auto;font-size:20;">
<b>**KEY POINTS|||</b>
<p style="margin-left:8em;margin-right:4em;margin-top:0.5em;font-size:18;">
Welcome to <b>COMPUTER SCIENCE EXAMINATION.</b> Every question is <b>compulsory</b> to attempt. No <b>negative marking</b> is there. Remember, once the data is been 
<b>submited</b> can't be change again and the <b>result</b> will be shown as all the sections get completed by the user.</p>
<?php
   $obtain=$_SESSION['ob'];
   if(isset($_POST['submit']))
   {
	   
	   $que1=&$_POST['r1'];
	   $que2=&$_POST['r2'];
	   $que3=&$_POST['r3'];
	   $que4=&$_POST['r4'];
	   $que5=&$_POST['r5'];
	   $que6=&$_POST['r6'];
	   if($que1=="mouse")
	   {
		  $obtain=$obtain+5;
		 
	   }
	   if($que2=="wireless communication between equipments")
	   {
		   $obtain=$obtain+5;
	   }
	  if($que3=="harddisk")
	  {
		  $obtain=$obtain+5;
	  }
	  if($que4=="dvds")
	  {
		  $obtain=$obtain+5;
	  }
	  if($que5=="chromium")
	  {
		  $obtain=$obtain+5;
	  }
	  if($que6=="microsoft office")
	  {
		  $obtain=$obtain+5;
	  }
	  $_SESSION['ob']=$obtain;
	//echo "total marks=".$_SESSION['ob'];
	header("location:engstart.php");
   }
?>
</div>

</body>
</html>
