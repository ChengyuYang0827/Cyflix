<?php
require_once("PayPal-PHP-SDK/autoload.php");
$apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'AfKgzVdEBSTgz9VRs4NXwNYnBiIg3mXPOD1bOwXfVKjfV-AYRLvFxJVWnFEhg_GVLXYCgzd7VPSv6sqM',     // ClientID
            'EDl2vHw4wEeJT7X9mxH29Wr2nJA9rDqP9WtYnSsaX_ImUgV6LPVaV2034ahO96ce-XILOH4s4QR4u_vl'      // ClientSecret
        )
);
?>