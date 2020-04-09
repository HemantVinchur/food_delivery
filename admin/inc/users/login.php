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
                    <h3>Sign in</h3>
                  </div>
                </div>
                <br>
                <div class="input_group">
                  <input id="username" class="input" type="text" name="username" value="" required="">
                  <label for="">username</label>
                  <span class="highlight"></span>
                </div>
                <br>
                <div class="input_group">
                  <input id="password" class="input" type="password" name="password" value="" required="">
                  <label for="">password</label>
                  <span class="highlight"></span>
                </div>
                <br>
                <div class="input_group">
                  <button onclick="do_login(this)" class="button" type="button" name="button">sign in</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</form>
