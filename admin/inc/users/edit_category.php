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
                    <h3>Update category</h3>
                  </div>
                </div>
                <br>
                <?php
                $category_id=$_GET['category_id'];
                    $sql="SELECT * from categories where category_id=$category_id";

                    $result=mysqli_query($link,$sql);
                    while ($row=mysqli_fetch_assoc($result)) {
                  ?>
                <div class="input_group">
                  <input id="category_name" class="input" type="text" name="category_name" value="<?php echo $row['category_name']?>" required="">
                  <label for="">Category name</label>
                  <span class="highlight"></span>
                </div>
                <br>
                <div class="input_group">
                  <input id="description" class="input" type="text" name="description" value="<?php echo $row['description']?>" required="">
                  <label for="">Description</label>
                  <span class="highlight"></span>
                </div>
                <br>
                <div class="input_group">
                  <input id="city" class="input" type="text" name="city" value="<?php echo $row['city']?>" required="">
                  <label for="">City</label>
                  <span class="highlight"></span>
                </div>
              <?php } ?>
                <br>
                <div class="input_group">
                  <button onclick="do_login(<?php echo $_GET['category_id'] ?>, this)" class="button" type="button" name="button">submit</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</form>
