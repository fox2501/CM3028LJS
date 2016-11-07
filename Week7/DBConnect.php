<?php
/**
 * Created by PhpStorm.
 * User: liams
 * Date: 10/10/2016
 * Time: 14:33
 */
//connect to csdm webserver and select database

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