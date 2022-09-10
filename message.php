<?php
include('config.php');
session_start();
if ($_SESSION['status']==true)
{
	
$username=$_SESSION['name'];
$phno=$_SESSION['phno'];
$qrl="select * from accountdetails";
$qrl1=mysqli_query($conn,$qrl);
echo"
<body>
<center>
<table height='90%' width='100%'bgcolor='Yellow'border='2'>
<tr>
<td  colspan='6' bgcolor='Aquamarine'><center><img src='Inkedfriendzone4.jpg'></center></td>
</tr>
<tr>
<td colspan='6'><font size='10' color='green'>Friends</td>
</tr><tr>
<td><form action='Story.php'><input type='submit' value='back'></form></td></tr>";
while($row=mysqli_fetch_array($qrl1))
{
if($phno!=$row["phno"])
{
echo"
<tr>
<td colspan='6'><a href='send.php?phno=".$row["phno"]."'<font size='5' color='green'><img src='".$row['profile']."'height='50' width='50'><br>".$row['username']."</a></td></tr>";	
}

}	
echo"
</tr>
</table>
</center>
</body>";
}
?>