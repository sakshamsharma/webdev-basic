<?php
include '../redirection.php';
$db = new SQLite3('../iitk');
$str = '';
$face = '';

if (!isset($_POST['submit']) || !($_POST['submit'] == "Query")) {
  exit();
}

if ( $_POST['query'] != '') {
  $str = $_POST['query'];
  $face = $_POST['query'];
} else {
  $fields = $_POST['fields'];
  $database = $_POST['database'] . $_POST['database2'] . $_POST['database3'];
  $where = $_POST['where'];
  $having = $_POST['having'];

  $str = sprintf("SELECT %s FROM %s", $fields, $database);
  $face = sprintf("SELECT <em>%s</em> FROM <em>%s</em>", $fields, $database);
  if ($where != '') {
    $str = $str . " where " . $where;
    $face = $face . " where <em>" . $where . "</em>";
  }
  if ($having != '') {
    $str = $str . " having" . $having;
    $face = $face . " having <em>" . $having . "</em>";
  }
}

echo "<div class='query'>" . $face . "</div>";

$result = $db->query($str);
echo "<table style='width:100%'>";

$count = 0;
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
  $count++;
  for($i=0; $i < $result->numColumns(); $i++) {
    echo "<td>";
    echo $row[$i];
    echo "</td>";
  }
  echo "</tr>";
}
echo "</table>";
echo "<br>Total " . $count . " rows";
?>
