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


<div style="background-color:cornsilk;width:100%;height:150;font-size:45;"><br>
<marquee behavior="alternate" style="margin-left:4em;margin-right:4em;"><i>***DETAILS OF ALL USERS***</i>
</marquee>
<form action="" method="POST">
</div>

<div style="background-image:url('brownbk.jpg');width:100%;height:auto;">
<div>
<a href="adminarea.php" style="color:black;margin-left:40em;text-decoration:none;font-size:22;">**Back**</a>
</div>



<table border="1" align="center" width="700" height="auto">
</td>
</tr>

<tr>
<th style="color:blue;">Name</th>
<th style="color:red;">Username</th>
<th style="color:green;">Password</th>
<th style="color:blue;">email_id</th>
<th style="color:red;">Mobile_no</th>
<th style="color:green;">Gender</th>
<th style="color:blue;">State</th>
</tr>
<?php 
mysql_connect('localhost','root','');
mysql_select_db('regis')or die('plz check database');
$query=mysql_query("select * from regis_table");
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
<?php }?>
</table>
</center>
</form>
</div>

</body>
</html>