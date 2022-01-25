<?php 

if(isset($_GET['mod'])){
	$page = $_GET['mod'];
	
	switch($page) {
		case "pengiriman_form":
			include "page/formpengiriman.php";
		break;
		
		case "rpt_form":
			include "page/rpt_pengiriman.php";
		break;
	}
}else{
	echo "Module Tidak Ditemukan";
}