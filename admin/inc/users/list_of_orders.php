<br><br>
<?php
  include_once('../core/config.php');
?>

<div class='container'>
		<div class='jumbotron'>
<div class="heading">
  <div class="card layer1">
      <h3>List of orders</h3>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial no.</th>
      <th scope="col">User name</th>
      <th scope="col">Item name</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
    // $item_id=$_GET['item_id'];
        $sql="SELECT users.*, items.*,place_order.* from place_order LEFT JOIN users on users.id=place_order.user_id LEFT JOIN items ON items.item_id=place_order.item_id";

        $result=mysqli_query($link,$sql);
        while ($row=mysqli_fetch_assoc($result)) {
          $price_sql="SELECT * from pricing inner join items where pricing.item_id=items.item_id";
          $price_result=mysqli_query($link,$price_sql);
          $price_row=mysqli_fetch_assoc($price_result);
      ?>
      <tr>
        <th scope="row"><?php echo $i ?></th>
        <td><?php echo $row['nice_name']?></td>
        <td><?php echo $row['item_name']?></td>
        <td><?php echo $price_row['price']?></td>
      </tr>
    <?php $i++; } ?>
  </tbody>
</table>
</div>
</div>
