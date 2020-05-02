<?php

  require_once './components/connect.php';

  if (isset($_POST['username']) && isset($_POST['password'])) {
    // echo htmlentities($_POST['username']);
    // echo htmlentities($_POST['password']);
    $username = htmlentities($_POST['username']);
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
?>

<!DOCTYPE html>
<html lang="en">
  <?php include './templates/header.php' ?>

  <main>
    <h2>Create a new user:</h2>
    <form id="newUser" action="./newUser.php" method="POST">
      <label for="username">Username: </label>
      <input type="text" id="username" name="username" required/>
      <label for="password">Password: </label>
      <input type="password" id="password" name="password" required/>
      <button type="submit" id="submitBtn">Submit</button>
    </form>
  </main>

  <?php include './templates/footer.php' ?>