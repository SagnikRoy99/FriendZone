<?php
session_start();
if ($_SESSION['status']==true)
{
echo"	
<form action='updateprofileprocess.php' enctype='multipart/form-data' method='post'>
<center>
<table border='2' height='90%' width='50%' bgcolor='persianblue'>
<tr>
<td colspan='4' bgcolor='persianblue'><center><img src='friendzone2.jpg'></center></td>
</tr>
<tr>
<td colspan='4'><center><h1><font color='Yellow' size='20'>Update Profile</font></h1></center></td>
</tr>
<tr><td colspan='4'><font size='5' color='Yellow'>Give Your Profile Picture</td></tr>
<tr><td colspan='4'><input type='file' name='img' value=".$_SESSION['profile']." accept='image/*' required></td></tr>
<tr>
<td><font size='5' color='Yellow'>UserName</font></td>
<td><center><input type='text' name='username' required></center></td>
</tr>
<tr>
<td colspan='2'><center><input type='submit' value='Update'></center></td>
</tr>
</table>
</center>
</body>
</html>";
}
else
{
	echo"
 <script>
 window.location.href='login.php';
 </script>";
}		
		
?>		