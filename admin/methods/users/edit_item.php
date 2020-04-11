<?php

  include_once('../../../core/config.php');
  include_once('../../../core/classes/restaurant.php');

  $tosend=[];
  $name=$_POST['name'];
  // $restaurant_name=$_POST['restaurant'];
  $item_id=$_GET['item_id'];
  $menu_id=$_GET['menu_id'];

  $user_id=edit_item($item_id,$name,$menu_id);
  print_r($user_id);
?>
