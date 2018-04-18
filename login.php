<html>
<body>
<div style="background-color:skyblue;width:100%;height:110;font-size:45;"><br>
<marquee behavior="alternate" scrollamount="5" style="margin-left:5em;margin-right:5em;">^^^User's LOGIN^^^
</marquee>

</div>


<div style="background-image:url('lg.jpg');width:100%;height:370px;">

<div>
<a href="oe1.php" style="margin-left:49em;font-size:18;text-decoration:none;color:red;"><<---Back</a>
</div>

<div>
<br><br>
<form action="" method="POST">
<table align="center" width="400" height="190">
<tr>
<td><b>Username</b></td>
<td><input type="text" name="user_name" required style="border-radius:15px;"></input>
</tr>

<tr>
<td><b>Password</b></td>
<td><input type="password" name="pass" required style="border-radius:15px;"></input>
</tr>
</table>

<input type="submit" name="submit" value="Login" style="font-size:2em;color:red;margin-left:19em;border-radius:10px;"></input><br><br><br>

<div style="margin-top:-1em;">
<a href="forget.php" style="color:red;text-decoration:none;margin-left:2em;"><b><i>???forgot your password???</i></b></a>
</div>

<div style="margin-top:-1em;">
<a href="reg.php" style="color:red;text-decoration:none;margin-left:50em;"><b><i>***If not registered***</i></b></a>
</div>


</form>
</div>

</div>

<div style="background-color:skyblue;color:black;width:100%;height:auto;font-size:28;">
<b>INSTRUCTIONS***</b>
<div style="margin-left:4em;margin-right:2em;">
<p style="font-size:20;">The users who are already registered themselves can move further through these steps. If you are not registered then please follow the link given right
side of the page below <b>"If not registered"</b>. If by chance the user had forget its password, so for this you have to follow the left link given below of 
<b>"Forget your password"</b></p>
</div>

</div>

</body>
</html>

<?php
$con=mysql_connect("localhost","root","");
mysql_select_db('regis');
if(isset($_POST['submit']))
{
  $use=$_POST['user_name'];
  $pass=$_POST['pass'];
  $ins= mysql_query("select * from regis_table where user_name='$use' and password='$pass'");
  if($row=mysql_fetch_array($ins))
   
  {
	  
   echo"<script> alert('Login succesfull');</script>";
    session_start();
   $_SESSION["name"]=$use;
    $_SESSION["pass"]=$pass;
    header("location:list.php");
   
  }
 
  echo"<script> alert('Failed Login');</script>";
}
?>
