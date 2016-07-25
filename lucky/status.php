<?php
include_once('./connection.php');
if(isset($_GET['status']))
{
	$status = $_GET['status'];
	$sql = "UPDATE `status` SET `current_status`= ".$status." WHERE id = 1";
	$result = mysql_query($sql);
	
	if($result)
		echo $status;
	
}
?>