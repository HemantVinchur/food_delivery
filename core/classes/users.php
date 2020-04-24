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


        function add_address($id,$house_no,$area,$city){
          global $link;
          $sql="INSERT INTO address (house_no, area, city, user_id) VALUES ('$house_no','$area','$city','$id')";

          $result=mysqli_query($link,$sql);

          if ($result) {

            return mysqli_insert_id($link);
          }else {
            return false;
          }
        }
          function confirm_order($user_id,$item_id){
                  global $link;
                  echo $sql="INSERT INTO place_order (user_id, item_id) VALUES ('$user_id','$item_id')";

                  $result=mysqli_query($link,$sql);

                  if ($result) {

                    return mysqli_insert_id($link);
                  }else {
                    return false;
                  }
                }

      function list_of_menus($restaurant_id){
        global $link;

        $sql="SELECT * from menus where restaurant_id='$restaurant_id'";
        $result=mysqli_query($link,$sql);

        $row_arr=[];
        while ($row=mysqli_fetch_assoc($result)) {
          array_push($row_arr,$row);
        }
        return $row_arr;
      }


?>
