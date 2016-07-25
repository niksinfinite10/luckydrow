<?php
/*
$link = mysql_connect('mysql.hostinger.in', 'u292717878_root', 'root123');

if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db('u292717878_dream', $link);

if (!$db_selected) 
    die ('Can\'t use foo : ' . mysql_error());

*/

//$con=mysqli_connect("localhost","my_user","my_password","my_db");
  



$link = mysqli_connect("localhost","root","","dreamteam");
//$link = mysqli_connect("mysql.hostinger.in","u292717878_root","root123","u292717878_dream");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }'Can\'t use foo : ' . mysql_error();

	?>