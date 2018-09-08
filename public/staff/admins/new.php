<?php require_once('../../../private/initialize.php');

require_login();

if(is_post_request()) {

  $subject = [];
  $admin['first_name'] = $_POST['first_name'] ?? '';
  $admin['last_name'] = $_POST['last_name'] ?? '';
  $admin['email'] = $_POST['email'] ?? '';
  $admin['username'] = $_POST['username'] ?? '';
  $admin['password'] = $_POST['password'] ?? '';
  $admin['confirm_password'] = $_POST['confirm_password'] ?? '';


  $result = insert_admin($admin);
  if($result === true) {
    $new_id = mysqli_insert_id($db);
    $_SESSION['message'] = 'Admin Created';
    redirect_to(url_for('/staff/admins/show.php?id=' . $new_id));
  } else {
    $errors = $result;
  }
} else {

  $admin = [];
  $admin['first_name'] = '';
  $admin['last_name'] = '';
  $admin['email'] = '';
  $admin['username'] = '';
  $admin['password'] = '';
  $admin['confirm_password'] = '';
}

$admin_set = find_all_admins();
$admin_count = mysqli_num_rows($admin_set) + 1;
mysqli_free_result($admin_set);
?>



<?php $page_title = 'Create Admin'; ?>

<?php include(SHARED_PATH . '/staff_header.php') ; ?>

<div id="content">
  <h1>Create Admin</h1>
  <?php echo display_errors($errors); ?>

  <form action="<?php echo url_for('/staff/admins/new.php'); ?>" method="post">
   <dl>
    <dt>First Name</dt>
    <dd><input type="text" name="first_name" value="<?php echo h($admin['first_name']); ?>" /></dd>
  </dl>
   <dl>
    <dt>Last Name</dt>
    <dd><input type="text" name="last_name" value="<?php echo h($admin['last_name']); ?>" /></dd>
  </dl>
   <dl>
    <dt>Email</dt>
    <dd><input type="text" name="username" value="<?php echo h($admin['email']); ?>" /></dd>
  </dl>
   <dl>
    <dt>Username</dt>
    <dd><input type="text" name="email" value="<?php echo h($admin['username']); ?>" /></dd>
  </dl>
   <dl>
    <dt>Password</dt>
    <dd><input type="password" name="password" value="" /></dd>
  </dl>
  <dl>
   <dt>Confirm Password</dt>
   <dd><input type="password" name="confirm password" value="" /></dd>
 </dl>
<p>
Passwords should be at least 12 characters and include at least one uppercase letter,
lowercase letter, number and symbol.
</p>
<br />
  <div id="operations">
    <input type="submit" value="Create Admin" />
  </div>
  </form>
</div>


<?php include(SHARED_PATH . '/staff_footer.php') ; ?>
