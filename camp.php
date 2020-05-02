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
    <a href="./updateUser.php?gold=2">Add 2 Gold</a>
    <a href="./updateUser.php?points=10">Add 10 Points</a>
    <button>Shoppes</button>
  </div>
</main>

<?php include './templates/footer.php' ?>