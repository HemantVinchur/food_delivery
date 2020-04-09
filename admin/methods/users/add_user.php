<?php

  include_once('../../../core/config.php');
  include_once('../../../core/classes/users.php');

  $tosend=[];

  $username=$_POST['username'];
  $password=$_POST['password'];
  $contact=$_POST['contact'];
  $email=$_POST['email'];

  $user_id=add_user($username,$contact,$password,$email);

  print_r($user_id);

?>
