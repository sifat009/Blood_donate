<?php
include 'connect_db.php';
	
@$name = $_REQUEST['user_name'];
@$mail = $_REQUEST['mail'];
@$password = $_REQUEST['password'];
@$age = $_REQUEST['age'];
@$blood_group = $_REQUEST['blood_group'];
@$division = $_REQUEST['division'];
@$number = $_REQUEST['number'];
@$gender = $_REQUEST['gender'];
@$available = $_REQUEST['available'];

$query = $db->prepare("INSERT INTO user( name, mail, password, age, blood_group, division, number, gender, available)
VALUES (?,?,?,?,?,?,?,?,?)");
$query->execute(array($name, $mail, $password, $age, $blood_group, $division, $number, $gender, $available));