<?php
	include 'connect_db.php';
	session_start();
	@$name = $_SESSION['name'];
	@$password = $_SESSION['password'];
	
	$query = $db->prepare("SELECT * FROM user WHERE name=? AND password=?");
	$query->execute(array($name,$password));
	$result = $query->fetch(PDO::FETCH_ASSOC);
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
		
	</div>
	<div class="content_area">
		<div class="container table-responsive">
			<table class="table">
				<div class="form-group">
					<tr>
						<td>Name </td>
						<td><?php echo $result['name'] ?></td>
					</tr>
				</div>
				<tr>
					<td>Email </td>
					<td><?php echo $result['mail'] ?></td>
				</tr>
				</div>
				<tr>
						<td>Password</td>
						<td><?php echo $result['password'] ?></td>
					</tr>
				</div>
				<tr>
						<td>Age</td>
						<td><?php echo $result['age'] ?></td>
					</tr>
				</div>
				<tr>
						<td>Blood Group</td>
						<td><?php echo $result['blood_group'] ?></td>
					</tr>
				</div>
				<tr>
					<td>Division </td>
					<td><?php echo $result['division'] ?></td>
				</tr>
				</div>
				<tr>
						<td>Number</td>
						<td><?php echo $result['number'] ?></td>
					</tr>
				</div>
				<tr>
						<td>Gender</td>
						<td><?php echo $result['gender'] ?></td>
					</tr>
				</div>
				<tr>
						<td>Availability</td>
						<td><?php echo $result['available'] ?></td>
					</tr>
				</div>
			</table>
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
