 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Resident Registration</title>
<link rel="stylesheet" href="style.css" media="all">
</head>
<body id="main_body" class="formBody">
	<div id="form_container">
		<h1><a>Registration Cont'd.</a></h1>
		<form id="resReg" action="res-registration.php" method="post">					
			<label class="description" for="address">Address </label>
			<input id="street" name="address" class="elementtextmed" type="text" maxlength="80"/> 
			<br>
			<label class="description" for="city">City </label>
			<input id="city" name="city" class="elementtextmed" type="text" maxlength="40"/> 			
			<br>							    
			<label class="description" for="state">State </label>
			<input size="3" maxlength="2" name="state"> 
			
			<input id="submitButton" class="button_text" type="submit" name="submit" value="Submit Registration" />
		</form>
	</div>
</body>
</html>

 <?php	
	$conn = new mysqli("35.231.20.242","webguest","M2Ykx19P!rm&", "Site_Users");
	if(isset($_POST['street'])){
		$bytSched = $_POST['1'] . $_POST['2'] . $_POST['3'] . $_POST['4'] . $_POST['5'] . $_POST['6'] . $_POST['7'] . $_POST['8'] . $_POST['9'] . $_POST['10'] . $_POST['11'] . $_POST['12'] . $_POST['13'] . $_POST['14'] . $_POST['15'] . $_POST['16'] . $_POST['17'] . $_POST['18'] . $_POST['19'] . $_POST['20'] . $_POST['21'];
		$hexSched = $bytSched.toString(16);
		echo '<script>console.log(' . $hexSched . ')</script>';
		//Insert user into user table
		//hostname - stoked-energy-210523:us-east1:mcgtechdb1
		if (mysqli_connect_errno())
			echo "Failed to connect to MySQL: " . mysqli_connect_errno();
		//Address Insertion
		$sql = "INSERT INTO user_Address(address_line1, address_line2, address_city, address_state) VALUES ('$_POST[address]', '', '$_POST[city]', '$_POST[state]')";
		$conn->query($sql);
		$result = $conn->query("SELECT max(address_id) as mAdd FROM user_Address");
		$row = mysqli_fetch_assoc($result);

		// SQL INSERTION INTO fk_address_id field of user_Site--> 
		$sql = "INSERT INTO master_Siteuser(siteuser_first, siteuser_last, fk_address_id, siteuser_username, siteuser_password) VALUES (" . $firNm . "," . $lstNm . "," . $row["mAdd"] . "," . $uNm . ", MD5(" . $pss . "))";
		//$sql = "INSERT INTO user_Site(siteuser_first, siteuser_last, fk_address_id, siteuser_username, siteuser_password) VALUES ('$_POST[first]', '$_POST[last]', " . $row["mAdd"] . ", '$_POST[userName]', MD5('$_POST[password]'))";
		if ($conn->query($sql) !== TRUE)
			echo "Error: " . $sql . "<br>" . $conn->error; 
		$conn->close();
		$_SESSION['user'] = $_POST['first'];
		header('Location: index.html');
	} else {
		$firNm = mysqli_real_escape_string($conn, $_SESSION['first']);
		$lstNm = mysqli_real_escape_string($conn, $_SESSION['last']);
		$uNm = mysqli_real_escape_string($conn, $_SESSION['userName']);
		$pss = mysqli_real_escape_string($conn, $_SESSION['password']);
	}
?>