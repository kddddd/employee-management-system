<html>
<body>
<div style="background-color:wheat;width:100%;height:125px;font-size:40;"><br>
LIST OF ONLINE EXAM***
</div>

<div style="background-image:url(back6.jpg);width:100%;height:auto;"><br>
<div>
<a href="login.php" style="text-decoration:none;margin-left:55em;">**Log out**</a>
<p style="color:blue;font-size:18;"> 
<?php 
session_start();

echo "Welcome:". $_SESSION["name"];
?>
</p>
</div>
<table =width="400" height="300" align="center">
<tr>
<td><a href="start.php" style="text-decoration:none;color:blue;">Computer Science</a></td>
<td>25 marks</td>
</tr>
<tr>
<td style="color:red;">General Knowledge</td>
<td>25 marks</td>
</tr>
<tr>
<td style="color:blue;">English</td>
<td>25 marks</td>
</tr>
<tr>
<td style="color:red;">Reasoning</td>
<td>25 marks</td>
</tr>
<tr>
<td style="color:blue;">Aptitude</td>
<td>25 marks</td>
</tr>
</table>
</div>

<div style="background-color:wheat;width:100%;height:125px;">
<div style="font-size:20;">
<b>**KEY POINTS|||</b>
<p style="margin-left:8em;margin-right:8em;font-size:18;">
Welcome to <b>ONLINE EXAMINATION.</b> The students who are starting their exam must be carefull that exam will happen on the pattern it had described upper.
Once the exam started the student has to move through all subjects accordingly. The result will be shown as soon as the exam finishes.
</p>
<div style="margin-left:55em;margin-top:-0.5em;">
<b>***THANK YOU***</b>
</div>


</div>


</body>
</html>
