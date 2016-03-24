<html>
<head>
  <title>Query iitk</title>
  <link href="/css/query.css" rel="stylesheet" type="text/css">
  <meta charset="UTF-8">
</head>
<body>
  <a href="../controllers/logout.php">Logout</a>
  <div class=box>
    Search the iitk database (either type query, or use inputs)
    <form method ="post" action="./query.php">
      <input class="inp-box" name="query" placeholder="Query" autocomplete="off"/>

      <label>Database</label>
      <select name="database">
        <option value="students">Students</option>
        <option value="profs">Profs</option>
        <option value="courses">Courses</option>
        <option value="enrollment">Enrollment</option>
      </select>

      <label>Database 2 (Optional)</label>
      <select name="database2">
        <option value=""></option>
        <option value=",students">Students</option>
        <option value=",profs">Profs</option>
        <option value=",courses">Courses</option>
        <option value=",enrollment">Enrollment</option>
      </select>

      <label>Database 3 (Optional)</label>
      <select name="database3">
        <option value=""></option>
        <option value=",students">Students</option>
        <option value=",profs">Profs</option>
        <option value=",courses">Courses</option>
        <option value=",enrollment">Enrollment</option>
      </select>

      <input class="inp-box" name="fields" placeholder="Enter fields. eg: Roll, Name" autocomplete="off"/>
      <input class="inp-box" name="where" placeholder="Enter where clause" autocomplete="off"/>
      <input class="inp-box" name="having" placeholder="Enter having clause" autocomplete="off"/>

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
