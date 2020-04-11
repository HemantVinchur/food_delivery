<?php

  include_once('../../../core/config.php');
  include_once('../../../core/classes/category.php');

  $tosend=[];

  $category_name=$_POST['category_name'];
  $description=$_POST['description'];
  $city=$_POST['city'];
  $user_id=add_category($category_name,$description,$city);

  print_r($user_id);

?>
