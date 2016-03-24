<html>
<head>
  <title>Insert data into iitk</title>
  <link href="../css/insert.css" rel="stylesheet" type="text/css">
  <meta charset="UTF-8">
</head>
<body>
  <a href="../controllers/logout.php">Logout</a>
  <div class=box>
    Insert data into the iitk database
    <form method ="post" action="insert.php">
      <input class="inp-box" name="query" placeholder="Insert command" autocomplete="off"/>

      <label>Database</label>
      <select name="database">
        <option value="students">Students</option>
        <option value="profs">Profs</option>
        <option value="courses">Courses</option>
        <option value="enrollment">Enrollment</option>
      </select>

      <p>
      <input class="button buttonBlue" name="submit" type="Submit" value="Get Fields"/>
    </form>

    <form method ="post" action="insert.php">
      <?php include '../controllers/getfields.php'?>
      <p>
      <input class="button buttonBlue" name="submit" type="Submit" value="Insert"/>
    </form>
    <div class="message-box">
      <?php include '../controllers/run-insert.php'?>
    </div>
  </div>
</body>
</html>
