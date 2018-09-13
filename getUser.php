<form method="post" action="getUser.php"> 
	<?php session_start(); ?>
	Username : <input type="text" maxlength="30" tabindex=1 name="uName" onkeyup="validate(this)" required>
	<a href="form.html" tabindex=4 style="font-size: 12px">New User? Register Here</a><br>
	Password : <input type="password" maxlength="16" tabindex=2 name="pWord" required>
	<a href="" tabindex=5 style="font-size: 12px;"> Forgot Password?</a><br>
	<input type="submit" tabindex=3/>
	<?php if(isset($_SESSION['error'])){ 
		echo '<a style="font-size:12px; color:red; padding-left: 20px;"" >' . $_SESSION['error'] . "</a>"; 
		unset($_SESSION['error']);}
	?>
</form>

<?php
//Return User Data from Database
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$conn = new mysqli("35.231.20.242","webguest","M2Ykx19P!rm&", "Site_Users");
	$user = mysqli_real_escape_string($conn, $_POST['uName']);
	$pass = mysqli_real_escape_string($conn, $_POST['pWord']);
	$sql = "SELECT siteuser_first, siteuser_last FROM user_Site WHERE siteuser_username = '$user' AND siteuser_password = MD5('$pass')";
	$result = mysqli_query($conn, $sql) or die("Connection Error: " . mysql_error());
	$user = mysqli_fetch_assoc($result);
	$count = mysqli_num_rows($result);
	if($count == 1) {
		$_SESSION['firstName'] = $user['siteuser_first'];
		$_SESSION['lastName'] = $user['siteuser_last'];
		header('Location: index.html');
	} else {
		$_SESSION['error'] = "Invalid Username or Password.";
		header('Location: getUser.php');
	}
}
?>

<script>
	function validate(input){
		var regex = /[^a-z0-9]/gi;
		input.replace(regex, "");
	}
</script>