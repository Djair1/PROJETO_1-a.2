<?php
$servername = "sql300.epizy.com";
$username = "epiz_28957266";
$password = "dM6qsmiiwSqI";
$dbname = "epiz_28957266_at2";

try {

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
} catch(PDOException $e) {

  echo $sql . "<br>" . $e->getMessage();
  
}

?>