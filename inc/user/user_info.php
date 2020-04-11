<br><br>
<?php
  include_once('core/config.php');
?>

<div class="heading">
  <div class="card layer1">
      <h3>User profile</h3>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Balance</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql="SELECT * from users where id=1";

        $result=mysqli_query($link,$sql);
        while ($row=mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <th scope="row"><?php echo $row['id']?></th>
        <td><?php echo $row['nice_name']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['number']?></td>
        <td><?php echo $row['balance']?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
