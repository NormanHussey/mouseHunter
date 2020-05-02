<?php

  require_once './components/connect.php';

  $username = '';

  if (isset($_POST['username']) && isset($_POST['password'])) {

    $sql = $db->prepare("SELECT name FROM users");
    $sql->bindValue('1', $username);
    $sql->execute();

    $allUserNames = $sql->fetchALL(PDO::FETCH_COLUMN);

    $username = htmlentities($_POST['username']);

    $usernameFound = false;

    foreach($allUserNames as $name) {
      if ($username === $name) {
        $usernameFound = true;
        break;
      }
    }

    if (!$usernameFound) {
      $password = password_hash(htmlentities($_POST['password']), PASSWORD_DEFAULT);
      $stmt = $db->prepare('INSERT INTO users (name, password) VALUES (:username, :password)');
      $stmt->bindParam(':username', $username);
      $stmt->bindParam(':password', $password);
      $stmt->execute();
  
      $sql = $db->prepare("SELECT * FROM users WHERE name = ?");
      $sql->bindValue('1', $username);
      $sql->execute();
  
      $user = $sql->fetchALL(PDO::FETCH_ASSOC)['0'];
      session_start();
      $_SESSION['user'] = $user;
  
      header("Location: index.php");

    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <?php include "./templates/head.php" ?>
  <?php include './templates/nav.php' ?>

  <main>
    <h2>Create a new user:</h2>
    <form id="newUser" action="./newUser.php" method="POST">
      <label for="username">Username: </label>
      <input type="text" id="username" name="username" required minlength="2"/>
      <?php if(isset($usernameFound) && $usernameFound) { ?>
        <p><?= "$username already exists" ?></p>
      <?php } ?>
      <label for="password">Password: </label>
      <input type="password" id="password" name="password" required minlength="4"/>
      <button type="submit" id="submitBtn">Submit</button>
    </form>
  </main>

  <?php include './templates/footer.php' ?>