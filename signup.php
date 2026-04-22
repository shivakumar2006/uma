<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!-- <?php
if (isset($_GET['success'])) {
    echo "<p style='color:green'>Account created successfully!</p>";
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create Account</title>
  <link rel="stylesheet" href="css/styles1.css" />
</head>
<body class="auth-body">
  <div class="auth-card">
    <h2>Create an Account</h2>
    <p class="subtext">Create an account to continue</p>

    <form action="admin-panel/backend/routes/auth.php?action=register" method="POST">

  <label>Email address:</label>
  <input 
    type="email" 
    name="email"
    placeholder="esteban_schiller@gmail.com" 
    required 
  />

  <label>Username</label>
  <input 
    type="text" 
    name="username"
    placeholder="Username" 
    required 
  />

  <label>Register As</label>
<select name="role" required>
  <option value="user">User</option>
  <option value="admin">Admin</option>
</select>

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
    <input type="checkbox" required /> I accept terms and conditions
  </label>

  <button type="submit" class="btn">Sign Up</button>

</form>
  </div>
</body>
</html>
