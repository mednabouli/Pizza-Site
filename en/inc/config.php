<?php
$db_username = 'lapat085_pizza';
$db_password = '963852xxaz;';
$db_name = 'lapat085_pizza';
$db_host = 'localhost';

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
header('Content-Type: text/html; charset=iso-8859-1');
?>