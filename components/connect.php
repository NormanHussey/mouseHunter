<?php

  $servername = "localhost";
  $username = "norm";
  $password = "admin12345";

  try {
    $db = new PDO("mysql:host=$servername;dbname=mouseHunter;charset=utf8mb4", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

  }
  catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

?>