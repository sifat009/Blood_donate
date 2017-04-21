<?php
	session_start();
	include 'connect_db.php';
	@$id = $_REQUEST['id'];

	$query = $db->prepare("SELECT * FROM user WHERE id=$id");
	$query->execute();
	$result = $query->fetch(PDO::FETCH_ASSOC);
	
if(isset($_REQUEST['submit'])){
		@$name = $_REQUEST['name'];
		@$mail = $_REQUEST['mail'];
		@$password = $_REQUEST['password'];
		@$age = $_REQUEST['age'];
		@$blood_group = $_REQUEST['blood_group'];
		@$division = $_REQUEST['location'];
		@$number = $_REQUEST['number'];
		@$gender = $_REQUEST['gender'];
		@$available = $_REQUEST['available'];
		
		$_SESSION['name'] = $name;
		$_SESSION['password'] = $password;
	
		$query = $db->prepare("UPDATE user SET name=?, mail=?, password=?, age=?, blood_group=?, division=?, number=?, gender=?, available=? WHERE id=$id");
		$query->execute(array($name, $mail, $password, $age, $blood_group, $division, $number, $gender, $available));
		header("location: view_mine.php");
}
	

?>
	<?php include 'head.php'?>
	<div class="content_area">
		<div class="container table-responsive  border_none">
			<form method="post" id="form">
				<table class="table">
					<div class="form-group">
						<tr>
							<td>Name</td>
							<td><input  class="form-control" type="text" name="name" id="name" value="<?php echo $result['name'] ?>" ></td>
						</tr>
					</div>
				
					<div class="form-group">
						<tr>
							<td>Email</td>
							<td><input  class="form-control"  type="email" name="mail" id="mail" value="<?php echo $result['mail'] ?>" required ></td>
						</tr>
					</div>
					<div class="form-group">
						<tr>
							<td>Password</td>
							<td><input  class="form-control"  type="password" name="password" id="password" value="<?php echo $result['password'] ?>" required ></td>
						</tr>
					</div>
					<div class="form-group">
						<tr>
							<td>Age</td>
							<td><input  class="form-control"  type="number" name="age" id="age" value="<?php echo $result['age'] ?>" required ></td>
						</tr>
					</div>
					<div class="form-group">
						<tr>
							<td>Blood Group</td>
							<td>
								<select class="blood_group form-control" id="blood_group" name="blood_group">
									<option value="">Select Group.....</option>
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
								</select>
							</td>
						</tr>
					</div>
					<div class="form-group">
						<tr>
							<td>Select your Division</td>
							<td>
								<select class="location form-control" id="location" name="location">
									<option value="">Select Division.....</option>
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
							</td>
						</tr>
					</div>
					<div class="form-group">
						<tr>
							<td>Mobile Number</td>
							<td><input type="tel" name="number" id="number" class="number" value="<?php echo $result['number'] ?>" ></td>
						</tr>
					</div>
					<div class="form-group">
						<tr>
							<td>Gender</td>
							<td>
								<label class="radio-inline">
									<input type="radio" name="gender" id="gender" value="Male"> Male
								</label>
								<label class="radio-inline">
									<input type="radio" name="gender" id="gender" value="female"> Female
								</label>
								<label class="radio-inline">
									<input type="radio" name="gender" id="gender" value="other"> Others
								</label>
							</td>
						</tr>
					</div>
					<div class="form-group">
						<tr>
							<td>Availability</td>
							<td>
								<label class="radio-inline">
									<input type="radio" name="available" id="available" value="1"> Available
								</label>
								<label class="radio-inline">
									<input type="radio" name="available" id="available" value="0"> Not Available
								</label>
							</td>
						</tr>
					</div>
					<div class="form-group">
						<tr>
							<td></td>
							<td class="text-right">
								<input class="btn btn-primary" name="submit" type="submit" value="Submit" id="submit">
								<a href="view_mine.php" class="btn btn-info">Back</a>
							</td>
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

</body>
</html>
