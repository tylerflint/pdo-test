
<?php

/*** mysql hostname ***/
$hostname = 'localhost';

$socket = '/tmp/mysql/diana.sock';

$database = 'diana';

/*** mysql username ***/
$username = 'jillian';

/*** mysql password ***/
$password = 'GQJEy0ir';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$database;unix_socket=$socket", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database';
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>