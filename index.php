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
  <?php include "./templates/header.php" ?>

    <main>
      <?php if ($user['name'] === 'Guest') { ?>
        <a href="./newUser.php">Sign Up</a>
        <a href="./login.php">Login</a>
      <?php } else { ?>
        <a href="./logout.php">Logout</a>
      <?php } ?>
    </main>

  <?php include "./templates/footer.php" ?>
</body>
</html>