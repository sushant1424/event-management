<?php
include('config/dbconnect.php');
$output = '';
if(isset($_POST['export_excel']))
{
 $filename = "report_".date("Y-m-d")."_".time().".xls"; // File name extension was wrong
 header("Content-type: application/vnd.ms-excel");
 header("Content-Disposition: attachment; filename=\"$filename\"");

 $firstrow = false;
 foreach($row as $data)
 {
      if(!$firstrow)
      {
        echo implode("\t", array_keys($data))."\n";
        $firstrow = true;
      }
      echo implode("\t", array_values($data))."\n";
 }
 exit;
}
?>