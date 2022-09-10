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
<table height='20%' width='100%'bgcolor='Yellow'border='2'>
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
$ash="select * from accountdetails where phno=$phno1";
$ash1=mysqli_query($conn,$ash);
$ash2=mysqli_fetch_array($ash1);
echo"
<tr><td><img src='".$ash2['profile']."'height='60' width='60'><br><font size='5' color='green'>".$ash2['username']."</td></tr>";	
echo"
<form action='sendingprocess.php' method='post'>
<table>
<tr>
<td><textarea rows='5' cols='100' name='chat' placeholder='write your chat here' required ></textarea></td>
<td><input type='submit' value='send'></form></td><td><form action='message.php'><input type='submit' value='back'></form></td>";
$qrl="select * from messages";
$qll=mysqli_query($conn,$qrl);
$count0=mysqli_num_rows($qll);
while($count0!=0)
{
$row=mysqli_fetch_array($qll);
if(($row['senderphno']==$phno && $row['phno']==$phno1)||($row['senderphno']==$phno1 &&  $row['phno']==$phno))
{	
if($row['sendername']==$username)
{
	echo"
<tr><td><font size='5' color='green'><img src='".$profile."'height='60' width='60'><br><font size='5' color='green'>You</td></tr>
<tr><td><font size='5' color='green'>". $row['recieve']."</tr>";
}
else{
echo"
<tr><td><font size='5' color='green'><img src='".$ash2['profile']."'height='60' width='60'><br>". $row['sendername'].":</tr>
<tr><td><font size='5' color='green'>". $row['recieve']."</tr>";	
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
