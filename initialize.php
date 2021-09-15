<!DOCTYPE html>
<html lang = "en">
<head>

</head>
<body>
    <?php

      require_once 'login.php';
      $connection = new mysqli($hn, $un, $pw, $db);
      if($connection->connect_error) die("Fatal Error");

    ?>
</body>
</html>
