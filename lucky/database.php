<?php

include_once('./connection.php');

$sql = "SELECT * from tickets order by rand() limit 1";

$result = mysql_query($sql);

if ($result) {
    // output data of each row
    while ($row = mysql_fetch_assoc($result)) {
        //echo "id: " . $row["id"]. " - Name: " . $row["ticket_no"].  "<br>";
		if($row["ticket_no"]>0 && isset($row["ticket_no"]))
			echo $row["ticket_no"];
		else
			echo 0;
    }
} else {
    echo 0;
}

?>