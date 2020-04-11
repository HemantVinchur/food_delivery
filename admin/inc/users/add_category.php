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
                    <h3>Add category</h3>
                  </div>
                </div>
                <br>
                <div class="input_group">
                  <input id="category_name" class="input" type="text" name="category_name" value="" required="">
                  <label for="">Category name</label>
                  <span class="highlight"></span>
                </div>
                <br>
                <div class="input_group">
                  <input id="description" class="input" type="text" name="description" value="" required="">
                  <label for="">Description</label>
                  <span class="highlight"></span>
                </div>
                <br>
                <div class="input_group">
                  <input id="city" class="input" type="text" name="city" value="" required="">
                  <label for="">City</label>
                  <span class="highlight"></span>
                </div>
                <br>
                <div class="input_group">
                  <button onclick="add_category(this)" class="button" type="button" name="button">submit</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</form>
