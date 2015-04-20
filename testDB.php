<?php

$hostname = 'localhost';
$username = 'root';
$password = '';

$databasename = 'alphacrm';

$dbConnected = @mysql_connect($hostname, $username, $password);

$dbSelected = @mysql_select_db($databasename, $dbConnected);

if($dbConnected) {
    echo "MySQL connected OK <br /><br />";

    if($dbSelected) {
        echo "Database selected OK <br /><br />";
    } else {
        echo "Database failed to connect <br /><br />";
    }
} else {
        echo "MySQL connection failed <br /><br />";
}