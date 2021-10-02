<?php
session_start();
$id=$_SESSION['sid'];
include_once('connection.php');

if(isset($_POST['delete']) && isset($_POST['ch'])) 
{
foreach($_POST['ch'] as $v)
{
echo $v;
$r=$conn->query("SELECT * FROM usermail where to_id='$id' and mailid=$v");
while($dd=$r->fetch_array())
	{
	$rec=$dd['to_id'];
	$sen=$dd['from_id'];
	$sub=$dd['subject'];
	$msg=$dd['msg'];
	$conn->query("insert into trash(to_id,from_id,subject,msg,send_date) values('$rec','$sen','$sub','$msg',CURRENT_TIMESTAMP)");
	
	
	$conn->query("delete FROM usermail where to_id='$id' and mailid=$v");
echo "<script>alert('Message deleted');window.location='mailbox.php'</script>";

	}
	
}
}
?>
