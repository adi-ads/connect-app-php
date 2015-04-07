<?php
require "connect.php";

if( !$oidc->isAuthenticated() ) {
  $oidc->authenticate();
  $_SESSION['user']['name'] = $oidc->requestUserInfo('given_name');
  header("Location:".$_SESSION['request_url']);
} else {
  header("Location:".$_SESSION['request_url']);
}

?>
