<html>
<body>
<div style="background-color:skyblue;width:100%;height:125px;font-size:45;"><br>
<marquee behavior="alternate" scrollamount="5" style="margin-left:4em;margin-right:4em;">!!!REGISTRATION FORM!!!
</marquee>

</div>

<div style="background-image:url(img.jpg);width:100%;height:400px;">

<br>

<div>
<form action="" method="POST">

<p align="center" style="font-size:22;color:black;margin-left:-4em;"><u>Employee REGISTRATION</u></p>
<table align="center" width="500" height="250">
<tr>
<td>Name</td>
<td><input type="text" employee Id ="name" required/></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="user_name" required/></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass" required/></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" name="confirmpassword" required/></td>
</tr>
<tr>
<td>Department</td>
<td><input type="Department" name="Department" required/></td>
</tr>

<tr>
<td>Email-id</td>
<td><input type="email" name="email_id" required/></td>
</tr>
<tr>
<td>Mobile Number</td>
<td><input type="text" name="mobnumber" maxlength="10" required/></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="r1" value="male">Male
<input type="radio" name="r1" value="female">Female</td>
</tr>
<tr>
<td>State</td>
<td>
<select name="state">
<option value="state"></option>
<option value="UP">Up</option>
<option value="MP">MP</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Bihar">bihar</option>
<option value="Delhi">Delhi</option>
<option value="Punjab">punjab</option>
</select>
</td>
</tr>
</table>

<div>
<input type="submit" name="submit1" value="<--Back" onclick="location.href='oe1.php'" style="font-size:1.5em;color:blue;margin-left:3em;margin-top:-7em;border-radius:20px;" />
</div>
<div>
<input type="submit" name="submit" value="Submit-->" style="font-size:1.5em;color:blue;margin-left:40em;border-radius:20px;margin-top:-7em;" />
</div>
</form>
</div>
<div style="background-color:skyblue;width:100%px;height:100px;margin-top:3.9em;">
<marquee direction="left" behavior="scroll" onmouseover="stop()" onmouseout="start()" scrollamount="4">
<p style="font-size:20;">All employee are required to complete empolyee Registration on an quarter basis. This is to make sure that theinformation held on your employee record is correct.
New employees need to create an account and log in to Self Service. No employee may remain
active in the program in current financial year without a current employee registration.
However, if a employee ceases to be enrolled and subsequently returns to the program then student registration must be reactivated and this done by the HR
of the dept.
All details of the employee should accurate and correct. Wrong entering of the data should not be authenticate to give the its required exam.
Please see the coloumns when entering your information because once the data is saved on the database it won't be changed.
</p></marquee>
</div>

</body>
</html>

<?php
$con=mysql_connect("localhost","root","");
mysql_select_db('regis');
if(isset($_POST['submit']))
{
  $name= $_POST['name'];
  $uname= $_POST['user_name'];
  $pass= $_POST['pass'];
  $cpss= $_POST['confirmpassword'];
  $email= $_POST['email_id'];
  $mob= $_POST['mobnumber'];
  $gender= $_POST['r1'];
  $state= $_POST['state'];
  $ins= mysql_query("insert into  regis_table set name='$name',user_name='$uname',password='$pass',confirm_pass='$cpss',email_id='$email',mobile_num='$mob',gender='$gender',state='$state'");
   
  if(!$ins)
  {
   echo"<script> alert('not submit succesfully');</script>";
   
  }
 
  echo"<script> alert('submit succesfully');</script>";
  
  }
 

?>
