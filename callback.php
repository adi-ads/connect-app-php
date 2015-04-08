<?php

require "OpenIDConnectLogin.php";

//Requested Page
if(isset($_SERVER['HTTP_REFERER'])) {
  $_SESSION['request_url'] = $_SERVER['HTTP_REFERER'];
}

$auth = new OpenIDConnectLogin();
$auth->authenticate();

?>
