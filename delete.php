<?php

require_once 'connection.php';

$bulk = new MongoDB\Driver\BulkWrite;


$filter=['nume'=>"Ionescu"];

$bulk->delete($filter);
$client->executeBulkWrite('elevi.Negruzzi',$bulk);
header('location:index.php');
?>
