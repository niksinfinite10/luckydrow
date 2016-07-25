<?php

$link = mysql_connect('mysql.hostinger.in', 'u292717878_root', 'root123');

if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db('u292717878_dream', $link);

if (!$db_selected) 
    die ('Can\'t use foo : ' . mysql_error());


/*

$link = mysql_connect('localhost', 'root', '');

if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db('dreamteam', $link);

if (!$db_selected) 
    die ('Can\'t use foo : ' . mysql_error());

*/
	?>