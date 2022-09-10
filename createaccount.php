<html>
<head>
<body bgcolor='yellow'>
<?php
include('config.php');
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_POST['username'];
$phno=$_POST['phno'];
$email=$_POST['email'];
$password=$_POST['password'];
$qrl="select * from accountdetails where password=$password";
	$qll=mysqli_query($conn,$qrl);
	$noc=mysqli_num_rows($qll);
	if($noc)
	{
		echo"
	<script>
	alert('PassWord is Used try different password');
	history.go(-1)
	</script>
	";
	}

		else
		{
			if(!file_exists('profile'))
{
	mkdir('profile',0777,true);
}
$target_file="profile/".basename($_FILES["img"]["name"]);
$imagefiletype=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($imagefiletype!='jpg' && $imagefiletype!='JPG' && $imagefiletype!='png' && $imagefiletype!='PNG' && $imagefiletype!='jpeg'&& $imagefiletype!='JPEG')
{
	echo"
	<script>
	alert('not an image file')
	history.go(-1);
	</script>";
}
else
{	
$target_file="profile/".$phno.".".$imagefiletype;
move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);
	     echo$sql="insert into accountdetails(username,phno,email,password,profile)values('$name','$phno','$email','$password','$target_file')";
			mysqli_query($conn,$sql);
			echo"
	<script>
	alert('Account Created');
	window.location.href='login.php';
	</script>
	";
}
		}
		
	}
?>
	
<form action= <?php echo htmlspecialchars($_SERVER["PHP_SELF"])?> enctype='multipart/form-data' method='post'>
<center>
<table border='2' height='90%' width='50%' bgcolor='Aquamarine'>
<tr>
<td colspan='4' bgcolor='Aquamarine'><center><img src='Inkedfriendzone4.jpg'></center></td>
</tr>
<tr>
<td colspan='4'><center><h1><font color='Black' size='20'>A New Journey Awaits !!</font></h1></center></td>
</tr>
<tr><td colspan='4'><font size='6' color='Black'>Upload Your Profile Picture!</td></tr>
<tr><td colspan='4'><input type='file' name='img' accept='image/*' required></td></tr>
<tr>
<td><font size='6' color='Black'>Create Your User-Name</font></td>
<td><center><input type='text' name='username' required></center></td>
</tr>
<tr>
<td><font size='6' color='Black'>Enter Your phone-no.</td>
<td><center><input type='number' name='phno' required></center></td>
</tr>
<tr>
<td><font size='6' color='Black'>Enter Your Email</td>
<td><center><input type='email' name='email' required></center></td>
</tr>
<tr>
<td><font size='6' color='Black'>Create Your Password</td>
<td><center><input type='password' name='password' required></center></td>
</tr>
<tr>
<td colspan='2'><center><input type='submit' value='Create Account'</center></td>
</tr>
</table>
</center>
</body>
</html>";