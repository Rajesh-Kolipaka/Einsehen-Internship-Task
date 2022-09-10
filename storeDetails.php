<?php
 extract($_POST);
if(isset($submit)){
$list = array ($name,$emailId,$phoneNumber);
$fp = fopen('CSVFile.csv', 'a');
fputcsv($fp, $list);
echo "<h1 style='color:green'>Data Successfully stored in CSV file.</h1> ";
fclose($fp);
}
?>
