<html>
<head>
<body bgcolor='yellow'>
<?php
include('config.php');
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=$_POST['username'];
	$phno=$_POST['phno'];
	$password=$_POST['password'];
	$qrl="select * from accountdetails where password=$password";
		$qll=mysqli_query($conn,$qrl);
		$row=mysqli_fetch_array($qll);
		$noc=mysqli_num_rows($qll);
		if($noc)
		{
			
			if ($name==$row['username'] && ($phno==$row['phno']))
			{
				session_start();
				$_SESSION['status']=true;
				$_SESSION['name']=$name;
				$_SESSION['phno']=$phno;
				$_SESSION['profile']=$row['profile'];
				echo"
						
				<script>
				alert('successfull')
				window.location.href='story.php'
				</script>";
			}
			else
			{
				echo"
						
				<script>
				alert('unsuccessfull')
				history.go(-1);
				</script>";
			}
	

	}
	else
	{
		echo"
				
				<script>
				alert('unsuccessfull')
				history.go(-1);
				</script>";
	    }
}
?>
	
<form action= <?php echo htmlspecialchars($_SERVER["PHP_SELF"])?> method='post'>
<center>
<table border='3' height='90%' width='50%' bgcolor='Aquamarine'>
<tr>
<td colspan='4' bgcolor='Aquamarine'><center><img src='Inkedfriendzone4.jpg'></center></td>
</tr>
<tr>
<td colspan='4'><center><h3><font color='Black' size='20'>Login Here!!</font></h3></center></td>
</tr>
<tr>
<td><font size='6' color='Black'>Enter your User-Name:</font></td>
<td><center><input type='text' name='username' required></center></td>
</tr>
<tr>
<td><font size='6' color='Black'>Enter your phone-no:</td>
<td><center><input type='number' name='phno' required></center></td>
</tr>
<tr>
<td><font size='6' color='Black'>Enter your Password:</td>
<td><center><input type='password' name='password' required></center></td>
</tr>
<tr>
<td colspan='2'><center><input type='submit' value='login'</center></td>
</tr>
<tr>
<td colspan='2'><a href='createaccount.php'><font size='6'><font size='6' color=''>New Here? Create a new account now!!</font></a></td>
</tr>
</table>
</center>
</body>
</html>";