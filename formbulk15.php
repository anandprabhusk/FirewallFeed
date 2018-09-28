<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Firewall Feed</title>

<script type='text/javascript'>
  
function validateIP(){
	//Check Format
	var val = document.getElementById("txt_block_ip").value;
	if(val.trim() == ""){
		alert("Enter IP Address");
		return false;
	}
	var ip = val.split(".");
 
	if(ip.length != 4){
		alert("Invalid IP Address");
		return false;
	}
 
    //Check Numbers
    for(var c = 0; c < 4; c++){
		//Perform Test
		if( !(1/ip[c] > 0) ||  ip[c] > 255 ||
                    isNaN(parseFloat(ip[c])) || !isFinite(ip[c])  ||
                    ip[c].indexOf(" ") !== -1){ 
		    alert("Invalid IP Address");
                    return false;
		}
    }
 
    //Invalidate addresses that start with 192.168
    if( ip[0] == 192 && ip[1] == 168 ){
	alert("Invalid IP Address");
        return false;
    } 
    return true;
}


</script>

</head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Firewall Feed</title>

<script type='text/javascript'>
  
function validateIP(){
	//Check Format
	var val = document.getElementById("txt_block_ip").value;
	if(val.trim() == ""){
		alert("Enter IP Address");
		return false;
	}
	var ip = val.split(".");
 
	if(ip.length != 4){
		alert("Invalid IP Address");
		return false;
	}
 
    //Check Numbers
    for(var c = 0; c < 4; c++){
		//Perform Test
		if( !(1/ip[c] > 0) ||  ip[c] > 255 ||
                    isNaN(parseFloat(ip[c])) || !isFinite(ip[c])  ||
                    ip[c].indexOf(" ") !== -1){ 
		    alert("Invalid IP Address");
                    return false;
		}
    }
 
    //Invalidate addresses that start with 192.168
    if( ip[0] == 192 && ip[1] == 168 ){
	alert("Invalid IP Address");
        return false;
    } 
    return true;
}


</script>

</head>
<body>
<div id="main">
  	<img src="firewallfeed-logo.jpg">
	<br><br>
  	<div id="header">
		<a href="index.php">Home</a>
    	<a href="form15.php">Add IP to Feed</a>
		<a href="formremove15.php">Remove IP from Feed</a>
		<b><font color="#ff6600">Bulk Upload IPs to Feed</font></b>
		<a href="text15.txt">View Feed</a>
    </div>  
<div id="contentColumn">
<h2> Bulk Upload IPs to Feed</h2>
 <div class="divider"></div><br>
<form enctype="multipart/form-data" action="fwbulk15.php" method="post">

This feature helps you to perform bulk upload of IP addresses in text file format. Ensure that IP address are listed in each line.
<br><br>
<h4>IP Address List (.txt):<br><br>
<input id="bulk_fw_ip" name="bulk_fw_ip" type="file" /><input name="submit" type="submit" value="Bulk Upload" /></h4>
<?php
if (!empty($_GET)) {
$statuscode = $_GET['status'];
	$msg = $_GET['msg'];
if ($statuscode  == 1)
	{
	echo "<br><br><font color=blue>Success.<br>".$msg."</font>";}
if ($statuscode  == 0)
	{
	echo "<br><br><font color=red>Failed.<br>".$msg."</font>";}
}
?>
<br><br><br><br><br><br><br><br><br>
</div>
</div>
<br><br><br>
<div id="footer">
<a href="http://firewallfeed.com">www.firewallfeed.com</a>&nbsp;&nbsp;&nbsp;<a href="http://firewallfeed.com/license/">License</a>&nbsp;&nbsp;&nbsp; ver 1.0
</div>
</form>
</body>
</html>