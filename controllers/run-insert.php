<?php
include '../redirection.php';
$db = new SQLite3('../iitk');
//var_dump($_POST);
if ($_POST['submit'] == "Insert") {

  $str = sprintf("SELECT * from %s", $_POST['database']);
  $result = $db->query($str);
  $newstr = sprintf('INSERT into %s values(', $_POST['database']);

  for($i=0; $i < $result->numColumns(); $i++) {
    if($i != 0) {
      $newstr = $newstr . ",";
    }
    $col = $result->columnName($i);
    if ($col == "PF" || $col == "Roll" || $col == "Id" || $col == "Assignment" || $col == "Quiz" || $col == "Midsem" || $col == "Endsem") {
      $newstr = $newstr . $_POST[$col];
    } else {
      $newstr = $newstr . "'" . $_POST[$col] . "'";
    }
  }
  $newstr = $newstr . ')';
  echo $newstr;

  $result = $db->exec($newstr);
  echo "<br>";
  echo "Ran your insert query";
}
?>
