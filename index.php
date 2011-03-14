
<?php

/*** mysql hostname ***/
$hostname = 'localhost:/tmp/mysql/diana.sock';

/*** mysql username ***/
$username = 'jillian';

/*** mysql password ***/
$password = 'GQJEy0ir';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=mysql", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database';
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>