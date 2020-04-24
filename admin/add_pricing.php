<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include('inc/head.php'); ?>

<body>
    <div class="body_contents">
      <?php
      include('inc/users/add_pricing.php');

       ?>
    </div>
        <?php
          include('inc/sidebar.php');
        ?>
  <?php include('inc/scripts.php'); ?>
  <script type="text/javascript" src="controllers/add_pricing.js?item_id=<?php echo $_GET['item_id'] ?>&restaurant_id=<?php echo $_GET['restaurant_id'] ?>"></script>
</body>

</html>
