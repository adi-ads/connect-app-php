<?php

require "connect.php";

if( !isset($_SESSION['user']['name']) ) {
  $oidc->authenticate();
} else {
  echo 'Logged in';
}

echo $checkFlag;

$name = $_SESSION['user']['name'];
?>

<html>
<head>
    <title>Example OpenID Connect Client Use</title>
    <style>
        body {
            font-family: 'Lucida Grande', Verdana, Arial, sans-serif;
        }
    </style>
</head>
<body>

    <div>
        Welcome to Second Page, <?php echo $name; ?>
    </div>

</body>
</html>
