<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include('inc/head.php'); ?>
<body>

    <?php
      include('inc/sidebar.php');
    ?>
    <div class="body_contents">
      <?php
      include('inc/users/delete_user.php');
       ?>
    </div>
  <?php include('inc/scripts.php'); ?>
  <script type="text/javascript" src="controllers/delete_user.js?id=<?php echo $_GET['id'] ?>"></script>
</body>

</html>
