<?php
/* Database credentials for MySQL server */
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', 'ManagementPassword2021');
define('DB_NAME', 'management');

/* MySQL database connection */
$mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Connection check
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->error());
}
?>
