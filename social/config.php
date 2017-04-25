<?php
/*
------------------------------------------------------
  www.idiotminds.com
--------------------------------------------------------
*/
session_start();
define('BASE_URL', filter_var('http://localhost/social/', FILTER_SANITIZE_URL));
// Visit https://code.google.com/apis/console to generate your
// oauth2_client_id, oauth2_client_secret, and to register your oauth2_redirect_uri.
define('CLIENT_ID','114285772343997305733');
define('CLIENT_SECRET','9b27466b61a094d81a84ab53e8850e9e14010a97');
define('REDIRECT_URI','https://accounts.google.com/o/oauth2/auth,https://accounts.google.com/o/oauth2/token');//example:http://localhost/social/login.php?google,http://example/login.php?google
define('APPROVAL_PROMPT','auto');
define('ACCESS_TYPE','offline');

//For facebook
define('APP_ID','1443629392354305');
define('APP_SECRET','95b2894a853c50721dc3a7cda41e83b2');

?>