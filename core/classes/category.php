<?php
function add_category($category_name,$description,$city){
  global $link;
  $sql="INSERT INTO categories (category_name, description, city) VALUES ('$category_name','$description', '$city')";

  $result=mysqli_query($link,$sql);

  if ($result) {

    return mysqli_insert_id($link);
  }else {
    return false;
  }
}


function edit_category($category_name,$description,$city,$category_id){
  global $link;
  echo $sql="UPDATE categories SET category_name='$category_name', description='$description', city='$city' WHERE category_id='$category_id'";
  mysqli_query($link,$sql);
 return mysqli_query($link,$sql);
}

?>
