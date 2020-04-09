<br><br>
<?php
  include_once('../core/config.php');
?>
<form id="edit_user_form" action="#" method="post">
  <div class="container">
    		<div class='jumbotron'>
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">
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
                <label for="cars">Choose a restaurant:</label>
                <?php
                // $restaurant_id=$_GET['restaurant_id'];
                    $sql="SELECT * from restaurants";
                    $result=mysqli_query($link,$sql);
                    while ($row=mysqli_fetch_assoc($result)) {
                  ?>
  <select id="restaurant">
    <option value="<?php $row['name'] ?>"><?php $row['name'] ?></option>
    <?php $restaurant_id= $row['restaurant_id'] ?>
  </select>
<?php } ?>
                <br>
                <div class="input_group">
                  <button onclick="do_login(<?php echo $_GET['id'] ?>, this)" class="button" type="button" name="button">submit</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
</form>
