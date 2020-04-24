<?php

  include_once('../../../core/config.php');
  include_once('../../../core/classes/restaurant.php');

  $tosend=[];

  $price=$_POST['price'];
  $type=$_POST['type'];
  $item_id=$_GET['item_id'];
  $restaurant_id=$_GET['restaurant_id'];
  $pricing_id=add_pricing($price,$type, $item_id,$restaurant_id);

  print_r($pricing_id);

?>
