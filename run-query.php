<?php
session_start();
$valid_session = isset($_SESSION['id']) ? $_SESSION['id'] === session_id() : FALSE;
if (!$valid_session) {
   header('Location: login.php');
   exit();
}
$db = new SQLite3('iitk');
if (isset($_POST['query'])) {
  $result = $db->query($_POST['query']);
  echo "<table style='width:100%'>";

  // First print headers
  $i = 0;
  echo "<thead><tr class='heading'>";
  for($i=0; $i < $result->numColumns(); $i++) {
    echo "<td class='heading'><b>";
    echo $result->columnName($i);
    echo "</b></td>";
  }
  echo "</tr></thead>";

  while($row = $result->fetchArray()) {
    for($i=0; $i < $result->numColumns(); $i++) {
      echo "<td>";
      echo $row[$i];
      echo "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
}
?>
