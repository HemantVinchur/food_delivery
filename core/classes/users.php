<?php
  function add_user($username,$contact,$password,$email){
    global $link;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $permission="user";
    $sql="INSERT INTO users (nice_name, password, number, email, permission) VALUES ('$username','$hashed_password','$contact','$email','$permission')";

    $result=mysqli_query($link,$sql);

    if ($result) {

      return mysqli_insert_id($link);
    }else {
      return false;
    }
  }


      function delete_user($id){
        global $link;
        echo $sql="DELETE FROM users WHERE id='$id'";
        mysqli_query($link,$sql);
       return mysqli_query($link,$sql);
      }

?>
