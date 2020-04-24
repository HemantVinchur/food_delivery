<?php

  include_once('../../../core/config.php');
  include_once('../../../core/classes/restaurant.php');

  $tosend=[];
  $name=$_POST['name'];
  // $restaurant_name=$_POST['restaurant'];
  $id=$_GET['menu_id'];
  $restaurant_id=$_GET['restaurant_id'];

  $user_id=edit_menu($id,$name,$restaurant_id);
  print_r($user_id);
?>
