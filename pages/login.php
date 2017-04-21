<?php
	include 'connect_db.php';
	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		session_start();
		$_SESSION['name'] = $name;
		$_SESSION['password'] = $password;

		$query = $db->prepare("SELECT * FROM user WHERE name=? AND password=?");

		$query->execute(array($name,$password));
		$row = $query->rowCount();

		if($row){
			header("location: view_mine.php");
		} else{
			$error_message = "Wront username/password";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Donate Blood</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/style.css" >

</head>
	
<body>
	<div class="header_area well text-center">
		<h3 class="head text-danger"><?php echo @$error_message?></h3>
	</div>
	<div class="content_area">
		<div class="container table-responsive  border_none">
			<form method="post">
				<table class="table">
					<div class="form-group">
						<tr>
							<td>Name</td>
							<td><input  class="form-control" type="text" name="name" id="name" required ></td>
						</tr>
					</div>
					<div class="form-group">
						<tr>
							<td>Password</td>
							<td><input  class="form-control"  type="password" name="password" id="password" required ></td>
						</tr>
					</div>
					<div class="form-group">
						<tr>
							<td></td>
							<td><input type="submit" name="submit" id="submit" value="Let's Go" class="btn btn-primary"></td>
						</tr>
					</div>
				</table>
			</form>
		</div>
	</div>
	<footer class="footer_area">
		
	</footer>
	
	
	
<!-- jQuery 2.2.3 -->
<script src="../js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../js/bootstrap.min.js"></script>
<!--main js-->
<script src="../js/mycode.js"></script>
<script>

</script>
</body>
</html>
