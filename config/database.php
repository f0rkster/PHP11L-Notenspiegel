<?php

/**
 * @author Kristof Friess <kristof.friess@fh-erfurt.de>
 * @copyright Since 2018 by Kristof Friess
 * @version 1.0.0
 */


$dbName = 'notenspiegel';

$dns   = 'mysql:dbname='.$dbName.';host=localhost';
$user  = 'root';
$pw    = '';
$options    = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

//$options    = [
//    3 => 2,
//    19 => 2
//];

$db = null;

try
{
    $db = new PDO($dns, $user, $pw, $options);
} 
catch (PDOException $e)
{
    die( 'Database connection failed: ' . $e->getMessage() );
}