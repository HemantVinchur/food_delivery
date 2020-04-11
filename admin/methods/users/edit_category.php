<?php

  include_once('../../../core/config.php');
  include_once('../../../core/classes/category.php');

  $tosend=[];
  $category_name=$_POST['category_name'];
  $description=$_POST['description'];
  $city=$_POST['city'];
  $category_id=$_GET['category_id'];

  $user_id=edit_category($category_name,$description,$city,$category_id);
  print_r($user_id);
?>
