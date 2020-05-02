<?php

  // $user = array('name'=>'Guest');
  echo 'logging out';
  session_start();
  session_destroy();
  header('Location: index.php');

?>