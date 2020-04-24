<br><br>
<form id="login_form" action="#" method="post">
  <div class="container">
    		<div class='jumbotron'>
    <div class="row">
      <div class="col-sm-3">
        <div id="login">
          <div class="card layer1">
            <div class="card_wrapper">
              <div class="card_wrapper">
                <div class="input_group">
                  <div class="heading">
                    <h3>Add item</h3>
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
                  <button onclick="add_item(<?php echo $_GET['menu_id'] ?>,<?php echo $_GET['restaurant_id'] ?>,this)" class="button" type="button" name="button">submit</button>
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
        <h3>List of items</h3>
    </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Item</th>
        <th scope="col">Menu</th>
        <th scope="col">Restaurant</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $menu_id=$_GET["menu_id"];
          $sql="SELECT items.*, menus.menu_id as m_id, menus.menu_name,restaurants.restaurant_id as r_id, restaurants.restaurant_name from items LEFT JOIN menus ON menus.menu_id=items.menu_id Left JOIN restaurants ON restaurants.restaurant_id=items.restaurant_id where items.menu_id='$menu_id'";

          $result=mysqli_query($link,$sql);
          while ($row=mysqli_fetch_assoc($result)) {
        ?>
        <tr>
          <th scope="row"><?php echo $row['item_id']?></th>
          <td><?php echo $row['item_name']?></td>
          <td><?php echo $row['menu_name']?></td>
          <td><?php echo $row['restaurant_name']?></td>
            <td><a href="edit_item.php?item_id=<?php echo $row['item_id']; ?> & menu_id=<?php echo $row['m_id']; ?>">Edit</a> / <a href="delete_item.php?item_id=<?php echo $row['item_id']; ?> & menu_id=<?php echo $row['m_id']; ?>">Delete</a></td>
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
