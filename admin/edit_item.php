<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include('inc/head.php'); ?>

<body>

    <div class="body_contents">
      <?php
      include('inc/users/edit_item.php');

       ?>
    </div>
        <?php
          include('inc/sidebar.php');
        ?>
  <?php include('inc/scripts.php'); ?>
  <script type="text/javascript" src="controllers/edit_item.js?item_id=<?php echo $_GET['item_id'] ?>&menu_id=<?php echo $_GET['menu_id'] ?>"></script>
</body>

</html>
