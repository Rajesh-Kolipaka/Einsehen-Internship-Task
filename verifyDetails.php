<?php
extract($_POST);
if(isset($submit))
{
$list = array ($name,$emailId,$phoneNumber);
$fp = fopen('CSVFile.csv', 'r');
$flag=0;
while(($d=fgetcsv($fp)) !== FALSE)
{
      $l=count($d);
      $k=0;
      for($c=0;$c<$l;$c++)
      {
        if($d[$c]==$list[$c])
        {
          $k++;
        }
      }
      if($k==$l)
      {
        echo "<h1 style='color:green'>Hello. You are Logged in.</h1>";
        $flag=1;
      }
}
if($flag==0)
{
echo "<h1 style='color:red'>Sorry you are not an Existing user.</h1>";
}
}
?>
