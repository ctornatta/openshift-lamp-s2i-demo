<?php

$db_host = getenv('DB_HOST');
$db_name = getenv('DB_NAME');
$db_pass = getenv('DB_PASS');
$db_user = getenv('DB_USER');

#connection to the database
$dbhandle = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($dbhandle->connect_errno) {
    echo "Failed to connect to MySQL: (" . $dbhandle->connect_errno . ") " . $dbhandle->connect_error;
}
echo $dbhandle->host_info . "\n";

#Execute Query
$result = $dbhandle->query("SELECT id, name, class, government FROM starship");

#Display data
while ($row = $result->fetch_assoc()) {
   echo "ID:".$row{'id'}." Name:".$row{'class'}."Government: ".$row{'government'}."<br>";
}
//close the connection
mysql_close($dbhandle);
?>
