<?php
$db = new SQLite3('../iitk');

if (isset($_POST['submit'])) {
  if ( $_POST['submit'] == "Get Fields" ) {
    $str = sprintf("SELECT * from %s", $_POST['database']);
    $result = $db->query($str);
    $box = sprintf('<input class="inp-box" name="database" placeholder="Database" autocomplete="off" value="%s"/>', $_POST['database']);
    echo $box;
    for($i=0; $i < $result->numColumns(); $i++) {
      $box = sprintf('<input class="inp-box" name="%s" placeholder="%s" autocomplete="off"/>', $result->columnName($i), $result->columnName($i));
      echo $box;
    }
  }
}
?>
