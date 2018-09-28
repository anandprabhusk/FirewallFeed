<?php
if (!empty($_POST))
{
$currentDir = getcwd();
$uploadDirectory = "/bulkfirewallip/";
$fileExtensions = ['txt'];

$errors = [];

$fileName = $_FILES['bulk_fw_ip']['name'];
$fileSize = $_FILES['bulk_fw_ip']['size'];
$fileTmpName  = $_FILES['bulk_fw_ip']['tmp_name'];
$fileType = $_FILES['bulk_fw_ip']['type'];
$fileExtension = strtolower(end(explode('.',$fileName)));

$uploadPath = $currentDir . $uploadDirectory . basename($fileName); 

	if (! in_array($fileExtension,$fileExtensions)) 
      {$errors[] = "This file extension is not allowed. Please upload .txt file";}
	if ($fileSize > 1000000)
      {$errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";}
   
   if (empty($errors))
   {
     $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

     if ($didUpload) 
     {
       echo "Your uploaded file <b>" . basename($fileName) . "</b> is getting ready for comparison....";
     
     	$uploadfile = file($uploadPath);      
     	$orgtxtfile = file_get_contents("text15.txt");
     	$i=0;
    
     	foreach($uploadfile as $uploadfileentry) 
          {
          $uploadfileentry = trim($uploadfileentry);   
         if(strpos($orgtxtfile,$uploadfileentry)) 
          {echo "<br>Duplicate Entry: ".$uploadfileentry;
           $i=$i+1;}
          }    
      
        if($i>0)
        { $msg = $i . " duplicate entries found in the uploaded file which are already in the block feed. Please remove these duplicates and upload again.";
		  header("Location:formbulk15.php?status=0&msg=".$msg);
		}
        else
        { $msg = "The file " . basename($fileName) . " is successfully uploaded.";
          $orgtxtfile = fopen("text15.txt",'a+');
          $uploadfile = file_get_contents($uploadPath);
          $next_line = "\r\n";
		  fwrite($orgtxtfile, $next_line);
          fwrite($orgtxtfile,$uploadfile);
		  header("Location:formbulk15.php?status=1&msg=".$msg);
        }
      } 
     else
     {$msg = "An error occurred somewhere. Try again or contact the admin.";
	  header("Location:formbulk15.php?status=0&msg=".$msg);}
     } 
   else 
      {
      foreach ($errors as $error) 
      {header("Location:formbulk15.php?status=0&msg=".$error);}
      }
 }
?>