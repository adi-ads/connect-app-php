<?php

require "connect.php";

if(!$oidc->isAuthenticated()) {
  $oidc->authenticate();
}

$name = $oidc->requestUserInfo('given_name');
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
        Hello <?php echo $name; ?>
    </div>

</body>
</html>
