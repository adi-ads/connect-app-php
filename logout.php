<?php
session_start();
session_destroy();

header("Location: http://localhost:3000/signout?redirect_uri=http://openid.local");

?>
