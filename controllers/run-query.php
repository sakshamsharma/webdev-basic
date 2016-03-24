<?php
include '../redirection.php';
$db = new SQLite3('../iitk');
$str = '';
if ( $_POST['query'] != '') {
  $str = $_POST['query'];
} else {
  $fields = $_POST['fields'];
  $database = $_POST['database'] . $_POST['database2'] . $_POST['database3'];
  $where = $_POST['where'];
  $having = $_POST['having'];

  $str = sprintf("SELECT %s FROM %s", $fields, $database);
  if ($where != '') {
    $str = $str . " where " . $where;
  }
  if ($having != '') {
    $str = $str . " having " . $having;
  }
}
  echo $str;

$result = $db->query($str);
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
?>
