<?php
if(isset($_SESSION['username']) &&  $_SESSION['username'] !='' && $_SESSION['level'] =='admin'){
?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel-group">
  					<div class="panel panel-default">
						<div class="panel-heading">Form Report:</div>
							<div class="panel-body" style="height: 500px">

								
						<form class = "horizontal" action = "page/rpt_excel.php">
							<div class="row">
									<div class="col-sm-4">
										<label for="sel1">Tanggal Pengiriman:</label>
									</div>
							</div>
							<div class="row">
									<div class="col-sm-4">
										<input type="date" class="form-control" name="date" id="id">
									</div>
									<div class="col-sm-3">
										<button type = "submit" class = "btn btn-primary">Export to Excel</button>
									</div>
							</div>
						</form>

	</div>
		</div>
			</div>
				</div>
					</div>
						</div>

<script>
	$(document).ready(function(){
		$('#btn_pdf').click(function(){
			var date = $("#date").val();
			window.location.href="page/rpt_pdf.php?date="+date;
		});
		});
</script>	

<?php
 }else{

 	header("location:index.php?mod=pengiriman_form");
 }

?>