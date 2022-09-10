<?php
include('config.php');
session_start();
$phno=$_SESSION['phno'];
$qrl="select * from messages";
$qll=mysqli_query($conn,$qrl);
$count=mysqli_num_rows($qll);
$qrl="select * from messages where phno=$phno";
$qll=mysqli_query($conn,$qrl);
$count=mysqli_num_rows($qll);
echo $count;

echo"
<table>
<tr>
<td  colspan='4' bgcolor='persianblue'><center><img src='friendzone2.jpg'></center></td>
</tr>
<tr>
<td  colspan='4' bgcolor='persianblue'><center><font size='10' color='green'>messages</center></td>
</tr>
";
if($count)
{
while($count>=0)
{
	$qrl2="select * from messages where id=$count";
    $qll1=mysqli_query($conn,$qrl);
	$qrl3=mysqli_fetch_array($qll1);
	if($qrl3['phno']==$phno)
	{
		if($qrl3['recieve'] != NULL)
		{
			echo"
			<tr>
		<td><font size='5' color='green'><u>".$qrl3['sendername']."</u><br><br>
		    <font size='5' color='green'>".$qrl3['recieve']."<br></tr>";
		}
		if($qrl3['send'] != NULL)
		{
			echo"
			<tr>
			<td><br><font size='5' color='green'><u>".$qrl3['username']."</u><br><br>
		     <font size='5' color='green'>".$qrl3['send']."<br></tr>";
		}
		
		
	}
	$count=$count-1;
}
}	
