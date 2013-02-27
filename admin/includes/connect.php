<?php
define('DB_HOST','localhost');
define('DB_USER','civics_main');
define('DB_PASS','1c8a9cd470');
define('DB_NAME','civics_main');

$connection = mysql_connect(DB_HOST,DB_USER,DB_PASS) or die(mysql_error());
mysql_select_db(DB_NAME) or die(mysql_error());
?>