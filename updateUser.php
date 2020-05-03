<?php

  require './components/connect.php';
  // session_start();
  $user = $_SESSION['user'];

  if(isset($_GET['gold'])) {

    $user['gold'] = $user['gold'] + $_GET['gold'];
    $sql = $db->prepare('UPDATE users set gold = :gold WHERE name = :username');
    $sql->bindParam('gold', $user['gold']);
    $sql->bindParam('username', $user['name']);
    $sql->execute();
    
  }

  if(isset($_GET['points'])) {

    $user['points'] = $user['points'] + $_GET['points'];
    $sql = $db->prepare('UPDATE users set points = :points WHERE name = :username');
    $sql->bindParam('points', $user['points']);
    $sql->bindParam('username', $user['name']);
    $sql->execute();
    
  }
  
  $_SESSION['user'] = $user;
  header("Location: camp.php");
?>