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
                <div class="input_group">
                  <input id="name" class="input" type="text" name="name" value="" required="">
                  <label for="">Name</label>
                  <span class="highlight"></span>
                </div>
                <br>
                <div class="input_group">
                  <button onclick="do_login(<?php echo $_GET['id'] ?>,<?php echo $_GET['restaurant_id'] ?>, this)" class="button" type="button" name="button">submit</button>
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
                $sql="SELECT * from menus where restaurant_id='$restaurant_id'";

                $result=mysqli_query($link,$sql);
                while ($row=mysqli_fetch_assoc($result)) {
                  // $restaurant_id=$row['restaurant_id'];
                  $sql="SELECT * from restaurants where id='$restaurant_id'";
                  $restaurant_result=mysqli_query($link,$sql);
                  $restaurant=mysqli_fetch_assoc($restaurant_result);
              ?>
              <tr>
                <th scope="row"><?php echo $row['id']?></th>
                <td><?php echo $row['name']?></td>
                <td><?php echo $restaurant['name']?></td>
                  <td><a href="edit_menu.php?id=<?php echo $row['id']; ?> & restaurant_id=<?php echo $row['restaurant_id']; ?>">Edit</a> / <a href="delete_menu.php?id=<?php echo $row['id']; ?> & restaurant_id=<?php echo $row['restaurant_id']; ?>">Delete</a></td>
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
