<br><br>
<?php
  include_once('core/config.php');
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
      <th scope="col">Serial no.</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">City</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
        $sql="SELECT * from restaurants LEFT JOIN categories on restaurants.category_id=categories.category_id";

        $result=mysqli_query($link,$sql);
        while ($row=mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <th scope="row"><?php echo $i ?></th>
        <td><?php echo $row['restaurant_name']?></td>
        <td><?php echo $row['category_name']?></td>
        <td><?php echo $row['city']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['number']?></td>
        <td><a href="view_restaurant.php?restaurant_id=<?php echo $row['restaurant_id']; ?>">View</a></td>
      </tr>
    <?php $i++; } ?>
  </tbody>
</table>
</div>
</div>
