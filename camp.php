<?php require './components/connect.php' ?>
<?php include './templates/head.php' ?>
<?php include './templates/nav.php' ?>
<?php include './classes/Mouse.php' ?>
<?php include './classes/Traps.php' ?>

<main>
  <div class="wrapper">
    <p>Gold: <?= $user['gold']?></p>
    <p>Points: <?= $user['points']?></p>
    <button>Hunt Now</button>
    <div class="playArea">
      <div class="trap">

      </div>
      <div class="cheese">

      </div>
    </div>
    <form action="./updateUser.php" method="POST">
      <input type="submit" name="addGold" id="addGold" value="Add Gold" />
    </form>
    <button>Shoppes</button>
  </div>
</main>

<?php include './templates/footer.php' ?>