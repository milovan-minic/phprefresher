<?php
/**
 * Created by PhpStorm.
 * User: misa
 * Date: 20.4.15.
 * Time: 20.03
 *
 * File: dropDBalphacrm.php
 * Description: This script DROPS the database alphacrm
 */


        $hostname = 'localhost';
        $username = 'root';
        $password = '';

        $databaseName = 'alphacrm';

        $dbConnected = @mysql_connect($hostname, $username, $password);

        $dbSuccess = true;

        if($dbConnected) {
        //    do nothing
        } else {
            echo "MySQL Connection Failed<br /><br />";
            $dbSuccess = false;
        }

if($dbSuccess)
$drop_SQL = "DROP DATABASE " . $databaseName;

if(mysql_query($drop_SQL)) {
    echo "'DROP DATABASE $databaseName' - SUCCESSFUL.";
} else {
    echo "'DROP DATABASE $databaseName' - FAILED";
}

//echo "Database alphacrm has been dropped";