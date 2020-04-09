<?php

  include_once('../../../core/config.php');
  include_once('../../../core/classes/users.php');

  $tosend=[];
  $id=$_GET['id'];

  $user_id=delete_user($id);
  print_r($user_id);
?>
