<?php include "Proses/koneksi.php"; ?>

<!-- Page Content-->
<form method="post" action="Proses/cek.php" id="form-pengiriman">

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel-group">
  					<div class="panel panel-default">
						<div class="panel-heading">Form Pengiriman:</div>
							<div class="panel-body">

					<div class="form-group row">
						<div class="col-xs-4">
						  <label for="sel1">Request Type:</label>
						  <select class="form-control" id="requestType" name="requestType">
						    <option value="Import">Import</option>
						    <option value="Export">Export</option>
						    <option value="Internal Distributor">Internal Distributor</option>
						  </select>
						</div>
					</div> 

				<div class="form-group row">
					<div class="col-xs-4">
						<label for="sel1">Port Origin:</label>
						<select class="form-control" id="portOrigin" name="portOrigin">
						<?php 

								$query = "SELECT * FROM port_list";
								$hasil = mysql_query($query);
								while ($data = mysql_fetch_array($hasil))
								{
						  echo "<option value=".$data['port_id']. '-' .$data['port_name'].">".$data['port_id']." - ".$data['port_name']."</option>";
								}
						?>
						</select>
					</div>
				</div>


	            <div class="form-group row">
					<div class="col-xs-4">
						<label for="sel1">Port Destination:</label>
						<select class="form-control" id="portDestination" name="portDestination">
						<?php 

								$query = "SELECT * FROM port_list";
								$hasil = mysql_query($query);
								while ($data = mysql_fetch_array($hasil))
								{
						  echo "<option value=".$data['port_id']. '-' .$data['port_name'].">".$data['port_id']." - ".$data['port_name']."</option>";
								}
						?>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-xs-4">
						<label for="sel1">Shipment Mode:</label>
						<select class="form-control" id="shipmenMode" name="shipmenMode">
							<option value="Land">Land</option>
							<option value="Air">Air</option>
						    <option value="Sea">Sea</option>
					  </select>
					</div>
				</div> 

		        <div class="form-group row">
					<div class="col-xs-4">
						<label for="sel1">Wight(kg):</label>
						<input type="number" class="form-control" name="Weight" id="Wight">
					</div>
				</div> 

				<div class="form-group row">
					<div class="col-xs-4">
						<label for="sel1">Dimension(cm):</label>
						<input type="text" class="form-control" name="Dimension" id="Dimension">
					</div>
				</div> 

				<div class="row">
				  <div class="col-sm-3" align="center"><label for="sel1">ITEM DESCRIPTON</label></div>
				  <div class="col-sm-2" align="center"><label for="sel1">QTY</label></div>
				  <div class="col-sm-3" align="center"><label for="sel1">SATUAN</label></div>
				  <div class="col-sm-2" align="center"><label for="sel1">GOOD CATEGORY</label></div>
				</div>
				<div class="row">
				  <input type="hidden" class="form-control" name="no" id="no">
				  <div class="col-sm-3" align="center"><input type="text" name="item-description" class="form-control" id="item-description"></div>
				  <div class="col-sm-2" align="center"><input type="number" name="qty" class="form-control" id="qty"></div>
				  <div class="col-sm-3" align="center"><input type="text" name="satuan" class="form-control" id="satuan"></div>
				  <div class="col-sm-2" align="center">
				  	<select class="form-control" id="category" name="category">
							<option value="Non DG" selected>Non DG</option>
							<option value="DG">DG</option>
					</select>
				 </div>
				  <div class="col-sm-2">
				 	<button type="button" class="btn btn-primary" id="add_data">Add New Record</button>
				  </div>
				</div>

				<hr>
				<div class="form-group">
				<table class="table table-hover table-striped table-bordered" id="data_table">
					<thead>
						<tr>
							<th>No</th>
							<th>ITEM DESCRIPTION</th>
							<th>QTY</th> <!---Farhan-->
							<th>SATUAN</th>
							<th>GOOD CATEGORY</th>
						</tr>
					</thead>  
					<tbody>
					</tbody>
				</table>
				</div>


				<div style="float:right;">
					<!--<input type="submit" value="Proses" class="btn btn-success" id="save">-->
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Proses</button>
				</div>
				
	</div>
		</div>
			</div>
				</div>
					</div>
						</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Proses Pengiriman</h4>
      </div>
      <div class="modal-body">
        <p>Data Pengiriman Akan Dimasukan Ke Database</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" value="Proses" class="btn btn-success" id="save">
      </div>
    </div>

  </div>
</div>

</form>

<!--JavaScript-->
<script type="text/javascript">
	$(function(){
		var set_number = function() {
			var table_len = $('#data_table tbody tr').length+1;
			$('#no').val(table_len);
		}
		set_number();
		$('#add_data').click(function() {
			var no = $('#no').val();
			var itemdesc = $('#item-description').val();
			var qty = $('#qty').val();
			var satuan = $('#satuan').val();
			var category = $('#category').val();
		$('#data_table tbody:last-child').append(
				'<tr>'+
					'<td class="no">'+no+'</td>'+
					'<td class="itemdesc">'+itemdesc+'</td>'+
					'<td class="qty">'+qty+'</td>'+
					'<td class="satuan">'+satuan+'</td>'+
					'<td class="category">'+category+'</td>'+
				'</tr>'
			);
		$('#no').val('');
		$('#item-description').val('');
		$('#qty').val('');
		$('#satuan').val('');
		$('#category').val('');
		set_number();
		});
		$('#save').click(function() {
			var no = [];
			var itemdesc = [];
			var qty = [];
			var satuan = [];
			var category = [];

			$('.no').each(function(){
				no.push($(this).text());
			});
			$('.itemdesc').each(function(){
				itemdesc.push($(this).text());
			});
			$('.qty').each(function(){
				qty.push($(this).text());
			});
			$('.satuan').each(function(){
				satuan.push($(this).text());
			});
			$('.category').each(function(){
				category.push($(this).text());
			});
			$.ajax({
				url:"Proses/proses_insert.php",
				method:"POST",
				data:{no:no, itemdesc:itemdesc, qty:qty, satuan:satuan, category:category},
				success:function(data){}
			});
			});
		});

</script>