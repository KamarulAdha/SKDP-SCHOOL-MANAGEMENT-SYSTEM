<?php
define('CURRENCY', 'USD');
define('WEB_URL', 'http://localhost/SKDP/');
define('ROOT_PATH', 'C:\OldXampp\htdocs\SKDP/');


define('TERM_1', '1');
define('TERM_2', '2');
define('TERM_3', '3');


define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'skdp');
$link = mysql_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD) or die(mysql_error());mysql_select_db(DB_DATABASE, $link) or die(mysql_error());?>