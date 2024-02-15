<?php

$host = 'localhost';
$user = 'nouvel_utilisateur';
$pass = 'mot_de_passe';
$db_name = 'blog';


$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}
