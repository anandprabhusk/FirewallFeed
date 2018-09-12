<?php

if (!empty($_POST))
{
	$filename = "text15.txt";
  	$ip = $_POST['txt_remove_ip'];

	$all_ids = explode("\r\n", file_get_contents($filename));

if ( in_array($ip, $all_ids) ) 
	{
	//$text15_file = 'text15.txt';
 
    $fd = fopen ($filename, "r");

    $m_line=0;
    $tmp_line=0;
    $line=0;

    $m_filename = "temp15.txt";
    $m_fd = fopen($m_filename, "w");
    while (!feof ($fd))
    {
      $buffer = fgets($fd, 4096);
      $pos = strpos ($buffer,$ip);

      if ($pos === false and $line==0)
        {
        fputs ($m_fd,$buffer);
        }
      else
        {
        if ($tmp_line < $m_line)
            {
            $tmp_line = $tmp_line + 1;
            $line = 1;
            }
        else
            {
            $line = 0;
			header("Location:formremove15.php?status=1&ipaddr=".$ip);
            }
        }
    }
    fclose($fd);
    fclose($m_fd);
    copy("temp15.txt","text15.txt");
	}
else
{header("Location:formremove15.php?status=0&ipaddr=".$ip);}
}
?>
