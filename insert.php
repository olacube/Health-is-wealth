<?php
$con = mysqli_connect('127.0.0.1','root','');
if (!$con)
{
	echo 'Not connected to server';
}
if(!mysqli_select_db($con,'tutorial'))
{
	echo 'Database not selected'
}
$Name = $_POST['username'];
$Email = $_POST['email'];
$sql = "INSERT INTO person (Name,Email) VALUES ('$Name', '$Email')";
if(!mysqli_query($con,$sql))
{
	echo 'Not insert';
}
else
{
	echo 'Inserted';
}
header("refresh:2; url=index.html");
?>