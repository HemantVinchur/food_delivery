<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php include('inc/head.php'); ?>
<body>
  <div class="body_contents">
  <?php
    include('inc/user/confirm_order.php');
  ?>
</div>
      <?php
        include('inc/sidebar.php');
      ?>
<?php include('inc/scripts.php'); ?>
  <script type="text/javascript" src="controllers/confirm_order.js?user_id=<?php echo $_GET['user_id'] ?>&item_id=<?php echo $_GET['item_id'] ?>"></script>
</body>

</html>
