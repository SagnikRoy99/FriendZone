<?php
include('config.php');
session_start();
if ($_SESSION['status']==true)
{	
echo"
<table height='90%' width='100%'bgcolor='Yellow'border='5'>
<tr>
<td  colspan='4' bgcolor='Aquamarine'><center><img src='Inkedfriendzone4.jpg'></center></td>
</tr>
<tr>
<td  height='200' width='50'bgcolor='Aquamarine'><a href='story.php'><img src='newsfeed.png' height='200' width='200'><br><font size='5' color='blue'>NewsFeed</a></td>
<td height='200' width='50' bgcolor='Aquamarine'><a href='upload1.php'><img src='upload.png' height='200' width='200'><font size='5' color='blue'><br>Upload Your Story</a></td>
<td height='200' width='50' bgcolor='Aquamarine'><a href='profile.php'><img src='".$_SESSION['profile']."' height='200' width='200'><br><font size='5' color='blue'>Your Profile</a>
<td height='200' width='50' bgcolor='Aquamarine'><a href='message.php'><img src='message2.png' height='200' width='200'><br><font size='5' color='blue'>message</a>

</tr>
";	
$qrl="select id from upload";
$qrl1=mysqli_query($conn,$qrl);
while($row=mysqli_fetch_array($qrl1))
{
$count=$row['id'];
}
$qrl2="select id from upload";
$qrl3=mysqli_query($conn,$qrl2);
$row2=mysqli_fetch_array($qrl3);
$count0=$row2['id'];
while($count>=$count0)
{
  $qll="select * from upload where id=$count";
  $qll1=mysqli_query($conn,$qll);
  $row1=mysqli_fetch_array($qll1);
  if(isset($row1['phno']))
  {
  $ash1=$row1['phno'];
  $ash="select * from accountdetails where phno=$ash1";
  $ash2=mysqli_query($conn,$ash);
  $row2=mysqli_fetch_array($ash2);
  }
if(isset($row1['id']))
{
  echo"
  <tr>
  <td colspan='4'><img src='".$row2['profile']."'height='50' width='50'><font size= '5' color='green'>".$row1['username']."</td>
  <tr>
  <td colspan='4'>".$row1['time']."at".$row1['time2']."</td></tr>";
  if ($row1['uploadfile']==null)
  {
	  echo" <tr>
            <td colspan='4' height='100' width='50'><font size='10'>".$row1['uploadtext']."</td></tr>
			<tr><td colspan='4'><a href='comment.php?phno=".$row1["phno"]."'><img src='comment.jpg' height='50' width='50'><br><font size='5' color='green'>comment</a></td></tr>";
  }
  else
  {
	  echo"
	  <tr>
	  <td colspan='4'><img src='".$row1['uploadfile']."'height='500' width='500'></td></tr>
	  <tr><td colspan='4'><a href='comment.php?phno=".$row1["phno"]."'><img src='comment.jpg' height='50' width='50'><br><font size='5' color='green'>comment</a></td></tr>";
  }
}
$count=$count-1;
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
