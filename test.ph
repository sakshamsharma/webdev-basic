<?php
$db = new SQLite3('iitk');
$res = $db->query('SELECT * FROM students');
if ($res->numColumns() && $res->columnType(0) != SQLITE3_NULL) { 
  echo "No students";
} else { 
  echo ($res->fetchArray()['Name']);
} 

echo "<br/>";
echo "HEY!!";
?>
