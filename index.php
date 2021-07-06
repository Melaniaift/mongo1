<?php
require_once 'connection.php';
$query = new MongoDB\Driver\Query([]);
$rows = $client->executeQuery("elevi.Negruzzi",$query);

foreach($rows as $doc){
    echo $doc->nume."<br/>";
}
?>
<a href="add.php">Add document/inregistrare</a>
<a href="update.php">Update</a>
<a href="delete.php">Delete</a>