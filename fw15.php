<?php

if (!empty($_POST) && $_POST['Submit'] = "Add to Feed")
{

$text15_file = 'text15.txt';

//check if file is empty, otherwise insert next line
$i = 0;
if (trim(file_get_contents($text15_file)) == true) {
  $i = 1;
}


//check if value exists in text file
$ip = $_POST['txt_block_ip'];

$all_ids = explode("\r\n", file_get_contents($text15_file));

if ( ! in_array($ip, $all_ids) ) 
	{
//append data
$w_handle = fopen($text15_file, 'a+') or die('Cannot open file:  '.$text15_file);

if($i==1)
{
	$next_line = "\r\n";
	fwrite($w_handle, $next_line);
}
fwrite($w_handle, $ip);

//check if written
$all_ids = explode("\r\n", file_get_contents($text15_file));
if ( in_array($ip, $all_ids) ) 
header("Location:form15.php?status=1&ipaddr=".$ip);


fclose($w_handle);
}
else
{ header("Location:form15.php?status=0&ipaddr=".$ip); }


}
?>
