<br><br>
<?php
  include_once('core/config.php');
?>
<div class='container'>
		<div class='jumbotron'>
<div class="heading">
  <div class="card layer1">
      <h3>List of items</h3>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Item name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
    $menu_id=$_GET['menu_id'];
        $sql="SELECT * from items where items.menu_id=$menu_id";
        $result=mysqli_query($link,$sql);
        while ($row=mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <th scope="row"><?php echo $i ?></th>
        <td><?php echo $row['item_name']?></td>
        <td><a href="place_order.php?item_id=<?php echo $row['item_id'] ?>&user_id=<?php echo $_GET['user_id'] ?>">Place order</a></td>
      </tr>
    <?php $i++;} ?>
  </tbody>
</table>
</div>
</div>
