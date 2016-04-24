<?php
define('DB_SERVER', 'u200283184_pos11');
define('DB_USERNAME', 'u200283184_posss');    // DB username
define('DB_PASSWORD', 'ciciheryanti734');    // DB password
define('DB_DATABASE', 'posyandu');      // DB name
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysql_select_db(DB_DATABASE) or die( "Unable to select database");
?>
