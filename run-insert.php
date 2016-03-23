<?php
session_start();
$valid_session = isset($_SESSION['id']) ? $_SESSION['id'] === session_id() : FALSE;
if (!$valid_session) {
   header('Location: login.php');
   exit();
}
$db = new SQLite3('iitk');
if (isset($_POST['query'])) {
  $result = $db->exec($_POST['query']);
  echo "Ran your insert query";
}
?>
