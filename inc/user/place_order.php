<br><br>
<?php
  include_once('core/config.php');
?>
<div class='container'>
		<div class='jumbotron'>
<div class="heading">
  <div class="card layer1">
      <h3>Select address</h3>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial no.</th>
      <th scope="col">House no.</th>
      <th scope="col">Area</th>
      <th scope="col">City</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
    $user_id=$_GET['user_id'];
        $sql="SELECT * from address where user_id=$user_id";

        $result=mysqli_query($link,$sql);
        while ($row=mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <th scope="row"><?php echo $i ?></th>
        <td><?php echo $row['house_no']?></td>
        <td><?php echo $row['area']?></td>
        <td><?php echo $row['city']?></td>
        <td><a href="confirm_order.php?user_id=<?php echo $row['user_id'] ?>&item_id=<?php echo $_GET['item_id'] ?>">Select</a></td>
      </tr>
    <?php $i++; } ?>
  </tbody>
</table>
</div>
</div>
