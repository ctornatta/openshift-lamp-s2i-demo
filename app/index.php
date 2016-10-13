<?php

$db_host = getenv('DB_HOST');
$db_name = getenv('DB_NAME');
$db_pass = getenv('DB_PASS');
$db_user = getenv('DB_USER');

//connection to the database
$dbhandle = mysql_connect($db_host, $db_user, $db_pass)
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db($db_name,$dbhandle)
  or die("Could not select $db_name");

//execute the SQL query and return records
$result = mysql_query("SELECT id, name, class, government FROM starship");

//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
   echo "ID:".$row{'id'}." Name:".$row{'class'}."Government: ".$row{'government'}."<br>";
}
//close the connection
mysql_close($dbhandle);
?>
