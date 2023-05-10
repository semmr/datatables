<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=clientlist", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$data = $conn->query("SELECT * FROM mytable LIMIT 50");
if(!$data) {
    die("error: " . $conn->errorInfo());
}

$theads = $conn->query("DESCRIBE mytable");
?>