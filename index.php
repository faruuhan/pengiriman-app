 <?php 
 session_start();
 if(isset($_SESSION['username'])){?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pengiriman</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	   <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/jquery-3.3.1.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script> 
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Pengiriman</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Hi!  <?php echo $_SESSION['nama'] ?></p></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php if(isset($_SESSION['username']) &&  $_SESSION['username'] !='' && $_SESSION['level'] =='admin'){ ?>
			<li><a href="index.php?mod=rpt_form">Report</a></li>
			<?php } ?>
      <li><a href="index.php?mod=pengiriman_form">Form Pengiriman</a></li>
			<li><a href="https://drive.google.com/file/d/1t_Uh8UZKVmly822UVOPSG1Z8oyErPeI5/view">Download UAS VB</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#" data-toggle="modal" data-target="#logoutModal">LogOut</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Page Content -->

<?php include "module.php"; ?>

 <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="footer">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>
</body>


<!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body"> <?php echo 'Hi!, <b> '.$_SESSION['nama'].' </b> apakah anda Yakin ingin keluar..?'?></div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="proses/logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

</html>
 <?php
 }else
	header("location:login.php"); ?>
 
 