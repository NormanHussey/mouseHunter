<?php

  // $user = array('name'=>'Guest');
  session_start();
  // require_once './components/connect.php';
  // unset($_SESSION['user']);
  session_destroy();
  header('Location: index.php');
  // echo 'logging out';

?>