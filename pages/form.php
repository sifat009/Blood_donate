<?php
	if(isset($_REQUEST['submit'])){
		header("location: login.php");
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
	<div class="header_area">
		
	</div>
	<div class="content_area">
		<div class="container table-responsive  border_none">
			<form method="post" id="form">
				<table class="table">
					<div class="form-group">
						<tr>
							<td>Name</td>
							<td><input  class="form-control" type="text" name="name" id="name" required ></td>
						</tr>
					</div>
				
					<div class="form-group">
						<tr>
							<td>Email</td>
							<td><input  class="form-control"  type="email" name="mail" id="mail" required ></td>
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
							<td>Age</td>
							<td><input  class="form-control"  type="number" name="age" id="age" required ></td>
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
							<td><input type="tel" name="number" id="number" class="number" ></td>
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
							<td class="text-right"><input class="btn btn-primary" name="submit" type="submit" value="Submit" id="submit"></td>
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
	$('document').ready(function(){
		$("#submit").click(function(){
			$.ajax({
				type: 'post',
				url: 'insertdata.php',
				data: {
				 user_name: $('#name').val(),
				 mail : $('#mail').val(),
				 password : $('#password').val(),
				 age: $('#age').val(),
				 blood_group : $('#blood_group').val(),
				 division : $('#location').val(),
				 number: $('#number').val(),
				 gender : $('#gender').val(),
				 available : $('#available').val()

				},
				success: function (response) {
				 console.log(response);
				}
			});	
		});
	
});
</script>
</body>
</html>
