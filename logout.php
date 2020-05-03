<?php

  // $user = array('name'=>'Guest');
  session_start();
  session_destroy();
  echo 'logging out';
  header('Location: index.php');

?>