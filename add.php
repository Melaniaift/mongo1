<?php
require_once 'connection.php';

$bulk = new MongoDB\Driver\BulkWrite;

$data=array(
  '_id'=>new MongoDB\BSON\ObjectID,
  'nume'=>"Costescu",
  'age'=>"12",
  'prenume'=>"Bogdan",
  'movie'=>"Star Wars",
  'marime'=>"",
  'pret'=>"",
);
$bulk->insert($data);
$client->executeBulkWrite('elevi.Negruzzi',$bulk);
echo "Document inserted Successfully";

?>
<a href="index.php">Add document/inregistrare</a>
