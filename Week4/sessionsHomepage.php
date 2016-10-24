

<?php
/**
 * Created by PhpStorm.
 * User: liams
 * Date: 24/10/2016
 * Time: 14:19
 */
if($_SESSION['username'] = 'Liam'){
    echo"Your Username is " . $_SESSION['username'] . " and ";
}
if($_SESSION['access_level'] == 'standarduser'){
    echo"Your Access Level is " . $_SESSION['access_level'];
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
displayAccessLevelINformation($_SESSION['access_level']);