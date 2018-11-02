<form method="post" action="passReset.php"> 
	<?php session_start(); ?>
	Enter the email address on file: <input type="text" maxlength="60" tabindex=1 name="eMail" onkeydown="javascript:validate(this)" required>
</form>

<?php
//Return User Data from Database
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$conn = new mysqli("35.231.20.242","webguest","M2Ykx19P!rm&", "Site_Users");
	$user = mysqli_real_escape_string($conn, $_POST['eMail']);
	$sql = "UPDATE siteuser_first, siteuser_last FROM user_Site WHERE siteuser_username = '$user' AND siteuser_password = MD5('$pass')";
	$result = mysqli_query($conn, $sql) or die("Connection Error: " . mysql_error());
	$user = mysqli_fetch_assoc($result);
	$count = mysqli_num_rows($result);
	if($count == 1) {
		$_SESSION['firstName'] = $user['siteuser_first'];
		$_SESSION['lastName'] = $user['siteuser_last'];
		header('Location: index.html');
	} else {
		$_SESSION['error'] = "Invalid Username or Password.";
		header('Location: passReset.php');
	}
}
?>

<script>
	function validate(input){
		var check = input.value;
		var regex = /[^a-z0-9]/gi;
		input.value = input.value.replace(regex, "");
	}
</script>