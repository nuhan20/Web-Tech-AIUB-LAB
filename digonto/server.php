<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'cruddb');

// initialize variables
$name = "";
$address = "";
$id = 0;
$update = false;

// insert data
if (isset($_POST['save'])) {
	$name = $_POST['name'];
	$address = $_POST['address'];

	mysqli_query($db, "INSERT INTO info (name, address, ages, gender, dob) VALUES ('$name', '$address', 'ages', 'gender', 'dob')");
	$_SESSION['message'] = "Address saved";
	header('location: index.php');
}


//update data
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$age = $_POST['ages'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];

	mysqli_query($db, "UPDATE info SET name='$name', address='$address', ages='$age', gender='$gender' , dob = '$dob' WHERE id=$id");
	$_SESSION['message'] = "Address updated!";
	header('location: index.php');
}
// delete data
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	$_SESSION['message'] = "Address deleted!";
	header('location: index.php');
}
