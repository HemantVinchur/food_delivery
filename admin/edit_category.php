<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include('inc/head.php'); ?>

<body>

    <div class="body_contents">
      <?php
      include('inc/users/edit_category.php');

       ?>
    </div>

        <?php
          include('inc/sidebar.php');
        ?>
  <?php include('inc/scripts.php'); ?>
  <script type="text/javascript" src="controllers/edit_category.js?category_id=<?php echo $_GET['category_id'] ?>"></script>
</body>

</html>
