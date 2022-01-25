//$pengirimanId 		= getAutoId('pengirimanId', 'pengiriman_header', 'JNT');
//$requestType 		= $_POST['requestType'];
//$portOrigin 		= $_POST['portOrigin'];
//$portDestination 	= $_POST['portDestination'];
//$shipmenMode 		= $_POST['shipmenMode'];
//$Weight 			= $_POST['Weight'];
//$Dimension 			= $_POST['Dimension'];


$tmp=array($_POST['no'], $_POST['itemdesc']);
echo "$tmp";
				
					


//$query = "INSERT INTO `pengiriman_header` 
	//(`pengirimanId`, `requestType`, `portOrigin`, `portDestination`, `shipmenMode`, `Weight`, `Dimension`, `RequestDate`, `RequestBy`) 
	//VALUES ('$pengirimanId', '$requestType', '$portOrigin', '$portDestination', '$shipmenMode', '$Weight', '$Dimension', '".date('Y-m-d')."', '".$_SESSION['nama']."')";

//mysql_query($query);

//header("location:../index.php");




var table_data = [];
			$('#data_table tr').each(function(row,tr){
				if($(tr).find('td:eq(0)').text() == "") {
				}else{
					var sub = {
				'no' : $(tr).find('td:eq(0)').text(),
				'itemdesc' : $(tr).find('td:eq(1)').text(),
				'qty' : $(tr).find('td:eq(2)').text(),
				'satuan' : $(tr).find('td:eq(3)').text(),
				'category' : $(tr).find('td:eq(4)').text(),
				};
				table_data.push(sub);
				}
				});
				swal({
					    title : 'Save All ?',
						text : '',
						showButtonCancel : true,
						confimButtonText : 'Yes',
						closeModal : false ,
						icon: "warning",
						buttons: true,
						dangerMode: true,
					  })
					  .then((willsave) => {
					    if (willsave) {
					    	var data = $('.form-pengiriman').serialize();
					      	var data = {'data_table' : table_data };
					            $.ajax({
					                data : data,
					                type : 'POST',
					                url : 'Proses/proses_insert.php',
					                crossOrigin : false,
					                dataType : 'json',
					                success : function(result){
					                  console.log(result.check)
					              }
					            });
					    } else {
					      swal("Canceled!");
					    }
					  });