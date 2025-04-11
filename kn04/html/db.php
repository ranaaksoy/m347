<?php
$host = "m347-kn04a-db";  // Der Name des MariaDB-Containers
$user = "user";
$pass = "password";
$dbname = "mydb";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Datenbankverbindung fehlgeschlagen: " . $conn->connect_error);
}
echo "<h1>Erfolgreich mit der Datenbank verbunden!</h1>";
$conn->close();
?>