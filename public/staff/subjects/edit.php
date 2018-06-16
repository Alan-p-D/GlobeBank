<?php require_once('../../../private/initialize.php');

  $test = $_GET['test'] ?? '';  // PHP 7.0

    if ($test == '404') {
      error404();
    }
      elseif ($test == '500') {
        error500();
      }
        elseif ($test == 'redirect') {
          redirect_to(url_for('/staff/subjects/index.php'));
        }
?>
<?php $page_title = 'Edit Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php') ?>">&laquo; Back to list</a>

  <div class="subjects edit">
    <h1>Edit Subject</h1>

    <form action="" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1">1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Subject" />
      </div>
  </div>
</div>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>