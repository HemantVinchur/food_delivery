<?php
  function add_restaurant($username,$email,$contact){
    global $link;

    $sql="INSERT INTO restaurants (name, email, number) VALUES ('$username','$email', '$contact')";

    $result=mysqli_query($link,$sql);

    if ($result) {

      return mysqli_insert_id($link);
    }else {
      return false;
    }
  }


  function restaurant_profile($id,$name,$email,$contact){
    global $link;
    echo $sql="UPDATE restaurants SET name='$name', email='$email', number='$contact' WHERE id='$id'";
    mysqli_query($link,$sql);
   return mysqli_query($link,$sql);
  }

    function edit_menu($id,$name,$restaurant_id){
      global $link;
      echo $sql="UPDATE menus SET name='$name', restaurant_id='$restaurant_id' WHERE id='$id'";
      mysqli_query($link,$sql);
     return mysqli_query($link,$sql);
    }


        function add_menu($id, $name){
          global $link;
        echo $sql="INSERT INTO menus (name,restaurant_id) VALUES ('$name','$id')";
          mysqli_query($link,$sql);
         return mysqli_query($link,$sql);
        }

    function delete_restaurant($id){
      global $link;
      echo $sql="DELETE FROM restaurants WHERE id='$id'";
      mysqli_query($link,$sql);
     return mysqli_query($link,$sql);
    }

?>
