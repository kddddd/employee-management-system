<html>
<body>

<div style="background-color:yellowgreen;width:100%;height:120px;font-size:46;"><br>
<marquee behavior="alternate" style="margin-left:3em;margin-right:3em;">**DELETE RESULT OF USER**
</marquee>
</div>

<div style="background-image:url('back8.jpg');width:100%;height:410px;">
<form action="" method="POST">

<div>
<a href="adminarea.php" style="color:black;margin-left:40em;text-decoration:none;font-size:22;">**Back**</a>
</div>


<br><br><br><br>
<table width="200" align="center">
<tr>
<td><input type="text" name="username" placeholder="Enter User Name" style="background-image:url('back8.jpg');width:200;height:40px;text-align:center;border-radius:20px;"></input></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="DELETE" style="color:red;margin-left:2em;font-size:1.5em;background-image:url('back8.jpg');border-radius:20px;"></input></td>
</tr>


<?php 
mysql_connect('localhost','root','');
mysql_select_db('regis')or die('plz check database');
if(isset($_POST['submit']))
{
$un=$_POST['username'];	
$query=mysql_query("delete from regis_table where user_name='$un'");
if($query)
{
	echo "<script>alert('delete record successfully')</script>";
}
}
?>
</table>


</form>
</div>

<div style="background-color:yellowgreen;width:100%;height:110px;">
</div>


</body>
</html>