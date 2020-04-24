<br><br>
<?php
  include_once('core/config.php');
?>
<div class="container">
  <h2>Restaurant details</h2>
  <div class="panel-group">
    <div class="panel panel-default">
      <?php
      $i=1;
      $restaurant_id=$_GET['restaurant_id'];
          $sql="SELECT * from restaurants LEFT JOIN categories on restaurants.category_id=categories.category_id where restaurants.restaurant_id=$restaurant_id";

          $result=mysqli_query($link,$sql);
          while ($row=mysqli_fetch_assoc($result)) {
        ?>
      <div class="panel-heading">Restaurant name-: <?php echo $row['restaurant_name']?></div>
      <div class="panel-body">Category name-: <?php echo $row['category_name']?><a href="list_of_menus.php?restaurant_id=<?php echo $row['restaurant_id']; ?>">Menu</a></div>
      <div class="panel-body">City-: <?php echo $row['city']?></div>
      <div class="panel-body">Email-: <?php echo $row['email']?></div>
      <div class="panel-body">Contact-: <?php echo $row['number']?></div>
      <?php $i++; } ?>
    </div>
    </div>
    </div>
