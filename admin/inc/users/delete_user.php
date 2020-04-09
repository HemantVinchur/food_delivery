<br><br>
<?php
  include_once('../core/config.php');
?>
<body onload="do_login(<?php echo $_GET['id'] ?>)"></body>
<div class="heading">
  <div class="card layer1">
      <h3>List of users</h3>
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
        $sql="SELECT * from users";

        $result=mysqli_query($link,$sql);
        while ($row=mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <th scope="row"><?php echo $row['id']?></th>
        <td><?php echo $row['nice_name']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['number']?></td>
        <td><a href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a> / <a href="delete_user.php?id=<?php echo $row['id']; ?>">Delete</a></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<body location.reload() ></body>
