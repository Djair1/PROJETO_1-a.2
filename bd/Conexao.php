<?php
$servername = "localhost";
$username = "id17111061_djair";
$password = "23568989";
$dbname = "id17111061_at1";

try {

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
} catch(PDOException $e) {

  echo $sql . "<br>" . $e->getMessage();
  
}

?>