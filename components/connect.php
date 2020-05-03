<?php
  session_start();
  $servername = "localhost";

  $username = "norm";
  $dbname = 'mousehunter';
  $password = "Z9V2xAt4gmZrf0pq";
  // $username = "normanhu_admin";
  // $dbname = 'normanhu_mousehunter';
  // $password = "admin";

  try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";

  }
  catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

?>