  <?php
  $dsn = getenv('MYSQL_DSN');
  $cUser = getenv('MYSQL_USER');
  $cPass = getenv('MYSQL_PASSWORD');
  $conn = new PDO($dsn, $cUser, $cPass);
  //$conn = new mysqli("35.231.20.242","webguest","M2Ykx19P!rm&", "Site_Users");
	if(isset($_POST['street'])){
		$firNm = mysqli_real_escape_string($conn, $_POST['first']);
		$lstNm = mysqli_real_escape_string($conn, $_POST['last']);
		$pss = mysqli_real_escape_string($conn, $_POST['password']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$st = mysqli_real_escape_string($conn, $_POST['street']);
		$cit = mysqli_real_escape_string($conn, $_POST['city']);
		$stat = mysqli_real_escape_string($conn, $_POST['state']);
		$bytSched = $_POST['s1'] . $_POST['s2'] . $_POST['s3'] . $_POST['s4'] . $_POST['s5'] . $_POST['s6'] . $_POST['s7'] . $_POST['s8'] . $_POST['s9'] . $_POST['s10'] . $_POST['s11'] . $_POST['s12'] . $_POST['s13'] . $_POST['s14'] . $_POST['s15'] . $_POST['s16'] . $_POST['s17'] . $_POST['s18'] . $_POST['s19'] . $_POST['s20'] . $_POST['s21'];
		$hexSched = dechex(bindec($bytSched));
		if (mysqli_connect_errno())
			echo "Failed to connect to MySQL: " . mysqli_connect_errno();
		//Address Insertion
		$sql = "INSERT INTO user_Address(address_street, address_city, address_state) VALUES ('".$st."','".$cit."','".$stat."')";
		$conn->query($sql);
		$result = $conn->query("SELECT max(address_id) as mAdd FROM user_Address WHERE address_street = '" . $st . "'");
		$row = mysqli_fetch_assoc($result);
		// SQL INSERTION INTO fk_address_id field of user_Site
		$sql = "INSERT INTO master_Siteuser(siteuser_first, siteuser_last, siteuser_email, siteuser_phone1, siteuser_phone2, fk_hdyhau_id, fk_usertype_id, siteuser_optin, fk_address_id, siteuser_password, siteuser_availability) VALUES ('".$firNm."','".$lstNm."','".$email."','".$_POST['phone1'] ."','".$_POST['phone2'] ."',".intVal($_POST['hdyhau']) .",1,". intVal($_POST['optIn']).",".$row["mAdd"].",MD5('".$pss."'),'".$hexSched."')";
		if ($conn->query($sql) !== TRUE)
			echo "Error: " . $sql . "<br>" . $conn->error;
		$conn->close();
		$_SESSION['user'] = $_POST['first'];
		header('Location: index.html');
	}
?>

<?php include("PageElements/header.html");
	include("PageElements/navbar.html"); ?>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<title>Resident Registration</title>
<body id="main_body" class="formBody">
	<div id="form_container" style="margin:75px 40px">
		<h3>Resident Registration</h3>
		<form style="width:35%" id="resReg" action="res-registration.php" method="post">	<!--Hidden Fields from first page of registration-->
			<input type="hidden" name="first" value="<?php echo $_POST['first'];?>">
			<input type="hidden" name="last" value="<?php echo $_POST['last'];?>">
			<input type="hidden" name="email" value="<?php echo $_POST['email'];?>">
			<input type="hidden" name="phone1" value="<?php echo $_POST['phone1'];?>">
			<input type="hidden" name="phone2" value="<?php echo $_POST['phone2'];?>">
			<input type="hidden" name="password" value="<?php echo $_POST['password'];?>">
			<input type="hidden" name="hdyhau" value="<?php echo $_POST['hdyhau'];?>">
			<input type="hidden" name="optIn" value="<?php echo $_POST['optIn'];?>">
			<label class="form-control-label">Address </label>
			<input name="street" class="form-control" type="text" maxlength="80"/>
			<br>
			<label class="form-control-label">City </label>
			<input name="city" class="form-control" type="text" maxlength="40"/>
			<br>
			<label class="form-control-label">State </label>
			<br>
			<input class="form-control-sm" size="3" maxlength="2" name="state">
			<?php include("week_availability.php"); ?>
			<p>
			<input id="submitButton" class="button_text" type="submit" name="submit" value="Submit Registration"/>
		</form>
	</div>
<?php include("PageElements/footer.html"); ?>
