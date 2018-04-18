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
<div style="background-color:aquamarine;width:100%;height:100;font-size:45;text-align:center;"><br>
<marquee behavior="alternate" style="margin-left:5em;margin-right:5em;">^^^ADMIN AREA^^^
</marquee>
</div>

<div style="background-image:url('back8.jpg');width:100%;height:auto;">

<div>
<a href="adminlogin.php" style="color:black;margin-left:40em;text-decoration:none;font-size:22;">**Logout**</a>
</div>
<br><br>
<table width="200" height="100" align="center">
<tr>
<td><input type="submit" name="submit1" value="Details of all Employee" onclick="location.href='doau.php'" style="font-size:2em;border-radius:20px;"></td>
<td><input type="submit" name="submit2" value="Details of Single Employee" onclick="location.href='dosu.php'" style="font-size:2em;margin-left:4em;border-radius:20px;"></td>
</tr>
</table>

<table width="200" height="100" align="center">
<tr>
<td><input type="submit" name="submit3" value="Result of all Employees" onclick="location.href='roas.php'" style="font-size:2em;text-align:center;border-radius:20px;"></td>
</tr>
</table>


<table width="200" height="100" align="center">
<tr>
<td><input type="submit" name="submit3" value="Delete employee data" onclick="location.href='deleteuser.php'" style="font-size:2em;text-align:center;border-radius:20px;"></td>
</tr>
</table>

<table width="200" height="100" align="center">
<tr>
<td><input type="submit" name="submit3" value="Show Feedback" onclick="location.href='allfeedback.php'" style="font-size:2em;text-align:center;border-radius:20px;"></td>
</tr>
</table>

<table width="200" height="100" align="center">
<tr>
<td><input type="submit" name="submit3" value="Delete Feedback" onclick="location.href='deletefeedback.php'" style="font-size:2em;text-align:center;border-radius:20px;"></td>
</tr>
</table>

</div>

<div style="background-color:aquamarine;width:100%;height:auto;">
<marquee behavior="alternate" style="margin-left:4em;margin-right:4em;font-size:18.5;">
Welcome <mark><b>Admin***</b></mark>...<i><b>You have the following authorities as mentioned above :-<br>
** You can see any details of user.<br>
*** You can search any <mark>single</mark> user details also.<br>
**** You can see the <mark>results</mark> of all students who had given the examination yet.<br>
***** You are authorised to <mark>delete</mark> any user who had registered wrongly or to make some free space in user.
</i></b></marquee>
</div>

</body>
</html>