<?php

  include_once('../../../core/config.php');
  include_once('../../../core/classes/restaurant.php');

  $tosend=[];

  $name=$_POST['name'];
  $id=$_GET['id'];
  $user_id=add_menu($id, $name);

  print_r($user_id);

?>
