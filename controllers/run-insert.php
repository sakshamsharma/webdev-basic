<?php
include '../redirection.php';
$db = new SQLite3('iitk');
if (isset($_POST['query'])) {
  $result = $db->exec($_POST['query']);
  echo "Ran your insert query";
}
?>
