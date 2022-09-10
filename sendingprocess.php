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

$qrl="insert into messages (username,phno,sendername,senderphno,recieve)values('$username1','$phno1','$username','$phno','$recieve')";
$qll=mysqli_query($conn,$qrl);
echo"
<script>
window.location.href='send.php'
</script>
";