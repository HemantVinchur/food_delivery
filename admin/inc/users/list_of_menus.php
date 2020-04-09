<br><br>
<?php
  include_once('../core/config.php');
?>
<div class='container'>
		<div class='jumbotron'>
<div class="heading">
  <div class="card layer1">
      <h3>List of menus</h3>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Restaurant</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql="SELECT * from menus";

        $result=mysqli_query($link,$sql);
        while ($row=mysqli_fetch_assoc($result)) {
          $restaurant_id=$row['restaurant_id'];
          $sql="SELECT * from restaurants where id='$restaurant_id'";
          $result=mysqli_query($link,$sql);
          $restaurant=mysqli_fetch_assoc($result);
      ?>
      <tr>
        <th scope="row"><?php echo $row['id']?></th>
        <td><?php echo $row['name']?></td>
        <td><?php echo $restaurant['name']?></td>
          <td><a href="edit_menu.php?id=<?php echo $row['id']; ?> & restaurant_id=<?php echo $row['restaurant_id']; ?>">Edit</a> / <a href="delete_menu.php?id=<?php echo $row['id']; ?> & restaurant_id=<?php echo $row['restaurant_id']; ?>">Delete</a></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</div>
