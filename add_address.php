<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include('inc/head.php'); ?>

<body>
    <div class="body_contents">
      <?php
      include('inc/user/add_address.php');

       ?>
    </div>

        <?php
          include('inc/sidebar.php');
        ?>
  <?php include('inc/scripts.php'); ?>
  <script type="text/javascript" src="controllers/add_address.js?id=<?php echo $_GET['id'] ?>"></script>
</body>

</html>
