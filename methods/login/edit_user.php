<?php

  include_once('../../core/config.php');
  include_once('../../core/classes/profile.php');

  $tosend=[];
  $name=$_POST['name'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $id=$_GET['id'];

  $user_id=profile($id,$name,$password,$email,$contact);
  print_r($user_id);
?>
