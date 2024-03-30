<!-- index.php -->

<!-- 유의할 점: 유저 계정으로 접속할 경우, 디렉토리에 대한 권한이 없을 수 있으므로,
  sudo chmod 777 ./ 명령어를 통해 권한을 부여해야 한다. -->

<?php

session_save_path('./');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  echo ("<script>console.log('PHP: " . ini_get('session.save_path') . "');</script>");

  $enteredUsername = $_POST["username"];
  $enteredPassword = $_POST["password"];

  $grapeUsername = "grape";
  $grapePassword = "secret1234";

  $baboUsername = "babo";
  $baboPassword = "babo1234";

  if ($enteredUsername == $grapeUsername && $enteredPassword == $grapePassword) {
    $_SESSION['user'] = "grape"; # changed from setcookie to session
    header("Location: page-grape.php");
    exit();
  } elseif ($enteredUsername == $baboUsername && $enteredPassword == $baboPassword) {
    $_SESSION['user'] = "babo"; # changed from setcookie to session
    header("Location: page-babo.php");
    exit();
  } else {
    $errorMessage = "Invalid username or password";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      background-color: #f4f4f4;
    }

    header {
      background-color: #DE628B;
      color: #fff;
      text-align: center;
      padding: 10px;
    }

    main {
      padding: 20px;
      margin-bottom: 80px;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }

    input {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #DE628B;
      color: #fff;
      cursor: pointer;
      padding: 12px;
      border: none;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"]:hover {
      background-color: #555;
    }

    footer,
    nav {
      background-color: #DE628B;
      color: #fff;
      text-align: center;
      padding: 10px;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      margin: 0 10px;
    }
  </style>
</head>

<body>

  <header>
    <h1>GRAPE 고양이 웹</h1>
  </header>

  <main>

    <form method="post">

      <?php
      // Display error message if any
      if (isset($errorMessage)) {
        echo '<p style="color: red;">' . $errorMessage . '</p>';
      }
      ?>
      <h2>Login</h2>

      <label for="username">Username:</label>
      <input type="text" name="username" required>

      <label for="password">Password:</label>
      <input type="password" name="password" required>

      <input type="submit" value="Login">
    </form>

    <h2>Welcome to Your Website hello</h2>
    <p>This is a sample content for your website.</p>
  </main>

  <footer>
    <p>&copy; 2023 Your Website. All rights reserved.</p>
  </footer>

</body>

</html>