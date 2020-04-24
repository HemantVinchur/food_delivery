<br><br>
<?php
  include_once('../core/config.php');
?>
<form id="edit_user_form" action="#" method="post">
  <div class="container">
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
                    <h3>Update Restaurant Profile</h3>
                  </div>
                </div>
                <br>

                <?php
                $restaurant_id=$_GET['restaurant_id'];
                    $sql="SELECT * from restaurants where restaurant_id=$restaurant_id";

                    $result=mysqli_query($link,$sql);
                    while ($row=mysqli_fetch_assoc($result)) {
                  ?>
                <div class="input_group">
                  <input id="name" class="input" type="text" name="name" value="<?php echo $row['restaurant_name']?>" required="">
                  <label for="">Name</label>
                  <span class="highlight"></span>
                </div>
                <br>
                <div class="input_group">
                  <input id="email" class="input" type="email" name="email" value="<?php echo $row['email']?>" required="">
                  <label for="">Email</label>
                  <span class="highlight"></span>
                </div>
                <br>
                <div class="input_group">
                  <input id="contact" class="input" type="number" name="contact" value="<?php echo $row['number']?>" required="">
                  <label for="">Contact</label>
                  <span class="highlight"></span>
                </div>
              <?php } ?>
                <br>
                <div class="input_group">
                  <button onclick="do_login(<?php echo $_GET['restaurant_id'] ?>, this)" class="button" type="button" name="button">submit</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</form>
