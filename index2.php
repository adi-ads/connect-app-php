<?php

require "connect.php";

if( !$oidc->isAuthenticated() ) {
  $oidc->authenticate();
}

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
