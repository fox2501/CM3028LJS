


<?php
/**
 * Created by PhpStorm.
 * User: liams
 * Date: 24/10/2016
 * Time: 14:12
 */
$username =$_POST["username"];
$password =$_POST["password"];

if ($username == "Liam" && $password == "mysecretpassword"){
    $_SESSION['username'] =$username;
    $_SESSION['access_level'] ='standarduser';
    echo"<p1><a href=\"sessionsHomepage.php\"><button>Click here to go to the Homepage</button></a></p1>";
}