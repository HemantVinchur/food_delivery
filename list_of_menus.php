<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include('inc/head.php'); ?>

<body>
    <div class="body_contents">
      <?php
      include('inc/user/list_of_menus.php');

       ?>
    </div>
  <?php include('inc/scripts.php'); ?>
  <script type="text/javascript" src="controllers/list_of_menus.js?restaurant_id="<?php $_GET['restaurant_id']; ?>></script>
</body>

</html>
