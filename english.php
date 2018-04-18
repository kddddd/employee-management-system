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
<div style="background-color:gainsboro;width:100%;height:120px;font-size:35;"><br>
ENGLISH EXAMINATION^^^
</div>
<div style="background-image:url(gry.jpg);width:100%;height:420px;margin-top:-1em;background-size:100%;">
<p style="color:red;font-size:16;">
<?php 
session_start();
echo "Welcome:".$_SESSION["name"];
?>
</p>

<form action="" method="POST">

<div style="margin-left:50em;font-size:18;"><b>(6*5=30)</b>
</div>


<table border='1' width="700" height="50" style="margin-top:-1.5em;">
<tr>
<td>Q-1. One who abandons his religious faith?</td>
<td><input type="radio" name="f1" value="apostate">Apostate</input></td>
<td><input type="radio" name="f1" value="prostate">Prostate</input></td>
<td><input type="radio" name="f1" value="profane">Profane</input></td>
<td><input type="radio" name="f1" value="agnostic">Agnostic</input></td>
</tr>
</table>

<br>

<table border='1' width="700" height="50">
<tr>
<td>Q-2. A hater of knowledge and learning?</td>
<td><input type="radio" name="f2" value="bibliophile">Bibliophile</input></td>
<td><input type="radio" name="f2" value="philologist">Philologist</input></td>
<td><input type="radio" name="f2" value="misogynist">Misogynist</input></td>
<td><input type="radio" name="f2" value="misologist">Misologist</input></td>
</tr>
</table>

<br>

<table border='1' width="700" height="50">
<tr>
<td>Q-3. Commencement of words with the same letter?</td>
<td><input type="radio" name="f3" value="pun">Pun</input></td>
<td><input type="radio" name="f3" value="alliteration">Alliteration</input></td>
<td><input type="radio" name="f3" value="transferred epithet">Transferred epithet</input></td>
<td><input type="radio" name="f3" value="oxymoron">Oxymoron</input></td>
</tr>
</table>

<br>

<table border='1' width="700" height="50">
<tr>
<td>Q-4. Person who does not beleive in the existence of God?</td>
<td><input type="radio" name="f4" value="theist">Theist</input></td>
<td><input type="radio" name="f4" value="heretic">Heretic</input></td>
<td><input type="radio" name="f4" value="atheist">Atheist</input></td>
<td><input type="radio" name="f4" value="fanatic">Fanatic</input></td>
</tr>
</table>

<br>

<table border='1' width="700" height="50">
<tr>
<td>Q-5. One who believes in the power of fate?</td>
<td><input type="radio" name="f5" value="pun">Pun</input></td>
<td><input type="radio" name="f5" value="alliteration">Alliteration</input></td>
<td><input type="radio" name="f5" value="transferred epithet">Transferred epithet</input></td>
<td><input type="radio" name="f5" value="fatalist">fatalist</input></td>
</tr>
</table>

<br>

<table border='1' width="700" height="50">
<tr>
<td>Q-6. A disease which spreads by contact?</td>
<td><input type="radio" name="f6" value="incurable">Incurable</input></td>
<td><input type="radio" name="f6" value="infectious">Infectious</input></td>
<td><input type="radio" name="f6" value="contagious">Contagious</input></td>
<td><input type="radio" name="f6" value="fatal">Fatal</input></td>
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

<div style="background-color:gainsboro;width:100%;height:auto;font-size:20;">
<b>**KEY POINTS|||</b>
<p style="margin-left:8em;margin-right:4em;margin-top:0.5em;font-size:18;">
Welcome to <b>ENGLISH EXAMINATION.</b> Every question is <b>compulsory</b> to attempt. No <b>negative marking</b> is there. Remember, once the data is been 
<b>submited</b> can't be change again and the <b>result</b> will be shown as all the sections get completed by the user.</p>
<?php
   $obtain=$_SESSION['ob'];
   if(isset($_POST['submit']))
   {
	   
	   $que1=&$_POST['f1'];
	   $que2=&$_POST['f2'];
	   $que3=&$_POST['f3'];
	   $que4=&$_POST['f4'];
	   $que5=&$_POST['f5'];
	   $que6=&$_POST['f6'];
	   if($que1=="apostate")
	   {
		  $obtain=$obtain+5;
		 
	   }
	   if($que2=="misologist")
	   {
		   $obtain=$obtain+5;
	   }
	  if($que3=="alliteration")
	  {
		  $obtain=$obtain+5;
	  }
	  if($que4=="atheist")
	  {
		  $obtain=$obtain+5;
	  }
	  if($que5=="fatalist")
	  {
		  $obtain=$obtain+5;
	  }
	  if($que6=="contagious")
	  {
		  $obtain=$obtain+5;
	  }
	$_SESSION['ob']=$obtain;
	//echo "total marks=".$_SESSION['ob'];
	header("location:reastart.php");
	
   }
?>


</div>




</body>
</html>