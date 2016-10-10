<?php
/**
 * Created by PhpStorm.
 * User: liams
 * Date: 10/10/2016
 * Time: 15:03
 */
$db = new mysqli(
    'eu-cdbr-azure-west-a.cloudapp.net',
    'b9cfe9e452edf8',
    '26a3bb97',
    'ljstewdb'
);
//test if connection was established and print any errors
if($db->connect_errno){
    die('ConnectFailed['.$db->connect_error.']');
}

$sql_query = "SELECT *";

$result=$db->query($sql_query);

while($row = $result->fetch_array()){
    $movieTitle = $row['title'];
    $yearReleased = $row['yearReleased'];
    $productionStudio = $row['productionStudio'];
    $notes = $row['notes'];
    echo "<p>".$movieTitle.$yearReleased.$productionStudio.$notes."</p>";
}

$result->close();

$db->close();