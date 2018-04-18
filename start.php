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

<div style="background-image:url(img.jpg);width:735px;height:490px;margin-left:15.6em;margin-top:-32em;">

<p style="color:red;font-size:19;">
<?php 
session_start();

echo "Welcome:".$_SESSION["name"];
?>

</p>
<div style="color:brown;width:250px;height:50px;margin:auto;margin-top:1em;margin-bottom:1em;font-size:30;"><i><b>Computer -&nbspScience</b></i>

</div>

<div style="background-color:white; width:400px;height:250px;margin:auto;margin-top:1em;margin-bottom:1em;border-radius:60px;">
<br><br>
<a href="compscience.php" style="margin-left:3em;color:coral;font-size:24;">To start click on start button</a>
<br><br><br><br>
<input type="submit" name="submit" value="Start" onClick="location.href='compscience.php'" style="margin-left:5em;font-size:2em;color:blue;">
</input>
</body>
</html>
