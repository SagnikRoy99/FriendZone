<?php
include('config.php');
session_start();
$phno=$_SESSION['phno'];
if(isset($_SESSION['path']))
{
$path=$_SESSION['path'];
$sql="delete from upload where phno='$phno' AND uploadtext='$path'";
}
else
{
$path1=$_SESSION['path1'];	
$sql="delete from upload where phno='$phno' AND uploadtext='$path1'";
}
$sql1=mysqli_query($conn,$sql);
echo"
<script>window.location.href='profile.php';
</script>
";
