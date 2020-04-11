<?php

  include_once('../../core/config.php');
  include_once('../../core/classes/profile.php');

  $tosend=[];
  $id=3;
  $username=$_POST['username'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $user_id=profile($id,$username,$password,$email,$contact);

  print_r($user_id);

?>
