<?php
$user = 'root';
$pass = '';
$host = 'localhost';
$database = 'myu';

try{ 
    $conn = new PDO("mysql:host=".$host.";dbname=".$database, $user, $pass);
}
catch (PDOException $e){
    exit("Error: " . $e->getMessage());
}

?>