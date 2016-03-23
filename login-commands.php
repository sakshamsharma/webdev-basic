<?php
$db = new SQLite3('iitk');

if (isset($_POST['submit']) && $_POST['submit'] == "Register") {

  // =====================
  // For register requests
  // =====================
  if( !isset($_POST['name']) || $_POST['name'] == "" || preg_match('/\s/', $_POST['name'] == 1 )) {
    die ("Username must be set and free of spaces.");
  } else if( !isset($_POST['password']) || $_POST['password'] == "" || preg_match('/\s/', $_POST['password'] == 1 )) {
    die ("Password must be set and free of spaces.");
  }

  $duplicatesIfAny = sprintf("select username from users where username = '%s'", $_POST['name'] );
  $results = $db->query($duplicatesIfAny);
  $rowCount = 0;
  while ($row = $results->fetchArray()) {
    $rowCount++;
  }
  if($rowCount > 0) {
    echo "User already exists";
  } else {
    $insertCommand = sprintf("insert into users values('%s', '%s')", $_POST['name'], password_hash($_POST['password'], PASSWORD_BCRYPT));
    $db->exec($insertCommand);
    echo "Successfully registered";
  }

} else if (isset($_POST['login']) && $_POST['login'] == "Login") {
  // =====================
  // For LOGIN requests
  // =====================

  $checkQuery = sprintf("select passwordhash from users where username = '%s'", $_POST['name'] );
  $results = $db->query($checkQuery);
  $row = $results->fetchArray();
  if (password_verify($_POST['password'], $row['passwordhash'])) {
    session_start();
    $_SESSION["username"] = $_POST['name'];
    $_SESSION["id"] = session_id();
    header('Location: /query.php');
  } else {
    echo "Wrong username or password.";
  }
}
?>
