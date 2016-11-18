<?php

$db_host = getenv('DB_HOST');
$db_name = getenv('DB_NAME');
$db_pass = getenv('DB_PASS');
$db_user = getenv('DB_USER');

# debug
#echo "database host: $db_host <br>";
#echo "database name: $db_name <br>";
#echo "<br><br>";

#connection to the database
$dbhandle = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($dbhandle->connect_errno) {
    echo "Failed to connect to MySQL: (" . $dbhandle->connect_errno . ") " . $dbhandle->connect_error;
    exit;
}

# debug info
#echo $dbhandle->host_info . "\n";

#Execute Query
$result = $dbhandle->query("SELECT id, name, class, government FROM starships");

echo "<H1>Star Trek Starships</H1>";
echo "<H1>Version 1.8</H1>";
#Display data
while ($row = $result->fetch_assoc()) {
   echo "<b>Row:</b> ".$row{'id'}."<br><b>Name:</b> ".$row{'name'}."<br><b>Class:</b> ".$row{'class'}."<br><b>Government:</b> ".$row{'government'}."<br><br>";
}
#close the connection
mysqli_close ( $dbhandle );
?>
