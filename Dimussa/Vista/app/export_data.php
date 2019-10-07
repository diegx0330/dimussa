<?php
session_start();
error_reporting(0);

echo "llego";
if(isset($_POST["export_data"])) {
$filename = "usuarios_".date('Ymd') . ".xls";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename="$filename"");
$show_coloumn = false;
if(!empty($developer_records)) {
foreach($developer_records as $record) {
if(!$show_coloumn) {
// display field/column names in first row
echo implode("t", array_keys($record)) . "n";
$show_coloumn = true;
}
echo implode("t", array_values($record)) . "n";
}
}
exit;
}

?>