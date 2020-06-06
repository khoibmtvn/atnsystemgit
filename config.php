<?php

define('DB_SERVER', 'ec2-34-200-72-77.compute-1.amazonaws.com');
define('DB_USERNAME', 'euyisgfbhwszfl');
define('DB_PASSWORD', '6b75bebbc927863f588acb5697df5b7c9d9b381914be6b6118d222bec9ec833c');
define('DB_NAME', 'ddms4tr6lv2if6');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
