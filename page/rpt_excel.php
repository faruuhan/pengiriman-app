<?php 
$filename = "document_name.xls";
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename='.$filename);
include"../proses/koneksi.php";
$date = $_GET['date'];
$query = "SELECT * FROM pengiriman_header WHERE RequestDate = '$date'";
		
		$res = mysql_query($query);
	?>

	<table class = "table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>pengirimanId</th>
			<th>RequestName</th>
			<th>RequestDate</th>
			<th>portOrigin</th>
			<th>portDestination</th>
			<th>shipmenMode</th>
			<th>Weight</th>
			<th>Dimension</th>
		</tr>
	</thead>
	<tbody>
	<?php $no=1; while($row = mysql_fetch_array($res)){?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $row['pengirimanId']; ?></td>
		<td><?php echo $row['RequestBy']; ?></td>
		<td><?php echo $row['RequestDate']; ?></td>
		<td><?php echo $row['portOrigin']; ?></td>
		<td><?php echo $row['portDestination']; ?></td>
		<td><?php echo $row['shipmenMode']; ?></td>
		<td><?php echo $row['Weight']; ?></td>
		<td><?php echo $row['Dimension']; ?></td>
	</tr>
	<?php $no++; } ?>
	</tbody>
</table>