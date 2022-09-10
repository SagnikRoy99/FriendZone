<?php
include('config.php');
session_start();
if ($_SESSION['status']==true)
{
	$phno=$_SESSION['phno'];
$username=$_SESSION['name'];
$profile=$_SESSION['profile'];
echo"
<body>
<center>
<table  border='2' height='20%' width='100%'bgcolor='Yellow'>
<tr>
<td  bgcolor='Aquamarine'><center><img src='Inkedfriendzone4.jpg'></center></td>
</tr>
";

if (isset($_REQUEST['phno']))
{
$phno1=$_REQUEST['phno'];
$_SESSION['phno1']=$phno1;
}

else
{
$phno1=$_SESSION['phno1'];
}
	
$qrl="select * from comment";
$qll=mysqli_query($conn,$qrl);
$row2=mysqli_fetch_array($qll);
if($phno==$phno1)
{	
	echo"
<tr><td><img src='".$profile."'height='60' width='60'><br><font size='5' color='green'>".$username."</td></tr>";	

}
else
{
	$ash="select * from accountdetails where phno=$phno1";
$ash1=mysqli_query($conn,$ash);
$ash2=mysqli_fetch_array($ash1);
echo"
<tr><td><img src='".$ash2['profile']."'height='60' width='60'><br><font size='5' color='green'>".$ash2['username']."</td></tr>";
}
echo"<form action='commentprocess.php' method='post'>
<table>
<tr>
<td><textarea rows='5' cols='100' name='chat' placeholder='write your comment here' required ></textarea></td>
<td><input type='submit' value='send'></form></td>
<td><form action='Story.php'><input type='submit' value='back to story'></form></td>";
$qrl1="select * from comment";
$qll1=mysqli_query($conn,$qrl1);
$count0=mysqli_num_rows($qll1);
while($count0!=0)
{
$row=mysqli_fetch_array($qll1);
if( $row['phno']==$phno1)
{
$ash3="select * from accountdetails where phno=".$row['senderphno']."";
$ash4=mysqli_query($conn,$ash3);
$ash5=mysqli_fetch_array($ash4);
if($row['sendername']==$username)
{
	
	echo"
<tr><td><font size='5' color='green'><img src='".$ash5['profile']."'height='60' width='60'><br><font size='5' color='green'>You   ".$row['time']." at ".$row['time2']."</td></tr>
<tr><td><font size='5' color='green'>". $row['comment']."</tr>";
}
else{
echo"
<tr><td><font size='5' color='green'><img src='".$ash5['profile']."'height='60' width='60'><br>". $row['sendername'].":  ".$row['time']." at ".$row['time2']."</td></tr>
<tr><td><font size='5' color='green'>". $row['comment']."</tr>";	
}
}

$count0=$count0-1;
}
$_SESSION['phno1'];
}
else{
	
	echo"
 <script>
 window.location.href='login.php';
 </script>";
}
?>
