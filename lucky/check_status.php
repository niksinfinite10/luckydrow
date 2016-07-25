<?php

include_once('./connection.php');

$sql = "SELECT * from status where id = 1";

$result = mysql_query($sql);

if ($result) {
    // output data of each row
    while ($row = mysql_fetch_assoc($result)) {
    	if($row["id"]>0 && isset($row["id"]))
			echo $row["current_status"];
	}
} 
else {
    echo 0;
}

?>