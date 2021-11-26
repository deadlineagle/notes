<?php
$message=$_POST['message'];
$taskc=$_POST['taskc'];
$taskr=$_POST['taskr'];
$tasknd=$_POST['tasknd'];




$conn=mysqli_connect('localhost','root','password','test');
$db=mysqli_select_db($conn,'note');


if(!$conn)
{
	echo"error";
}
else
{
	$query=mysql_query("insert into note(message,taskc,taskr,tasknd) values ('$message', 'taskc', '$taskr', '$tasknd')");
	$query->execute();
	echo"registration successfull..";
	$query->close();
	mysql_close($conn)

}

?>