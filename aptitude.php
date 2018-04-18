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
<div style="background-color:PaleTurquoise;width:100%;height:120px;font-size:35;"><br>
APTITUDE EXAMINATION^^^
</div>

<div style="background-image:url('back12.jpg');width:100%;height:420px;margin-top:-1.1em;">
<p style="color:red;font-size:16;">
<?php 
session_start();
echo "Welcome:".$_SESSION["name"];
?>
</p>
<form method="POST">

<div style="margin-left:50em;font-size:18;"><br>
<b>(6*5=30)</b>
</div>

<table border='1' width="650" height="35">
<tr>
<td>Q-1. The average of the first five multiples of 9 is:</td>
<td><input type="radio" name="a1" value="20">20</td>
<td><input type="radio" name="a1" value="27">27</td>
<td><input type="radio" name="a1" value="28">28</td>
<td><input type="radio" name="a1" value="30">30</td>
</tr>
</table>

<br>

<table border='1' width="650" height="35">
<tr>
<td>Q-2. Find the average of first 97 natural numbers?</td>
<td><input type="radio" name="a2" value="47">47</td>
<td><input type="radio" name="a2" value="37">37</td>
<td><input type="radio" name="a2" value="48">48</td>
<td><input type="radio" name="a2" value="49.5">49.5</td>
</tr>
</table>

<br>

<table border='1' width="650" height="35">
<tr>
<td>Q-3. 1.14 expressed as a per cent of 1.9 is?</td>
<td><input type="radio" name="a3" value="6percent">6percent</td>
<td><input type="radio" name="a3" value="10percent">10percent</td>
<td><input type="radio" name="a3" value="60percent">60percent</td>
<td><input type="radio" name="a3" value="90percent">90percent</td>
</tr>
</table>

<br>

<table border='1' width="650" height="35">
<tr>
<td>Q-4. Half percent, written as a decimal, is:</td>
<td><input type="radio" name="a4" value="0.2">0.2</td>
<td><input type="radio" name="a4" value="0.02">0.02</td>
<td><input type="radio" name="a4" value="0.005">0.005</td>
<td><input type="radio" name="a4" value="0.05">0.05</td>
</tr>
</table>

<br>

<table border='1' width="650" height="35">
<tr>
<td>Q-5. If a:b:c = 3:4:7, then the ratio (a+b+c):c is equal to:</td>
<td><input type="radio" name="a5" value="2:1">2:1</td>
<td><input type="radio" name="a5" value="14:3">14:3</td>
<td><input type="radio" name="a5" value="7:2">7:2</td>
<td><input type="radio" name="a5" value="1:2">1:2</td>
</tr>
</table>

<br>

<table border='1' width="650" height="35">
<tr>
<td>Q-6. If 2/3 of A=75% of B=0.6 of C, then A:B:C is?</td>
<td><input type="radio" name="a6" value="2:3:3">2:3:3</td>
<td><input type="radio" name="a6" value="3:4:5">3:4:5</td>
<td><input type="radio" name="a6" value="4:5:6">4:5:6</td>
<td><input type="radio" name="a6" value="9:8:10">9:8:10</td>
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

<div style="background-color:skyblue;width:100%;height:auto;font-size:20;">
<b>**KEY POINTS|||</b>
<p style="margin-left:8em;margin-right:4em;margin-top:0.50em;font-size:18;">
Welcome to <b>APTITUDE EXAMINATION.</b> Every question is <b>compulsory</b> to attempt. No <b>negative marking</b> is there. Remember, once the data is been 
<b>submited</b> can't be change again and the <b>result</b> will be shown as all the sections get completed by the user.</p>

<?php
   $obtain=$_SESSION['ob'];
   if(isset($_POST['submit']))
   {
	   
	   $que1=&$_POST['a1'];
	   $que2=&$_POST['a2'];
	   $que3=&$_POST['a3'];
	   $que4=&$_POST['a4'];
	   $que5=&$_POST['a5'];
	   $que6=&$_POST['a6'];
	   if($que1=="27")
	   {
		  $obtain=$obtain+5;
		 
	   }
	   if($que2=="49.5")
	   {
		   $obtain=$obtain+5;
	   }
	  if($que3=="60percent")
	  {
		  $obtain=$obtain+5;
	  }
	  if($que4=="0.005")
	  {
		  $obtain=$obtain+5;
	  }
	  if($que5=="2:1")
	  {
		  $obtain=$obtain+5;
	  }
	  if($que6=="9:8:10")
	  {
		  $obtain=$obtain+5;
	  }
	 if($obtain>=70)
	 {
		 $result="pass";
	 }
	 else
	 {
		 $result="fails";
	 }
     $tm=150;
	 $name=$_SESSION["name"];
	 $pass=$_SESSION["pass"];
	 $con=mysql_connect("localhost","root","");
     mysql_select_db('regis');
	    $us=$name;
	    $tm=150;
		$ob1=$obtain;
	    $rs=$result;
		$ins=mysql_query("insert into result(Username,Totalmarks,Obtainedmarks,Result,Password)values('$us',$tm,$ob1,'$rs','$pass')");	 
		echo $ins;
if($ins)
  {
   echo"<script> alert('submit succesfully');</script>";
   header("location:result.php");
  }
 else
 {
	 echo $ins;
  echo"<script> alert('not submit succesfully');</script>";
	 
   }
   }
?>
</div>
</body>
</html>