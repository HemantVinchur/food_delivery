<br><br>
<?php
  include_once('../core/config.php');
?>
<div class='container'>
		<div class='jumbotron'>
<div class="heading">
  <div class="card layer1">
      <h3>List of restaurants</h3>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql="SELECT * from restaurants";

        $result=mysqli_query($link,$sql);
        while ($row=mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <th scope="row"><?php echo $row['id']?></th>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['number']?></td>
        <td><a href="edit_restaurant.php?id=<?php echo $row['id']; ?>">Edit</a> / <a href="delete_restaurant.php?id=<?php echo $row['id']; ?>">Delete</a> / <a href="add_menu.php?id=<?php echo $row['id']; ?>">Add menu</a></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</div>
