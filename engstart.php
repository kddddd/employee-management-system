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
<img src="1.gif" style="width:250;height:150;">
</img>

<img src="logo.gif" style="width:735;height:150;">
</img>
</div>

<div>
<img src="onl.jpg" style="width:250;height:490;">
</img>
</div>

<div style="background-image:url(lightblue.jpg);width:735px;height:490px;margin-left:15.7em;margin-top:-31.7em;">
<p style="color:red;font-size:16;">
<?php 
session_start();
echo "Welcome:".$_SESSION["name"];
?>
</p>

<br>
<div style="color:red;width:450px;height:120px;margin:auto;font-size:27;text-align:center;"><h1><i>ENGLISH EXAM</i></h1>
</div>
<div style="background-color:lightgrey;width:400px;height:200px;margin:auto;border-radius:20px;"><br>
<br>
<a style="margin-left:3em;color:black;font-size:24;">To start click on start button</a>
<br><br><br>
<input type="submit" name="submit" value="Start" style="font-size:2.0em;color:steelblue;margin-left:5em;">
</input>

</form>
</div>



</body>
</html>
<?php
$obtain=$_SESSION['ob'];
if(isset($_POST['submit']))
   {
     $_SESSION['ob']=$obtain;
	//echo "total marks=".$_SESSION['ob'];
	header("location:english.php");
   }	
	   
?>