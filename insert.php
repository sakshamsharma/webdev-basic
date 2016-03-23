<html>
<head>
  <title>Insert data into iitk</title>
  <link href="insert.css" rel="stylesheet" type="text/css">
  <meta charset="UTF-8">
</head>
<body>
  <a href="./logout.php">Logout</a>
  <div class=box>
    Insert data into the iitk database
    <form method ="post" action="insert.php">
      <input class="inp-box" name="query" placeholder="Insert command" autocomplete="off"/>
      <p>
      <input class="button buttonBlue" name="submit" type="Submit" value="Insert"/>
      <input class="button" name="reset" type="reset" value="Clear Form">
    </form>
    <div class="message-box">
      <?php include './run-insert.php'?>
    </div>
  </div>
</body>
</html>
