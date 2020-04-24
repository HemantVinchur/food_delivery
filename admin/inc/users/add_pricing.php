<form id="login_form" action="#" method="post">
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
                    <h3>Add pricing</h3>
                  </div>
                </div>
                <br>
                <div class="input_group">
                  <input id="price" class="input" type="text" name="price" value="" required="">
                  <label for="">Price</label>
                  <span class="highlight"></span>
                </div>
                <br>
                <div class="input_group">
                  <input id="type" class="input" type="text" name="type" value="" required="">
                  <label for="">Type</label>
                  <span class="highlight"></span>
                </div>
                <br>
                <div class="input_group">
                  <button onclick="do_login(<?php echo $_GET['item_id'] ?>, <?php echo $_GET['restaurant_id'] ?>, this)" class="button" type="button" name="button">submit</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</form>
