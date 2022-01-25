<?php
session_start(); 
include "koneksi.php"
;

$pengirimanId 		= getAutoId('pengirimanId', 'pengiriman_header', 'JNT');
$requestType 		= $_POST['requestType'];
$portOrigin 		= $_POST['portOrigin'];
$portDestination 	= $_POST['portDestination'];
$shipmenMode 		= $_POST['shipmenMode'];
$Weight 			= $_POST['Weight'];
$Dimension 			= $_POST['Dimension'];

$query = "INSERT INTO `pengiriman_header` 
	(`pengirimanId`, `requestType`, `portOrigin`, `portDestination`, `shipmenMode`, `Weight`, `Dimension`, `RequestDate`, `RequestBy`) 
	VALUES ('$pengirimanId', '$requestType', '$portOrigin', '$portDestination', '$shipmenMode', '$Weight', '$Dimension', '".date('Y-m-d')."', '".$_SESSION['nama']."')";
mysql_query($query);

echo "$query";

header("location:../index.php?mod=pengiriman_form");