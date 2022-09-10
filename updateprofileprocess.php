<?php
session_start();
include('config.php');
if ($_SESSION['status']==true)
{
$name=$_POST['username'];
$phno=$_SESSION['phno'];


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
	     echo$sql="update accountdetails set username='$name',profile='$target_file' where phno='$phno'";

			mysqli_query($conn,$sql);
		
			$_SESSION['profile']=$target_file;
			$_SESSION['name']=$name;
			echo"
	<script>
	alert('Updated');
	window.location.href='profile.php';
	</script>
	";
}
}
else
{
	echo"
 <script>
 window.location.href='login.php';
 </script>";
}		
		

?>