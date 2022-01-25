<?php
session_start();
include "koneksi.php";
$username ="admin@mail.com";
$password ="admin";
$us 	  = (isset($_POST['username']))?$_POST['username']:'';
$ps 	  = (isset($_POST['password']))?$_POST['password']:'';
$messages = '';
$page 	  = 'login.php';
do{
	if($us ==''){
		$messages = '?msg=Username tidak boleh kosong';
		break;
	}
	
	if($ps ==''){
		$messages = '?msg=Password tidak boleh kosong';
		break;
	}
	
	$new_ps = md5($ps);
	$query = "SELECT * FROM user WHERE Username ='$us' and Password='$new_ps'";
	$res = mysql_query($query);
	$row = mysql_fetch_array($res);

	if(mysql_num_rows($res) > 0){
		$_SESSION['username'] 	= $row['Username'];
		$_SESSION['nama'] 		= $row['Name'];
		$_SESSION['level'] 		= $row['level'];
		$_SESSION['id'] 		= $row['UserId'];
		$page = 'index.php?mod=pengiriman_form';
	}else{
		$messages = '?us='.$us.'&msg=Username tidak ditemukan';
		break;
	}
	
	
}while(FALSE);
header("location:../".$page.$messages);








