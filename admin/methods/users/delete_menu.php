<?php

  include_once('../../../core/config.php');
  include_once('../../../core/classes/restaurant.php');

  $tosend=[];
  $id=$_GET['id'];

  $user_id=delete_menu($id);
  print_r($user_id);
?>
