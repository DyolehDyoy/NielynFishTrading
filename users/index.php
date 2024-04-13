<?php
/**
 * users/index.php
 *
 * @package default
 */
ob_start();
require_once '../includes/load.php';
if ($session->isUserLoggedIn()) {
    redirect('../users/admin.php', false);
}

// Initialize variables
$username = '';
$password = '';

?>
<?php include_once '../layouts/header.php'; ?>
<div class="login-page">
    <div class="text-center">
       <h1>Sign in</h1>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="../users/auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Username</label>
              <input type="text" class="form-control" name="username" value="<?php echo isset($username) ? $username : ''; ?>" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Password</label>
            <input type="password" class="form-control" name="password" value="<?php echo isset($password) ? $password : ''; ?>" placeholder="Password">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-info  pull-right">Login</button>
        </div>
    </form>
    <div class="text-center">
       <p></p>
     </div>
</div>
<?php include_once '../layouts/footer.php'; ?>
