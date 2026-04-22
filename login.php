<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php if(isset($_GET['error'])) { ?>
  <p style="color:red;">Invalid email or password</p>
<?php } ?>

<!-- <?php if(isset($_GET['success'])) { ?>
  <p style="color:green;">Account created successfully! Please login.</p>
<?php } ?> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="css/styles1.css" />
</head>
<body class="auth-body">
  <div class="auth-card">
    <h2>Login to Account</h2>
    <p class="subtext">Please enter your email and password to continue</p>

    <form action="admin-panel/backend/routes/auth.php?action=login" method="POST">

  <label>Email address:</label>
  <input 
    type="email" 
    name="email"
    placeholder="esteban_schiller@gmail.com" 
    required 
  />

  <div class="password-row">
    <label>Password</label>
    <a href="#" class="forgot">Forget Password?</a>
  </div>

  <input 
    type="password" 
    name="password"
    placeholder="••••••••" 
    required 
  />

  <label class="checkbox">
    <input type="checkbox" /> Remember Password
  </label>

  <button type="submit" class="btn">Sign In</button>

  <p class="switch">
    Don't have an account? <a href="signup.php">Create Account</a>
  </p>

</form>
  </div>
</body>
</html>
