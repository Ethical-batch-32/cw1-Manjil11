<?php
include('config.php');
if(!isset($_SESSION['is_login'])){
  $_SESSION['is_login'] = true;
  header('location:  process_login.php');
  die();
}
?>
<a href="logout.php">logout</a>