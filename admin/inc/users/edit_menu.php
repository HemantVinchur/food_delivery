<br><br>
<?php
  include_once('../core/config.php');
?>
<form id="edit_user_form" action="#" method="post">
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
                    <h3>Update Menu</h3>
                  </div>
                </div>
                <br>
                <?php
                $menu_id=$_GET['menu_id'];
                    $sql="SELECT * from menus where menu_id=$menu_id";

                    $result=mysqli_query($link,$sql);
                    while ($row=mysqli_fetch_assoc($result)) {
                  ?>
                <div class="input_group">
                  <input id="name" class="input" type="text" name="name" value="<?php echo $row['menu_name']?>" required="">
                  <label for="">Name</label>
                  <span class="highlight"></span>
                </div>
                <br>
                <?php } ?>
                <div class="input_group">
                  <button onclick="do_login(<?php echo $menu_id ?>,<?php echo $_GET['restaurant_id'] ?>, this)" class="button" type="button" name="button">submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-1">
      </div>
      <div class="col-sm-7">

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
            // $restaurant_id=$_GET['restaurant_id'];
                $restaurant_sql="SELECT * from menus inner join restaurants on menus.restaurant_id=restaurants.restaurant_id where menu_id='$menu_id'";

                $restaurant_result=mysqli_query($link,$restaurant_sql);
                while ($restaurant_row=mysqli_fetch_assoc($restaurant_result)) {
                  $i=1;
              ?>
              <tr>
                <th scope="row"><?php echo $i ?></th>
                <td><?php echo $restaurant_row['menu_name']?></td>
                <td><?php echo $restaurant_row['restaurant_name']?></td>
                  <td><a href="edit_menu.php?menu_id=<?php echo $restaurant_row['menu_id']; ?> & restaurant_id=<?php echo $restaurant_row['restaurant_id']; ?>">Edit</a> / <a href="delete_menu.php?id=<?php echo $restaurant_row['menu_id']; ?> & restaurant_id=<?php echo $restaurant_row['restaurant_id']; ?>">Delete</a></td>
              </tr>
            <?php $i++;} ?>
          </tbody>
        </table>
        </div>
        </div>

      </div>


    </div>
  </div>
  </div>
</form>
