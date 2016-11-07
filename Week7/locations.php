<?php

// Start XML file, create parent node
$db = new mysqli(
    'eu-cdbr-azure-west-a.cloudapp.net',
    'bef6fb84bef4ce',
    'd5326f0f',
    'cm3038ljsdb'
);
//test if connection was established and print any errors
if($db->connect_errno){
    die('ConnectFailed['.$db->connect_error.']');

}

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

// Select all the rows in the markers table

$query = "SELECT * FROM markers WHERE 1";
$result = $db->query($query);
if (!$result) {
die('Nothing in result: ');
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = $result->fetch_array()){
// ADD TO XML DOCUMENT NODE
$node = $dom->createElement("marker");
$newnode = $parnode->appendChild($node);
$newnode->setAttribute("name",$row['name']);
$newnode->setAttribute("address", $row['address']);
$newnode->setAttribute("lat", $row['lat']);
$newnode->setAttribute("lng", $row['lng']);
$newnode->setAttribute("type", $row['type']);
}

$result->close();
$db->close();

echo $dom->saveXML();


?>

