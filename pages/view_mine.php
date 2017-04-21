<?php
	include 'connect_db.php';
	session_start();
	@$name = $_SESSION['name'];
	@$password = $_SESSION['password'];
	
	$query = $db->prepare("SELECT * FROM user WHERE name=? AND password=?");
	$query->execute(array($name,$password));
	$result = $query->fetch(PDO::FETCH_ASSOC);
?>
	<?php include 'head.php'?>
	<div class="content_area">
		<div class="container table-responsive">
			<table class="table">
				<tr>
					<td>Name </td>
					<td><?php echo $result['name'] ?></td>
				</tr>
				<tr>
					<td>Email </td>
					<td><?php echo $result['mail'] ?></td>
				</tr>
				<tr>
						<td>Password</td>
						<td><?php echo $result['password'] ?></td>
				</tr>
				<tr>
						<td>Age</td>
						<td><?php echo $result['age'] ?></td>
				</tr>
				<tr>
						<td>Blood Group</td>
						<td><?php echo $result['blood_group'] ?></td>
				</tr>
				<tr>
					<td>Division </td>
					<td><?php echo $result['division'] ?></td>
				</tr>
				<tr>
						<td>Number</td>
						<td><?php echo $result['number'] ?></td>
				</tr>
				<tr>
						<td>Gender</td>
						<td><?php echo $result['gender'] ?></td>
				</tr>
				<tr>
						<td>Availability</td>
						<td><?php echo $result['available'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<a href="update_mine.php?id=<?php echo $result['id']?>" class="btn btn-primary" name="submit" id="submit" >change data</a>
						<a href="login.php" class="btn btn-info" name="submit" id="submit" >Logout</a>
					</td>
				</tr>
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
