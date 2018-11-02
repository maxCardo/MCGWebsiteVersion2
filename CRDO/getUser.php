<?php
//Return User Data from Database
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$conn = new mysqli("35.231.20.242","webguest","M2Ykx19P!rm&", "Site_Users");
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pass = mysqli_real_escape_string($conn, $_POST['pWord']);
	$sql = "SELECT siteuser_first, siteuser_last FROM master_Siteuser WHERE siteuser_email = '$email' AND siteuser_password = MD5('$pass')";
	$result = mysqli_query($conn, $sql) or die("Connection Error: " . mysql_error());
	$user = mysqli_fetch_assoc($result);
	$count = mysqli_num_rows($result);
	if($count == 1) {
		$_SESSION['user'] = $user['siteuser_first'];
		header('Location: index.html');
		//Alert user login was unsuccessful
	} else {
		$_SESSION['error'] = "Invalid Email or Password.";
		header('Location: getUser.php');
	}
}
?>