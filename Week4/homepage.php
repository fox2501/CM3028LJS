

<?php
/**
 * Created by PhpStorm.
 * User: liams
 * Date: 24/10/2016
 * Time: 14:19
 */
if(isset($_COOKIE['username'])){
    echo"Your Username is " . $_COOKIE['username'] . " and ";
}
if(isset($_COOKIE['access_level'])){
    echo"Your Access Level is " . $_COOKIE['access_level'];
}

function displayAccessLevelINformation($accessLevel){
    if($accessLevel == "standarduser"){
        echo"<p>You are currently logged in as a standard user</p>";
    }
    elseif ($accessLevel == "root"){
        echo"<p>You are currently logged in as a root user</p>";
        echo"<p>You now have access to additional administrative features</p>";
    }
}