<?php

require "OpenIDConnectClient.php5";

if (!isset($oidc)) {
  $oidc = new OpenIDConnectClient('http://localhost:3000',
                                  '753ab695-395e-46ad-b57a-ec59095b5941',
                                  '0dde479b01b85caa77ba');

  $oidc->setRedirectURL('http://openid.local/callback.php');
  $oidc->addScope(['openid','profile']);
}

?>
