<?php

  include_once('../../core/config.php');
  include_once('../../core/classes/users.php');

  $tosend=[];
  $id=$_GET['id'];
  $house_no=$_POST['house_no'];
  $area=$_POST['area'];
  $city=$_POST['city'];

  $address_id=add_address($id,$house_no,$area,$city);

  print_r($address_id);

?>
