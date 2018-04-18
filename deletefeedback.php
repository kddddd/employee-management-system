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

<div style="background-color:paleturquoise;width:100%;height:120px;font-size:46;"><br>
<marquee behavior="alternate" style="margin-left:5em;margin-right:5em;">***DELETE USER***
</marquee>

</div>

<div style="background-image:url('del.jpg');width:100%;height:370px;background-size:100%;">
<form action="" method="POST">

<div>
<a href="adminarea.php" style="color:black;margin-left:40em;text-decoration:none;font-size:22;">**Back**</a>
</div>


<br><br><br><br>
<table width="200" align="center">
<tr>
<td><input type="email" name="email" placeholder="Enter Email Id" style="background-image:url('lightblue.jpg');width:200;height:40px;text-align:center;border-radius:20px;"></input></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="DELETE" style="color:red;margin-left:2em;font-size:1.5em;background-image:url('lightblue.jpg');border-radius:20px;"></input></td>
</tr>


<?php 
mysql_connect('localhost','root','');
mysql_select_db('regis')or die('plz check database');
if(isset($_POST['submit']))
{
$email=$_POST['email'];	
$query=mysql_query("delete from feedback where Email='$email'");
if($query)
{
	echo "<script>alert('delete record successfully')</script>";
}
}
?>
</table>


</form>
</div>

<div style="background-color:paleturquoise;width:100%;height:auto;">
<marquee direction="up" scrollamount="3" onmouseover="stop()" onmouseout="start()" style="margin-left:3em;margin-right:3em;font-size:22;"><b>Hello Admin!!!<br>
##<i> Welcome to this page of delete feedback.</i><br>
###<i> In this you have the authority to delete any user's feedback who had given the online exam.</i><br>
####<i> This process is to be done when the user has not written appropriate language.</i><br>
#####<i> For deletion of any user from the Server directory first take the permission of higher authorities.</i></b>
</marquee>
</div>


</body>
</html>