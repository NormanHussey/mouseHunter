<?php

  require_once './components/connect.php';
  // session_start();

  if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = htmlentities($_POST['username']);
    $sql = $db->prepare("SELECT * FROM users WHERE name = ?");
    $sql->bindValue('1', $username);
    $sql->execute();

    $user = $sql->fetchALL(PDO::FETCH_ASSOC)['0'];
    $passwordHash = $user['password'];

    if (password_verify($_POST['password'], $passwordHash)) {
      $_SESSION['user'] = $user;
      header('Location: index.php');
    } else {
      echo 'Failure!';
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
  <?php include "./templates/head.php" ?>
  <?php include './templates/nav.php' ?>

  <main>
    <h2>Login:</h2>
    <form id="userLogin" action="./login.php" method="POST">
      <label for="username">Username: </label>
      <input type="text" id="username" name="username" required/>
      <label for="password">Password: </label>
      <input type="password" id="password" name="password" required/>
      <button type="submit" id="submitBtn">Submit</button>
    </form>
  </main>

  <?php include './templates/footer.php' ?>