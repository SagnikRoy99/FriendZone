<?php
include('config.php');
session_start();
$username=$_SESSION['name'];
$phno=$_SESSION['phno'];
$phno1=$_SESSION['phno1'];
$recieve=$_POST['chat'];
$qrl1="select username from accountdetails where phno=$phno1";
$qll=mysqli_query($conn,$qrl1);
$row=mysqli_fetch_array($qll);
$username1=$row['username'];
$date=date("Y/m/d");
$date1=date("h:i:sa");
$qrl="insert into comment (username,phno,sendername,senderphno,time,time2,comment)values('$username1','$phno1','$username','$phno','$date','$date1','$recieve')";
$qll=mysqli_query($conn,$qrl);
echo"
<script>
window.location.href='comment.php'
</script>
";