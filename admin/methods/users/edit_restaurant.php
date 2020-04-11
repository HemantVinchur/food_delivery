<?php

  include_once('../../../core/config.php');
  include_once('../../../core/classes/restaurant.php');

  $tosend=[];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $restaurant_id=$_GET['restaurant_id'];

  $user_id=restaurant_profile($restaurant_id,$name,$email,$contact);
  print_r($user_id);
?>
