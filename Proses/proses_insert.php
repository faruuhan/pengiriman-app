<?php
$conn = mysqli_connect("localhost", "root", "", "dbfarhan");


$query_detail = '';


for ($count=0 ; $count<count($_POST['no']); $count++ ) { 
	$no_clean = mysqli_real_escape_string(
$conn, $_POST['no'][$count]);
	$itemdesc_clean = mysqli_real_escape_string(
$conn, $_POST['itemdesc'][$count]);
	$qty_clean = mysqli_real_escape_string(
$conn, $_POST['qty'][$count]);
	$satuan_clean = mysqli_real_escape_string(
$conn, $_POST['satuan'][$count]);
	$category_clean = mysqli_real_escape_string(
$conn, $_POST['category'][$count]);
	if($no_clean != '' && $itemdesc_clean != '' && $qty_clean != '' && $satuan_clean != '' && $category_clean != '')

			{

				$query_detail .= 'INSERT INTO pengiriman_detail (`itemDesc`, `Qty`, `Satuan`, `GoodCategory`) 
							VALUES ("'.$itemdesc_clean.'", "'.$qty_clean.'", "'.$satuan_clean.'", "'.$category_clean.'"); 
							';

			}


			 
										

mysqli_multi_query($conn, $query_detail);

//echo "$query_detail";
}


?>