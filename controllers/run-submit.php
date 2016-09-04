<?php
include '../redirection.php';
$db = new SQLite3('/tmp/iitk');
var_dump($_POST);
if (isset($_POST['submit']) && $_POST['submit'] == "Submit") {

  $abc = exec("whoami");
  echo $abc;
  echo "<br>";
  $newstr = 'INSERT into submissions values ("' . base64_encode($_POST['query']) . '", "' . $_SESSION['username'] . '", "' . time() . '")';
  echo $newstr . '<br>';

  $result = $db->exec($newstr);
  echo "<br>";
  echo "Ran your insert query";
}
?>
