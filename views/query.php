<html>
<head>
  <title>Query iitk</title>
  <link href="/css/query.css" rel="stylesheet" type="text/css">
  <meta charset="UTF-8">
</head>
<body>
  <a href="../controllers/logout.php">Logout</a>
  <div class=box>
    Search the iitk database
    <form method ="post" action="./query.php">
      <input class="inp-box" name="query" placeholder="Query" autocomplete="off"/>
      <p>
      <input class="button buttonBlue" name="submit" type="Submit" value="Query"/>
      <input class="button" name="reset" type="reset" value="Clear Form">
    </form>
    <div class="message-box">
      <?php include '../controllers/run-query.php'?>
    </div>
  </div>
</body>
</html>
