<?php

include_once('./connection.php');

$sql = "SELECT * from status where id = 1";

$result = mysqli_query($link,$sql);

if ($result) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
    	if($row["id"]>0 && isset($row["id"]))
			echo $row["current_status"];
	}
} 
else {
    echo 0;
}

?>