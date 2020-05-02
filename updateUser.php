<?php

  require './components/connect.php';
  session_start();
  $user = $_SESSION['user'];

  if(isset($_POST['addGold'])) {

    print_r($user);
    $gold = $user['gold'] + 1;

    $sql = $db->prepare('UPDATE users set gold = :gold WHERE name = :username');
    $sql->bindParam('gold', $gold);
    $sql->bindParam('username', $user['name']);
    $sql->execute();

    $sql = $db->prepare("SELECT * FROM users WHERE name = ?");
    $sql->bindValue('1', $user['name']);
    $sql->execute();

    $user = $sql->fetchALL(PDO::FETCH_ASSOC)['0'];

    $_SESSION['user'] = $user;

    header("Location: camp.php");
  }

?>