<?php
include '../redirection.php';
$db = new SQLite3('../iitk');
//var_dump($_POST);
if (isset($_POST['submit']) && $_POST['submit'] == "Insert") {

  $str = sprintf("SELECT * from %s", $_POST['database']);
  $result = $db->query($str);
  $newstr = sprintf('INSERT into %s values(', $_POST['database']);
  $face = sprintf('INSERT into <em>%s</em> values(', $_POST['database']);

  for($i=0; $i < $result->numColumns(); $i++) {
    if($i != 0) {
      $newstr = $newstr . ",";
      $face = $face . ",";
    }
    $col = $result->columnName($i);
    $face = $face . "<em>";
    if ($col == "PF" || $col == "Roll" || $col == "Id" || $col == "Assignment" || $col == "Quiz" || $col == "Midsem" || $col == "Endsem") {
      $newstr = $newstr . $_POST[$col];
      $face = $face . $_POST[$col];
    } else {
      $newstr = $newstr . "'" . $_POST[$col] . "'";
      $face = $face . "'" . $_POST[$col] . "'";
    }
    $face = $face . "</em>";
  }
  $newstr = $newstr . ')';
  $face = $face . ')';
  echo "<div class='query'>" . $face . "</div>";

  $result = $db->exec($newstr);
  echo "<br>";
  echo "Ran your insert query";
}
?>
