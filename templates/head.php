<?php

  // session_start();

  if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
  } else {
    $user = array('name'=>'Guest');
  }

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mouse Hunter</title>
</head>
<body>