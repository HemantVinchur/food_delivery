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
                  <button onclick="do_login(<?php echo $_GET['id'] ?>,this)" class="button" type="button" name="button">submit</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</form>
