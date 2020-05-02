<?php

  require_once './components/connect.php';
  require "./classes/Mouse.php";

  $title = 'Mouse Hunter';
  $creator = 'Norman Hussey';

  $brownMouse = new Mouse ('Brown Mouse', 250, 100, 5);
  // echo $brownMouse->getName();


?>

<!DOCTYPE html>
<html lang="en">
  <?php include "./templates/head.php" ?>
  <?php include './templates/nav.php' ?>

  <main>
    <?php if($user['name'] !== 'Guest'): ?>
      <a href="./camp.php">Play!</a>
    <?php else : ?>
      <p>Please login to play</p>
    <?php endif ?>
  </main>

  <?php include "./templates/footer.php" ?>
</body>
</html>