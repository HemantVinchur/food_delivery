<?php

  include_once('../../../core/config.php');
  include_once('../../../core/classes/restaurant.php');

  $tosend=[];

  $name=$_POST['name'];
  $restaurant_id=$_GET['restaurant_id'];
  $user_id=add_menu($restaurant_id, $name);

  print_r($user_id);

?>
