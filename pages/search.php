	<?php include 'head.php'?>
	<div class="content_area">
		<div class="container">
			<div class="row text-center">
				<form action="view.php" method="post">
					<div class="form-group">
						<label for="blood_group">Select Blood Group</label>
						<select class="form-control blood_group" id="blood_group" name="blood_group">
							<option>Select Group.....</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
						</select>
					</div>
					<div class="form-group">
						<label for="blood_group">Select Location</label>
						<select class="form-control location" id="location" name="location">
							<option>Select Division.....</option>
							<option value="Dhaka">Dhaka</option>
							<option value="Comilla">Comilla</option>
							<option value="Barisal">Barisal</option>
							<option value="Chittagong">Chittagong</option>
							<option value="Khulna">Khulna</option>
							<option value="Sylhet">Sylhet</option>
							<option value="Mymensingh">Mymensingh</option>
							<option value="Rajshahi">Rajshahi</option>
							<option value="Rangpur">Rangpur</option>
						</select>
					</div>
					<input type="submit" class="btn btn-primary" value="Search" >
					<a href="../index.php" class="btn btn-primary" value="Search" >Back</a>
				</form>
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
