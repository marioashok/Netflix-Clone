<?php

  if(isset($_POST["submitButton"]))
  {
    echo "Form was submitted!";
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to AJflix</title>
    <link rel="stylesheet" href="./assets/style/style.css">
  </head>
  <body>
    <div class="signInContainer">
      <div class="column">
        <div class="header">
          <h3>Sign Up</h3>
          <span>to continue</span>
        </div>
        <form action="" method="POST">
          <input type="text" name="firstName" placeholder="First Name" required>
          <input type="text" name="lastName" placeholder="Last Name" required>
          <input type="text" name="username" placeholder="User Name" required>
          <input type="email" name="email" placeholder="Email" required>
          <input type="email" name="email2" placeholder="Confirm Email" required>
          <input type="password" name="password" placeholder="Password" required>
          <input type="password"  name="password2" placeholder="Confirm Password" required>
          <input type="submit" name="submitButton" value="Submit">
        </form>

      </div>

    </div>


	<script src=""></script>
  </body>
</html>
