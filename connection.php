<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'members';

try {
    $con = new PDO(
        "mysql:host=$servername; dbName=$db_name",
        $username,
        $password
    );

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connection Success';
} catch (PDOException $e) {
    echo 'Error in connection' . $e->getMEssage();
}

?>
