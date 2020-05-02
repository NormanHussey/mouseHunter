<header>
  <nav>
    <ul>
      <?php if ($user['name'] === 'Guest') { ?>
        <li>
          <a href="./newUser.php">Sign Up</a>
        </li>
        <li>
          <a href="./login.php">Login</a>
        </li>
      <?php } else { ?>
        <li>
          <p>Hello, <?= $user['name'] ?>.</p>
        </li>
        <li>
          <a href="./logout.php">Logout</a>
        </li>
      <?php } ?>
    </ul>
  </nav>
</header>