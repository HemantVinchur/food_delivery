<br><br>
<form id="login_form" action="#" method="post">
  <div class="container">
    		<div class='jumbotron'>
    <div class="row">
      <!-- <div class="col-sm-3">
      </div> -->
      <div class="col-sm-3">
        <div id="login">
          <div class="card layer1">
            <div class="card_wrapper">
              <div class="card_wrapper">
                <div class="input_group">
                  <div class="heading">
                    <h3>Add menu</h3>
                  </div>
                </div>
                <br>
                <div class="input_group">
                  <input id="name" class="input" type="text" name="name" value="" required="">
                  <label for="">Name</label>
                  <span class="highlight"></span>
                </div>
                <br>
                <br>
                <div class="input_group">
                  <button onclick="add_menu(<?php echo $_GET['restaurant_id'] ?>,this)" class="button" type="button" name="button">submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<div class="col-sm-1">
</div>
<div class="col-sm-7">
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
        <th scope="col">Menu</th>
        <th scope="col">Restaurant</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $restaurant_id=$_GET["restaurant_id"];
          $sql="SELECT * from menus inner join restaurants on menus.restaurant_id=restaurants.restaurant_id where menus.restaurant_id='$restaurant_id'";

          $result=mysqli_query($link,$sql);
          while ($row=mysqli_fetch_assoc($result)) {
        ?>
        <tr>
          <th scope="row"><?php echo $row['menu_id']?></th>
          <td><?php echo $row['menu_name']?></td>
          <td><?php echo $row['restaurant_name']?></td>
            <td><a href="edit_menu.php?menu_id=<?php echo $row['menu_id']; ?> & restaurant_id=<?php echo $row['restaurant_id']; ?>">Edit</a>  /  <a href="add_item.php?restaurant_id=<?php echo $row['restaurant_id']; ?> & menu_id=<?php echo $row['menu_id']; ?>">Add item</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  </div>
  </div>

</div>
</div>
  </div>
  </div>
</form>
