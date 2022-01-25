 <?php 
$us = (isset($_GET['us']))?$_GET['us']:'';
$msg= (isset($_GET['msg']))?$_GET['msg']:'';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login - Pengirman</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/jquery-3.3.1.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>


<div class="container">
  <h2>Login!</h2>
  <form class="form-horizontal" method="POST" action="Proses/ceklogin.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Username:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="inputUsername" placeholder="Enter email" name="username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-6">          
        <input type="password" class="form-control" id="inputPassword" placeholder="Enter password" name="password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
    <div class="form-group">  
      <div class="col-sm-12" align="center"> 
        <?php echo $msg; ?>
      </div>
    </div>
  </form> 
</div>


</body>
</html>
 
 
 