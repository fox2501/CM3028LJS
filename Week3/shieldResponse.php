<?php
/**
 * Created by PhpStorm.
 * User: liams
 * Date: 17/10/2016
 * Time: 14:31
 */

$forename =$_POST["forename"];
$surname =$_POST["surname"];
$gender =$_POST["gender"];
$superPower =$_POST["superPower"];

echo $forename.$surname. " is " . $gender . " and has the Super Power of " . $superPower;