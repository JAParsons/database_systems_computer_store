<?php

include("config.php");
include("php scripts/login.php");

include("header.php");
$staffType="";
?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3">
      <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Email Address</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" name="login" class="btn btn-primary" value="Customer Login">
				<input type="submit" name="login" class="btn btn-primary" value="Staff Login">
            </div>
            <p>Don't have an account? <a href="registerPage.php">Sign up now</a>.</p>
        </form>
    </div>
  </div>
</div>



<footer
<div class="container">
        <hr>
        <!-- Footer -->
        <footer>
			<?php
				include ('footer.php');
			?>
        </footer>

    </div>
</footer>

</html>

