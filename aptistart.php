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
<form method="post">
<div>
<img src="onlineexam.png" style="width:100%;height:150;">
</img>
</div>

<div>
<img src="onl.jpg" style="width:272;height:487;">
</img>
</div>

<div style="background-image:url(bgimage.jpg);width:735px;height:487px;margin-left:17em;margin-top:-31.6em;">
<p style="color:floralwhite;font-size:18;">
<?php 
session_start();
echo "Welcome:".$_SESSION["name"];
?>
</p>

<br>
<div style="color:red;width:450px;height:120px;margin:auto;font-size:27;text-align:center;"><h1><i>APTITUDE EXAM</i></h1>
</div>

<div style="background-color:lightgrey;width:400px;height:200px;margin:auto;border-radius:20px;"><br>
<br>
<a  style="margin-left:3em;color:black;font-size:24;">To start click on start button</a>
<br><br><br>
<input type="submit" name="submit" value="Start"  style="font-size:2.0em;color:steelblue;margin-left:5em;">
</input>
</div>
</form>
</body>
</html>
<?php
$obtain=$_SESSION['ob'];
if(isset($_POST['submit']))
   {
     $_SESSION['ob']=$obtain;
	//echo "total marks=".$_SESSION['ob'];
	header("location:aptitude.php");
   }	
	   
?>