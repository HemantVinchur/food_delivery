<?php

  include_once('../../../core/config.php');
  include_once('../../../core/classes/restaurant.php');

  $tosend=[];

  $username=$_POST['username'];
  $contact=$_POST['contact'];
  $email=$_POST['email'];
  $category_id=$_GET['category_id'];
  $user_id=add_restaurant($username,$email,$contact,$category_id);

  print_r($user_id);

?>
