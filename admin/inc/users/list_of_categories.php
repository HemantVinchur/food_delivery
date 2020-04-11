<br><br>
<?php
  include_once('../core/config.php');
?>
<div class='container'>
		<div class='jumbotron'>
<div class="heading">
  <div class="card layer1">
      <h3>List of categories</h3>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Category name</th>
      <th scope="col">Description</th>
      <th scope="col">City</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql="SELECT * from categories";

        $result=mysqli_query($link,$sql);
        while ($row=mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <th scope="row"><?php echo $row['category_id']?></th>
        <td><?php echo $row['category_name']?></td>
        <td><?php echo $row['description']?></td>
        <td><?php echo $row['city']?></td>
        <td><a href="edit_category.php?category_id=<?php echo $row['category_id']; ?>">Edit</a> /  <a href="add_restaurant.php?category_id=<?php echo $row['category_id']; ?>">Add restaurants</a> / <a href="delete_category.php?category_id=<?php echo $row['category_id']; ?>">Delete</a></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</div>
