<?php
  function add_restaurant($username,$email,$contact,$category_id){
    global $link;

    $sql="INSERT INTO restaurants (restaurant_name, email, number,category_id) VALUES ('$username','$email', '$contact','$category_id')";

    $result=mysqli_query($link,$sql);

    if ($result) {

      return mysqli_insert_id($link);
    }else {
      return false;
    }
  }


  function restaurant_profile($restaurant_id,$name,$email,$contact){
    global $link;
    echo $sql="UPDATE restaurants SET restaurant_name='$name', email='$email', number='$contact' WHERE restaurant_id='$restaurant_id'";
    mysqli_query($link,$sql);
   return mysqli_query($link,$sql);
  }

    function edit_menu($menu_id,$name,$restaurant_id){
      global $link;
      echo $sql="UPDATE menus SET menu_name='$name', restaurant_id='$restaurant_id' WHERE menu_id='$menu_id'";
      mysqli_query($link,$sql);
     return mysqli_query($link,$sql);
    }


        function edit_item($item_id,$name,$menu_id){
          global $link;
          echo $sql="UPDATE items SET item_name='$name', menu_id='$menu_id' WHERE item_id='$item_id'";
          mysqli_query($link,$sql);
         return mysqli_query($link,$sql);
        }

        function add_menu($restaurant_id, $name){
          global $link;
        echo $sql="INSERT INTO menus (menu_name,restaurant_id) VALUES ('$name','$restaurant_id')";
          // mysqli_query($link,$sql);
         return mysqli_query($link,$sql);
        }


                function add_pricing($price,$type, $item_id,$restaurant_id){
                  global $link;
                echo $sql="INSERT INTO pricing (item_id,type,restaurant_id,price) VALUES ('$item_id','$type','$restaurant_id','$price')";
                  // mysqli_query($link,$sql);
                 return mysqli_query($link,$sql);
                }

                function add_item($menu_id,$restaurant_id, $name){
                  global $link;
                echo $sql="INSERT INTO items (item_name,restaurant_id,menu_id) VALUES ('$name','$restaurant_id','$menu_id')";
                  // mysqli_query($link,$sql);
                 return mysqli_query($link,$sql);
                }
    function delete_restaurant($restaurant_id){
      global $link;
      echo $sql="DELETE FROM restaurants WHERE restaurant_id='$restaurant_id'";
      mysqli_query($link,$sql);
     return mysqli_query($link,$sql);
    }

    function delete_menu($menu_id){
      global $link;
      echo $sql="DELETE FROM menus WHERE menu_id='$menu_id'";
      mysqli_query($link,$sql);
     return mysqli_query($link,$sql);
    }

?>
