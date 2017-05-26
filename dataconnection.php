<?php
//The params are sent for the POST request in the android App SnortDroid
$host=$_POST['host'];
$user=$_POST['user'];
$pass=$_POST['pass'];
//The data connection
$server="$host";
$user="$user";
$password="$pass";
$BD="snort"; //The default name for the database is Snort, you can change if you need it. 

?>