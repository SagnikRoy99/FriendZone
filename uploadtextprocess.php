<?php
include('config.php');
session_start();
$username=$_SESSION['name'];
$phno=$_SESSION['phno'];
$text=$_POST['text'];
$date=date("Y/m/d");
$date1=date("h:i:sa");
$qrl="select profile from accountdetails where phno=$phno";
$qrl1=mysqli_query($conn,$qrl);
$row=mysqli_fetch_array($qrl1);
$profile=$row['profile'];
echo$qll="insert into upload(username,phno,uploadtext,time,time2) values ('$username','$phno','$text','$date','$date1')";
mysqli_query($conn,$qll);
echo"
<script>
alert('Successfully Uploded')
window.location.href='story.php';
</script>";
?>