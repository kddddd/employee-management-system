<html>
<body>

<div style="background-color:black;width:100%;height:auto;text-align:center;color:white;font-size:50;">
<form action="" method="POST">
<marquee behavior="alternate" style="margin-left:4em;margin-right:4em;">**FEEDBACK FORM**
</marquee>
<br><br>
<div style="margin-right:28em;font-size:25;color:acutewhite;">Your Id:<br><br>
<input type="text" name="yname" maxlength="30" required style="margin-left:6em;border-radius:15px;"></input>
</div>
<br>

<div style="margin-right:28em;font-size:25;color:acutewhite;">Your Email :<br><br>
<input type="email" name="email" maxlength="30" required style="margin-left:6em;border-radius:15px;"></input>
</div>
<br>
<div style="margin-right:26em;font-size:25;color:acutewhite;">Your Comments :<br><br>
<textarea name="comments" rows="12" cols="45" style="margin-left:8.2em;border-radius:15px;">
</textarea>
</div>

<div>
<input type="submit" name="submit" value="Submit" style="background-color:black;color:white;font-size:1em;margin-left:10em;margin-top:-2em;border-radius:20px;">
</input>
</div>

</form>
</div>

</body>
</html>

<?php 
mysql_connect('localhost','root','');
mysql_select_db('regis')or die('plz check error');
if(isset($_POST['submit']))
{
$Name=$_POST['yname'];		
$Email=$_POST['email'];	
$Comments=$_POST['comments'];
$ins=mysql_query("insert into feedback set name='$Name',email='$Email',comments='$Comments'");
if(!$ins)
  {
   echo "<script> alert('not submit succesfully');</script>";
   
  }
  else
  {
	  echo "<script> alert('submit succesfully');</script>";
	  header("location:oe1.php");
  }
}
?>