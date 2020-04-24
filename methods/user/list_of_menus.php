<?php
  include_once('../../core/config.php');
  include_once('../../core/classes/login.php');
  include_once('../../core/classes/users.php');

  $tosend=[];

  $login_token=$_POST['login_token'];
  $check_user=check_login($login_token);
$restaurant_id=$_POST['restaurant_id'];
  if ($check_user) {
    $tosend['logged_in']='true';
    $tosend['list_of_menus']=list_of_menus($restaurant_id);
  }else {
    $tosend['logged_in']='false';
  }

  print_r(json_encode($tosend));
?>
