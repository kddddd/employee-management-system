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
<div style="background-color:aliceblue;color:blue;width:100%;height:120px;font-size:45;"><br>
<marquee behavior="alternate" style="margin-left:1em;margin-right:1em;">***RESULT OF ONLINE EXAMINATION***
</marquee>
</div>


<div style="background-image:url('rst1.jpg');width:100%;height:515px;">


<div>
<a href="oe1.php" style="text-decoration:none;margin-left:42em;font-size:20;color:red;"><b>**Log out**</b></a>
</div>

<br><br>

<div style="text-align:center;font-size:35;"><b>LOGIN</b>
</div>

<br><br>

<table width="300" height="100" align="center">
<tr>
<td><input type="text" name="username" placeholder="Username" required style="background-image:url('rst1.jpg');;width:300;height:40;text-align:center;font-size:20;border-radius:30px;"></input></td>
</tr>

<tr>
<td><input type="password" name="password" placeholder="Password" required style="background-image:url('rst1.jpg');width:300;height:40;text-align:center;font-size:20;border-radius:30px;"></input></td>
</tr>
</table>

<br>
<div>
<input type="submit" name="submit" value="CHECK RESULT" style="font-size:1.5em;margin-left:21.8em;width:300;border-radius:30px;background-color:aliceblue;color:red;"></input>
<table border='1' align="center" style="width:400;height:50;"></td>
<tr>
<th>user_name</th>
<th>total_marks</th>
<th>obtain_marks</th>
<th>Result</th>
</tr>
<br>
<br>
<?php 
mysql_connect('localhost','root','');
mysql_select_db('regis')or die('plz check error');
if(isset($_POST['submit']))
{
$un=$_POST['username'];	
$pass=$_POST['password'];
$query=mysql_query("select *from result where username='$un' and password='$pass'");
while($rs=mysql_fetch_array($query))
{
?>
<tr>
<td><?php echo $rs['Username'];?></td>
<td><?php echo $rs['Totalmarks'];?></td>
<td><?php echo $rs['Obtainedmarks'];?></td>
<td><?php echo $rs['Result'];?></td>
</tr>
<?php }}?>
</table></center>
</form>
</div>
</body>
</html>