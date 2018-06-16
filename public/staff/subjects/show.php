

<?php require_once('../../../private/initialize.php'); ?>

<?php

    $id = $_GET['id'] ?? '1';  // PHP > 7.0

    //echo h($id);

?>

<?php $page_title = 'Show subjects'; ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

  <div id="content">

    <a class="bank link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">
      &laquo; Back to list</a>

      <div class="subject show">

        Subject ID <?php echo h($id);?>

      </div>

  </div>

  <?php include(SHARED_PATH . '/staff_footer.php'); ?>
