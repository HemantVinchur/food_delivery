<?php

  include_once('../../core/config.php');
  include_once('../../core/classes/users.php');

  $tosend=[];
  $user_id=$_GET['user_id'];
  $item_id=$_GET['item_id'];

  $address_id=confirm_order($user_id,$item_id);

  print_r($address_id);

?>
