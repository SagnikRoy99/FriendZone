<?php
include('config.php');
session_start();
if ($_SESSION['status']==true)
{
echo"
<form method='post' action='uploadtextprocess.php'>
<table  border='2' height='20%' width='100%'bgcolor='Yellow'>
<tr>
<td bgcolor='Aquamarine'><center><img src='Inkedfriendzone4.jpg'></center></td>
</tr>
<tr>
<td><textarea rows='10' cols='200' name='text' placeholder='whats On Your Mind?' required ></textarea></td>
</tr>
<tr>
<td><center><input type='submit' value='Upload Status'></center></td></tr></form>
<tr><form action='uploadfileprocess.php' enctype='multipart/form-data' method='post'>
<td><font size='5'>A Status is always incomplete without an image Upload Here!!</td>
<tr>/
<tr>
<td><input type='file' name='img' accept='image/*' required></td>
</tr>
<tr>
<td><center><input type='submit' value='Upload image'></center></td></tr></form>
";
}
?>