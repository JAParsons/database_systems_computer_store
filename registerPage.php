<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="assets/dragon.png">
</head>


<?php
include("php scripts/register.php");
include ('header.php');

?>

<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-3">
      <h2>Sign Up</h2>
        <p>Please fill your details to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<div class="form-group">
                <label>First Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
            </div>  
			<div class="form-group">
                <label>Surname</label>
                <input type="text" name="lastname" class="form-control" value="<?php echo $lastname; ?>">
            </div>  
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Email Address</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="loginPage.php">Login here</a>.</p>
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
<br>


</html>