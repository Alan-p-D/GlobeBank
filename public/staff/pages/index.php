<?php require_once('../../../private/initialize.php'); ?>

<?php
// admin login required
require_login();

  redirect_to(url_for('/staff/index.php'));
?>
