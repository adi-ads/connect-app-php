<?php

if (!class_exists('OpenIDConnectLogin')):
    require('OpenIDConnectClient.php5');

  class ConnectClient extends OpenIDConnectClient {
      /**
       * @var string to store claims to check exp
       */
      private $claims;
    }

    class OpenIDConnectLogin {
      public function authenticate() {

            $oidc = new ConnectClient('http://localhost:3000',
                                      '753ab695-395e-46ad-b57a-ec59095b5941',
                                      '0dde479b01b85caa77ba');

            $oidc->setRedirectURL('http://openid.local/callback.php');
            $oidc->addScope(['openid','profile']);
            try {
                $oidc->authenticate();
                self::login_oidc_user($oidc);
            } catch (Exception $e) {
                echo $e;
            }
            return null;
        }

        public function isAuthenticated() {
          $currentTime = time();
          // && ($currentTime < $_SESSION['claims']->exp)
          if( isset($_SESSION['user']) ) {
            return true;
          } else {
            return false;
          }
        }

        /**
        * @param $oidc ConnectClient
        */
       private function login_oidc_user($oidc) {
           $username = $oidc->requestUserInfo('name');

           $_SESSION['user']['name'] = $username;
           if(isset($_SESSION['request_url'])) {
             header("Location:".$_SESSION['request_url']);
           } else {
             header("Location:".'/');
           }

           exit();
       }
    }

endif;
?>
