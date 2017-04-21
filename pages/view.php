<?php
	include 'connect_db.php';
	@$blood_group = $_REQUEST['blood_group'];
	@$division = $_REQUEST['location'];
	$query = $db->prepare("SELECT name, age, blood_group, number, available FROM user WHERE blood_group=? AND division=?");
	$query->execute(array($blood_group, $division));
	$result = $query->fetchAll(PDO::FETCH_ASSOC);

?>
	<?php include 'head.php'?>
	<div class="content_area">
		<div class="container table-responsive">
			<table class="table table-bordered">
				<tr class="bg-primary">
					<th>Name</th>
					<th>Age</th>
					<th>Blood Group</th>
					<th>Number</th>
					<th>Availability</th>
				</tr>
				
				<?php
					foreach($result as $a){
						
				?>
				
				<tr>
					<td><?php echo $a['name'] ?></td>
					<td><?php echo $a['age'] ?></td>
					<td><?php echo $a['blood_group'] ?></td>
					<td><?php echo $a['number'] ?></td>
					<td><?php echo $a['available'] ?></td>
				</tr>
				<?php
					
					}
				
				?>
			</table>
			<div class="well text-center">
				<a class="btn btn-primary" href="search.php">Back</a>
			</div>
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
