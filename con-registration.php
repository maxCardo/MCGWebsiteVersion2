 <?php	
	$conn = new mysqli("35.231.20.242","webguest","M2Ykx19P!rm&", "Site_Users");
	if (mysqli_connect_errno())
		echo "Failed to connect to MySQL: " . mysqli_connect_errno();
	//Insert general user data from registration.html before loading secondary registration form
	if (isset($_POST['first'])) {
		$first = mysqli_real_escape_string($conn, $_POST['first']);
		$last = mysqli_real_escape_string($conn, $_POST['last']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$ph1 = mysqli_real_escape_string($conn, $_POST['phone1']);
		$ph2 = mysqli_real_escape_string($conn, $_POST['phone2']);
		$uName = mysqli_real_escape_string($conn, $_POST['userName']);
		$pass = mysqli_real_escape_string($conn, $_POST['password']);
		$sql = "INSERT INTO master_Siteuser(siteuser_first, siteuser_last, siteuser_email, siteuser_username, siteuser_password, siteuser_phone1, siteuser_phone2, fk_hdyhau_id, fk_usertype_id) VALUES ('".$first."','".$last."','".$email."','".$uName."',MD5('".$pass."'),'".$ph1."','".$ph2."',".$_POST['hdyhau'].", 2)";
		if ($conn->query($sql) !== TRUE)
			echo "Error: " . $sql . "<br>" . $conn->error;
		$_SESSION['id'] = mysqli_fetch_assoc($conn->query("SELECT siteuser_id FROM master_Siteuser WHERE siteuser_username = '" . $uName . "'"));
	//On second pass through PHP, data from con-registration is pushed to MySQL, matching on session[id]  
	} else if (isset($_POST['street'])) {
		$st1 = mysqli_real_escape_string($conn, $_POST['street']);
		$st2 = mysqli_real_escape_string($conn, $_POST['street2']);
		$city = mysqli_real_escape_string($conn, $_POST['city']);
		$state = mysqli_real_escape_string($conn, $_POST['state']);
		$sql = "INSERT INTO user_Address(address_line1, address_line2, address_city, address_state) VALUES ('" . $st1 . "','" . $st2 . "','" . $city . "','" . $state . "'')";
		if ($conn->query($sql) !== TRUE)
			echo "Error: " . $sql . "<br>" . $conn->error;
		$mAdd = mysqli_fetch_assoc($conn->query("SELECT max(address_id) as mAdd FROM user_Address"));
		$conn->query("UPDATE master_Siteuser SET fk_address_id = " . $mAdd . " WHERE siteuser_id = " . $SESSION['id']);
		$bytSched = $_POST['21'] . $_POST['20'] . $_POST['19'] . $_POST['18'] . $_POST['17'] . $_POST['16'] . $_POST['15'] . $_POST['14'] . $_POST['13'] . $_POST['12'] . $_POST['11'] . $_POST['10'] . $_POST['9'] . $_POST['8'] . $_POST['7'] . $_POST['6'] . $_POST['5'] . $_POST['4'] . $_POST['3'] . $_POST['2'] . $_POST['1'];
		$hexSched = $bytSched.toString(16);
		$
		$conn->query($sql);
		$result = $conn->query("SELECT max(address_id) as mAdd FROM user_Address");
		$row = mysqli_fetch_assoc($result);
		$conn->close();
		$_SESSION['user'] = $_POST['first'];
		header('Location: index.html');
	}
?>

<?php include("PageElements/header.html");
 include("PageElements/navbar.html"); ?>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<title>Contractor Registration</title>

<body id="conRegBody" class="formBody">
	<div id="form_container" style="margin:75px 40px">
		<h3>Contractor Registration</h3>
		<br>
		<form style="width:40%" id="conReg" action="con-registration.php" method="post">					
			<label class="form-control-label" for="company">Company Name</label><br>
			<input class="form-control" id="company" type="text" maxlength="50"/>
			<label class="form-control-label" for="owner">Company Owner</label><br>
			<input class="form-control-sm" id="owner" type="text"/>
			 I am the owner <input type="checkbox" class="checkbox"/>
			<br>
			<label class="form-control-label" for="phoneCo">Company Phone Number </label><br>
			<input required class="form-control-sm" name="phoneCo" size=16 maxlength="12" placeholder="###-###-####" type="tel" pattern="[2-9][0-9]{2}-[0-9]{3}-[0-9]{4}" title="###-###-####"><br>
			<hr>
			<label class="form-control-label" for="address">Billing Address</label><br>
			<input required class="form-control" id="street" name="street" type="text" maxlength="60" placeholder="Address Line 1"/> 
			<br>
			<input class="form-control" id="street2" name="street2" type="text" maxlength="30" placeholder="Address Line 2"/>
			<br> 
			<input required id="city" style="width:73%" class="form-control-sm" name="city" type="text" maxlength="30" placeholder="City"/>
			<input required class="form-control-sm" maxlength="2" style="width:25%" name="state" value="PA" placeholder="State">
			<br>
			<hr>
			<h4><label class="form-control-label" for="services">Services Offered</label></h4>
			<div class="checkbox">
				<label><input required type="checkbox" id="plmb" value="1" name ="services"/> Plumbing</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" id="elec" value="2" name ="services"/> Electrical</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" id="hndy" value="3" name ="services"/> Handyman</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" id="hvac" value="4" name ="services"/> HVAC</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" id="pest" value="5" name ="services"/> Pest Control</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" id="maid" value="6" name ="services"/> Cleaning</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" id="roof" value="7" name ="services"/> Roofing</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" id="masn" value="8" name ="services"/> Masonry</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" id="appl" value="9" name ="services"/> Appliances</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" id="wnds" value="10" name ="services"/> Windows/Doors</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" id="flor" value="11" name ="services"/> Flooring</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" id="lnds" value="12" name ="services"/> Landscaping</label>
			</div>
			<div class="checkbox">
				<label><input type="checkbox" id="dsgn" value="13" name ="services"/> Interior Design</label>
			</div>
			<br>
			<hr>
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