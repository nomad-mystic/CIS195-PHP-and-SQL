<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 11/17/2015
 * Time: 11:05 PM
 */
require_once('includes/constants.php');
require_once('includes/utilities.php');


require_secure();


$key = isset($_POST['key']) ? $_POST['key'] : null;

$value = isset($_POST['value']) ? $_POST['value'] : null;


if (!empty($key) && !empty($value)) {
     update_file(htmlentities($key), password_hash($value, PASSWORD_DEFAULT));
}
?>

<!doctype html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>Modify File</title>
</head>
<body>
     <form action="login.php" method="POST">
          <lable>
               Username:
          </lable>
          <input type="text" name="key"><br>
          <lable>
               Password:
          </lable>
          <input type="text" name="value"><br>

          <input type="submit" value="submit"><br>
     </form>
</body>
</html>
