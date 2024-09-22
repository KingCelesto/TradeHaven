<?php
$hostname="localhost";
$username="KingCelesto";
$password="1357";
$database="trade_db";
$db_cont =mysqli_connect($hostname, $username, $password, $database);

if ($db_cont) {
    
}
else {
    echo "False";
}
?>