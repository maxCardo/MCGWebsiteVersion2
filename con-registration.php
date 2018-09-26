<?php include("PageElements/header.html");
 include("PageElements/navbar.html"); ?>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<title>Contractor Registration</title>

<body id="conRegBody" class="formBody">
	<div id="form_container" style="margin:75px 40px">
		<h3>Contractor Registration</h3>
		<br>
		<form style="width:50%" id="conReg" action="con-registration.php" method="post">					
			<p><?php echo $firNm . " " . $lstNm . " " . $uNm . " " . $pss; ?></p>
			<label class="form-control-label" for="company">Company Name</label><br>
			<input class="form-control" id="company" type="text" maxlength="50"/>
			<label class="form-control-label" for="address">Billing Address</label><br>
			<input required class="form-control" id="street" name="address" type="text" maxlength="80"/> 
			<br>
			<label class="form-control-label" for="city">City </label><br>
			<input required id="city" class="form-control-sm" name="city" type="text" maxlength="40"/>
			<br>
			<label class="form-control-label" for="state">State </label><br>
			<input required class="form-control-sm" maxlength="2" name="state" value="PA">
			<br>
			<h4>Enter your typical weekly availability</h4>
			<table style="width:40%">
				<tr class="colHead">
					<td></td>
					<th>Morning</th>
					<th>Afternoon</th>
					<th>Evening</th>
				</tr>
				<tr>
					<th class="rowHead">Monday</th>
					<td><input type="checkbox" Checked data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="1" class="tblinputs"></input></td>
					<td><input type="checkbox" Checked data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="2" class="tblinputs"></input></td>
					<td><input type="checkbox" Checked data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="3" class="tblinputs"></input></td>
				</tr>
				<tr>
					<th class="rowHead">Tuesday</th>
					<td><input type="checkbox" Checked data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="4" class="tblinputs"></input></td>
					<td><input type="checkbox" Checked data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="5" class="tblinputs"></input></td>
					<td><input type="checkbox" Checked data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="6" class="tblinputs"></input></td>
				</tr>
				<tr>
					<th class="rowHead">Wednesday</th>
					<td><input type="checkbox" Checked data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="7" class="tblinputs"></input></td>
					<td><input type="checkbox" Checked data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="8" class="tblinputs"></input></td>
					<td><input type="checkbox" Checked data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="9" class="tblinputs"></input></td>
				</tr>
				<tr>
					<th class="rowHead">Thursday</th>
					<td><input type="checkbox" Checked data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="10" class="tblinputs"></input></td>
					<td><input type="checkbox" Checked data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="11" class="tblinputs"></input></td>
					<td><input type="checkbox" Checked data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="12" class="tblinputs"></input></td>
				</tr>
				<tr>
					<th class="rowHead">Friday</th>
					<td><input type="checkbox" Checked data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="13" class="tblinputs"></input></td>
					<td><input type="checkbox" Checked data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="14" class="tblinputs"></input></td>
					<td><input type="checkbox" Checked data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="15" class="tblinputs"></input></td>
				</tr>
				<tr>
					<th class="rowHead">Saturday</th>
					<td><input type="checkbox" data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="16" class="tblinputs"></input></td>
					<td><input type="checkbox" data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="17" class="tblinputs"></input></td>
					<td><input type="checkbox" data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="18" class="tblinputs"></input></td>
				</tr>
				<tr>
					<th class="rowHead">Sunday</th>
					<td><input type="checkbox" data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="19" class="tblinputs"></input></td>
					<td><input type="checkbox" data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="20" class="tblinputs"></input></td>
					<td><input type="checkbox" data-toggle="toggle" data-on="Available" data-off="Unavailable" data-onstyle="success" data-offstyle="danger"value=1 id="21" class="tblinputs"></input></td>
				</tr>
			</div>
			</table>
			<br>
			<p>
			<input type="submit" name="submit" value="Submit Registration" />
		</form>
	</div>
	<?php include("PageElements/footer.html") ?>
 	<!--End of html body. End body tag in footer.html -->



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