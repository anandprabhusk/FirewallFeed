 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Firewall Feed</title>
</head>

<body>
  <div id="main">
	<img src="firewallfeed-logo.jpg">
	<br><br>
  	<div id="header">
		<b><font color="#ff6600">Home</font></b>
    	<a href="form15.php">Add IP to Feed</a>
		<a href="formremove15.php">Remove IP from Feed</a>
		<a href="formbulk15.php">Bulk Upload IPs to Feed</a>
		<a href="text15.txt">View Feed</a>
    </div>

<div><br>

Firewall Feed is a web based free tool that assists you to build your own IP address feed in your local network. You can read more about it in <a href="http://firewallfeed.com">www.firewallfeed.com</a>.
<br><br>
Following is your url feed to configure in the firewall.
<?php
echo "<b>".'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']."text15.txt</b>";
?>  
<br><br>
Known issue: If your firewall is unable to reach this url feed, use IP address instead of Server DNS Name.
Report bug or feature requests to firewallfeed@gmail.com. 
<br><br>
In the future releases, we are introducing bulk upload facility, feeds of domain names and URL,so keep checking our website for new feature releases.
</div>
	
</div>    



<br><br><br>
<div id="footer">
<a href="http://firewallfeed.com">www.firewallfeed.com</a>&nbsp;&nbsp;&nbsp;<a href="http://firewallfeed.com/license/">License</a>&nbsp;&nbsp;&nbsp; ver 1.0
</div>  
</body>
</html>
