<?php 
	include("PageElements/header.html");
	include("PageElements/navbar.html");
?>
<title>User Login</title>

<body id="loginBody" class="formBody">
	<form id="login" style="width:25%; margin:60px 20px" method="post" action="getUser.php"> 
		<label for="uName" class="form-control-label">Username : </label>
		<input type="text" maxlength="20" tabindex=1 name="uName" onkeydown="javascript:validate(this)" required class="form-control-sm"><br>
		<a href="registration.html" tabindex=4 style="font-size: 12px; color: blue">New User? Register Here</a><br><br>
		<label for="pWord" class="form-control-label">Password : </label>
		<input type="password" maxlength="16" tabindex=2 name="pWord" required class="form-control-sm"><br>
		<a href="passReset.php" tabindex=5 style="font-size: 12px; color:blue"> Forgot Password?</a><br>
		<br>
		<input type="submit" tabindex=3/>
		<?php if(isset($_SESSION['error'])){ 
			echo '<a name="errLabel" style="font-size:12px; color:red; padding-left: 20px;"" >' . $_SESSION['error'] . "</a>"; 
			unset($_SESSION['error']);}
		?>
	</form>
</body>
<?php include("PageElements/footer.html") ?>
</html>

<?php
//Return User Data from Database
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$conn = new mysqli("35.231.20.242","webguest","M2Ykx19P!rm&", "Site_Users");
	$user = mysqli_real_escape_string($conn, $_POST['uName']);
	$pass = mysqli_real_escape_string($conn, $_POST['pWord']);
	$sql = "SELECT siteuser_first, siteuser_last FROM master_Siteuser WHERE siteuser_username = '$user' AND siteuser_password = MD5('$pass')";
	$result = mysqli_query($conn, $sql) or die("Connection Error: " . mysql_error());
	$user = mysqli_fetch_assoc($result);
	$count = mysqli_num_rows($result);
	if($count == 1) {
		$_SESSION['firstName'] = $user['siteuser_first'];
		$_SESSION['lastName'] = $user['siteuser_last'];
		header('Location: index.html');
		//Alert user login was unsuccessful
	} else {
		$_SESSION['error'] = "Invalid Username or Password.";
		header('Location: getUser.php');
	}
}
?>