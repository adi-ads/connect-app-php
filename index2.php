<?php

require "OpenIDConnectLogin.php";

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
      <?php if(isset($_SESSION['user']['name'])) { ?>
        Hello Again, <?php echo $name; ?>
      <?php } else { ?>
        <a href='callback.php'>Login - 2</a>
      <?php } ?>
    </div>

</body>
</html>
