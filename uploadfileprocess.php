<?php
include('config.php');
session_start();
$username=$_SESSION['name'];
$phno=$_SESSION['phno'];
['img'];
$qrl="select id from upload";
$qrl1=mysqli_query($conn,$qrl);
$date=date("Y/m/d");
$date1=date("h:i:sa");
while($row=mysqli_fetch_array($qrl1))
{
$count=$row['id'];
}
$count=$count+1;
if(!file_exists('upload'))
{
	mkdir('upload',0777,true);
}
$target_file="upload/".basename($_FILES["img"]["name"]);
$imagefiletype=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$target_file="upload/".$count.".".$imagefiletype;
move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);
echo$qll="insert into upload(username,phno,uploadfile,time,time2) values ('$username','$phno','$target_file','$date','$date1')";
mysqli_query($conn,$qll);
echo"
<script>
alert('Successfully Uploded')
window.location.href='story.php';
</script>";