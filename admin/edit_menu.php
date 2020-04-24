<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include('inc/head.php'); ?>

<body>

    <div class="body_contents">
      <?php
      include('inc/users/edit_menu.php');

       ?>
    </div>

        <?php
          include('inc/sidebar.php');
        ?>
  <?php include('inc/scripts.php'); ?>
  <script type="text/javascript" src="controllers/edit_menu.js?menu_id=<?php echo $_GET['menu_id'] ?>&restaurant_id=<?php echo $_GET['restaurant_id'] ?>"></script>
</body>

</html>
