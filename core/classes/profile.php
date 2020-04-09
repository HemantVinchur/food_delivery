<?php


  function profile($id,$name,$password,$email,$contact){
    global $link;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    echo $sql="UPDATE users SET nice_name='$name', password='$hashed_password', number='$contact', email='$email' WHERE id='$id'";
    mysqli_query($link,$sql);
   return mysqli_query($link,$sql);
  }


?>
