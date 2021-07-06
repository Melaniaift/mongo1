<?php

require_once 'connection.php';

$bulk = new MongoDB\Driver\BulkWrite;

$data=[
    'nume'=>"Ionescu",
];
$filter=['nume'=>"Costescu"];
$update=['$set'=>$data];
$bulk->update($filter,$update);
$client->executeBulkWrite('elevi.Negruzzi',$bulk);
header('location:index.php');
?>
