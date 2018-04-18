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
<html>
<body>
<div>
<img src="fg.jpg" style="width:100%;height:150;float:right;">
</img>
</div>

<div>

<img src="forget.jpg" width="200" height="500" style="background-color:gold;">

</div>

<div style="background-image:url(liverain.gif);width:760px;height:500px;margin-left:14.5em;margin-top:-31.2em;">
<br>

<br><br>

<div style="background-color:whitesmoke;width:480px;height:290px;margin:auto;margin-top:1em;margin-bottom:1em;border-radius:50px;background-size:cover;">
<form action="" method="POST">

<marquee behavior="alternate" style="color:darksteelblue;font-size:20;margin-left:2em;margin-right:2em;"><b>FORGOT PASSWORD</b></marquee><br><br>
<table border='2' align="center" width="350" height="150">
<tr>
<td style="background-color:khaki;">Email-id</td>
<td style="background-color:moccasin;"><input type="email" name="email" required/></td>
</tr>
<tr>
<td style="background-color:moccasin;">Mobile No.</td>
<td style="background-color:khaki;"><input type="mobile" name="mobno" required/></td>
</tr>

</table>
<br><br>

<input type="submit" name="back" value="Back" onclick="location.href=('login.php')" style="margin-left:2em;font-size:1em;color:blue;border-radius:20px;">
</input>

<input type="submit" name="submit" value="Submit" style="margin-left:18em;font-size:1em;color:red;border-radius:20px;">
</input>



</form>
</div>



</body>
</html>
<p style="color:white;font-size:28;text-align:center;">
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('regis');
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
    $mob=$_POST['mobno'];
  $ins= mysql_query("select password from regis_table where email_id='$email' and mobile_num=$mob");
  while($dt=mysql_fetch_array($ins))
  {
  echo "Your password is :".$dt['password'];	
  }
}
 ?>
</p>