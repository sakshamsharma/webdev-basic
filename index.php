<html>
<head>
  <title>Login to iitk-portal</title>
  <link href="login.css" rel="stylesheet" type="text/css">
  <meta charset="UTF-8">
</head>
<body>
  <div class=box>
    Login
    <form method ="post" action="index.php">
      <input class="inp-box" name="name" placeholder="Username" autocomplete="off"/>
      <input class="inp-box" name="password" placeholder="Password" autocomplete="off"/>
      <p>
      <input class="button buttonBlue" name="login" type="Submit" value="Login"/>
      <input class="button buttonBlue" name="submit" type="Submit" value="Register"/>
      <input class="button" name="reset" type="reset" value="Clear Form">
    </form>
    <div class="message-box">
      <?php include './login-commands.php'?>
    </div>
  </div>
</body>
</html>
