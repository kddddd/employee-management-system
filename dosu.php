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

<div style="background-color:lightpink;width:100%;height:150px;font-size:45;"><br>
<marquee behavior="alternate" style="margin-left:3.5em;margin-right:3.5em;">!!!<i>DETAILS OF SINGLE USER</i>!!!
</marquee>
</div>

<div style="background-image:url('psp.jpg');width:100%;height:490;">
<form  action="" method="post">


<div>
<a href="adminarea.php" style="color:black;margin-left:40em;text-decoration:none;font-size:22;">**Back**</a>
</div>

<div style="text-align:center;">
<input type="text" name="admin" placeholder="Enter Username" required style="background-color:lightpink;text-align:center;height:50px;border-radius:20px;"></td>
</div>



<div style="text-align:center;">
<input type="submit"  name="submit" value="SUBMIT" style="margin-left:1em;margin-top:2em;font-size:1em;border-radius:20px;">
</div>



<table align="center" style="background-color:lightpink;height:auto;"><br><br>

<td>
<table border="2" style="width:400;"></td>
</tr>
<tr>
<th>Name</th>
<th>Username</th>
<th>Password</th>
<th>email_id</th>
<th>Mobile_no</th>
<th>Gender</th>
<th>State</th>
</tr>


<?php 
mysql_connect('localhost','root','');
mysql_select_db('regis')or die('plz check database');
if(isset($_POST['submit']))
{
$un=$_POST['admin'];	
$query=mysql_query("select * from regis_table where user_name='$un'");
while($dt=mysql_fetch_array($query))
{
?>
<tr>
<td><?php echo $dt['name']; ?></td>
<td><?php echo $dt['user_name']; ?></td>
<td><?php echo $dt['password']; ?></td>
<td><?php echo $dt['email_id'];?></td>
<td><?php echo $dt['mobile_num']; ?></td>
<td><?php echo $dt['gender'];?></td>
<td><?php echo $dt['state']; ?></td>
</tr>
<?php }}?>
</table>

</center>

</form>



</div>



</body>
</html>