<div id="deal">
  <div class="container-fluid">
    <div class="row">
      <div class="big_head">
        <h3><span>lunch</span> and <span>dinner</span> delivery deals</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <div class="container-fluid">
          <div class="row" style="margin-top: 40px;">
            <?php
            $i=1;
                $sql="SELECT * from items LEFT JOIN restaurants on items.restaurant_id=restaurants.restaurant_id ORDER BY items.item_id DESC LIMIT 4";

                $result=mysqli_query($link,$sql);
                while ($row=mysqli_fetch_assoc($result)) {
              ?>
            <div class="col-sm-3">
              <div class="wrapper">
                <div class="inner_wrapper">
                  <div class="bg_wrapper">
                    <div class="bg" style="background: url('assets/img/pizza.jpg');
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;">

                    </div>
                  </div>
                  <div class="content">
                    <div class="icon">
                      <img src="assets/img/1.png" alt="">
                    </div>
                    <div class="text">
                      <h3><?php echo $row['item_name']?>, <?php echo $row['restaurant_name']?></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <?php $i++; } ?>
            <!-- <div class="col-sm-3">
              <div class="wrapper">
                <div class="inner_wrapper">
                  <div class="bg_wrapper">
                    <div class="bg" style="background: url('assets/img/pasta.jpg');
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;">

                    </div>
                  </div>
                  <div class="content">
                    <div class="icon">
                      <img src="assets/img/1.png" alt="">
                    </div>
                    <div class="text">
                      <h3>Lorem ipsum dolor sit amet, consectetur.</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="wrapper">
                <div class="inner_wrapper">
                  <div class="bg_wrapper">
                    <div class="bg" style="background: url('assets/img/pizza.jpg');
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;">

                    </div>
                  </div>
                  <div class="content">
                    <div class="icon">
                      <img src="assets/img/1.png" alt="">
                    </div>
                    <div class="text">
                      <h3>Lorem ipsum dolor sit amet, consectetur.</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="wrapper">
                <div class="inner_wrapper">
                  <div class="bg_wrapper">
                    <div class="bg" style="background: url('assets/img/aloo.jpg');
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;">

                    </div>
                  </div>
                  <div class="content">
                    <div class="icon">
                      <img src="assets/img/1.png" alt="">
                    </div>
                    <div class="text">
                      <h3>Lorem ipsum dolor sit amet, consectetur.</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
