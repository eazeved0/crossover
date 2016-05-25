<?php

// Could also use getenv('MYSQL_PORT_3306_TCP_ADDR')
// But recommended to use the host entry which survives server restart
$dsn = 'mysql:host='.gethostbyname('mysql');
$usr = 'root';
$pwd = 'toor';

try {
    $dbh = new PDO($dsn, $usr, $pwd);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

echo 'Connection made!!!';
