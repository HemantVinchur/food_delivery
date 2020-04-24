<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include('inc/head.php'); ?>

<body>
    <div class="body_contents">
      <?php
      include('inc/users/add_menu.php');

       ?>
    </div>

        <?php
          include('inc/sidebar.php');
        ?>
  <?php include('inc/scripts.php'); ?>
  <script type="text/javascript" src="controllers/delete_menu.js?id=<?php echo $_GET['id'] ?>"></script>
  <script type="text/javascript" src="controllers/add_menu.js"></script>
</body>

</html>
