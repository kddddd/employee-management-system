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
<div style="background-color:lightskyblue;width:100%;height:110px;font-size:45;text-align:center;"><br>
<marquee behavior="alternate" scrollamount="4" style="margin-left:3em;margin-right:3em;">
^^^ADMINISTRATOR'S lOGIN^^^
</marquee>
</div>

<div style="background-image:url('bk.jpg');width:100%;height:400px;">
<form>
<div>
<a href="oe1.php" style="font-size:18;margin-left:50em;text-decoration:none;color:white;"><<--Back</a>
</div>

<div style="color:white;font-size:40;text-align:center;">WELCOME
</div>
<br>

<div style="color:white;margin-left:32em;">
<input type="text" name="adminname" placeholder="Admin name" style="width:250;height:35;text-align:center;background-color:lightskyblue;border-radius:15px;"></input>
</div>
<br>
<div style="color:white;margin-left:32em;">
<input type="password" name="password" placeholder="Password" style="width:250;height:35;text-align:center;background-color:lightskyblue;border-radius:15px;"></input>
</div>
<br>
<div style="margin-left:32em;">
<input type="submit" name="LogIn" value="LOGIN" style="width:250;height:35;color:red;font-size:1.5em;background-color:lightskyblue;color:white;border-radius:15px;"></input>
</div>
</div>

<div style="background-color:lightskyblue;width:100%;height:auto;">

<marquee behavior="alternate" scrollamount="5" style="margin-left:2em;margin-right:2em;font-size:18;"><i><b>
A server administrator or admin has the overall control of a server.This is usually in the context of a business
organization, <br>where a server administrator oversees the performance and condition of multiple servers in the business 
organization, or it<br> can be in the context of a single server. There are also referred to as system administrators. They
works on with servers and<br> networks on a daily basis to ensure that systems run effieciently and continue to operate
without downtime. Server admins <br>tasks can include maintaining software and security updates, monitoring server 
activity, auditing server activities,<br> devoloping and redifining processes.
</i></b></marquee>


</div>
</form>
</body>
</html>

<?php
if(isset($_POST['LogIn']))
{
  $admin=$_POST['adminname'];
  $pass=$_POST['password'];
  
  if($admin=="kuldeep goel" && $pass=="1234567")
  {
	  header("location:adminarea.php");
	  
  }
  else
  {
	    echo"<script> alert('Failed Login');</script>";
  }
}
?>