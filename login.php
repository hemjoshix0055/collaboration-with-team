<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


  $email = $_POST["email"];
  $password = $_POST["password"];

  if ($email == "hem@test.com" && $password == "admin") {
    $error = "Login success.!!!";
  } else {
    $error = "Login Failed.!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Form</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #4facfe, #00f2fe);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-container {
      background-color: #fff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      width: 350px;
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
      color: #444;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
    }

    .show-password {
      display: flex;
      align-items: center;
      margin-top: 5px;
      font-size: 14px;
    }

    .form-links {
      display: flex;
      justify-content: space-between;
      margin: 15px 0;
    }

    .form-links a {
      font-size: 14px;
      color: #007bff;
      text-decoration: none;
    }

    .form-links a:hover {
      text-decoration: underline;
    }

    button {
      width: 100%;
      padding: 12px;
      background: #007bff;
      color: #fff;
      border: none;
      font-weight: bold;
      border-radius: 10px;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background: #0056b3;
    }
  </style>
</head>

<body>

  <div class="login-container">
   <?php 
   echo $error;
   ?>

    <h2>Login</h2>
    <form method="POST">
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="you@example.com" required />
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter password" required />
        <div class="show-password">
          <input type="checkbox" id="togglePassword" />
          <label for="togglePassword" style="margin-left: 6px;">Show Password</label>
        </div>
      </div>

      <div class="form-links">
        <a href="#">Forgot Password?</a>
        <a href="#">Register New User</a>
      </div>

      <button type="submit">Login</button>
    </form>
  </div>

  <script>
    const toggle = document.getElementById("togglePassword");
    const password = document.getElementById("password");

    toggle.addEventListener("change", function() {
      password.type = this.checked ? "text" : "password";
    });
  </script>

</body>

</html>
