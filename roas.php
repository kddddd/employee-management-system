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
<div style="background-image:url('11.gif');width:100%;height:140px;font-size:35;background-size:100%;">
</div>



<div style="background-image:url('sp.jpg');width:100%;height:auto;background-size:100%;">
<form  action="" method="post">

<div>
<a href="adminarea.php" style="color:black;margin-left:40em;text-decoration:none;font-size:22;">**Back**</a>
</div>

<div>
<center>
<table border='1'>
<tr>
<td>
<table border="1" style="width:400;"></td>
</tr>
<tr>
<th>User Name</th>
<th>Total Marks</th>
<th>Obtained marks</th>
<th>Result</th>
</tr>
<?php
mysql_connect('localhost','root','');
mysql_select_db('regis');
$query=mysql_query("select * from result");
while($rs=mysql_fetch_array($query))
{
?>
<tr>
<td><?php echo $rs['Username'];?></td>
<td><?php echo $rs['Totalmarks'];?></td>
<td><?php echo $rs['Obtainedmarks'];?></td>
<td><?php echo $rs['Result'];?></td>
</tr>
<?php }?>

</div>

</form> 
</body>
</html>