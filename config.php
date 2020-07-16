<?php

$databaseHost = 'mysql://be3cb8c8bd1de1:bf433341@us-cdbr-east-02.cleardb.com/heroku_6d1e981c0bed683?reconnect=true';
$databaseName = 'heroku_6d1e981c0bed683';
$databaseUsername = 'be3cb8c8bd1de1';
$databasePassword = 'heroku_6d1e981c0bed683';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 



?>
<!-- 
<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
?> -->