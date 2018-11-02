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
		$pass = mysqli_real_escape_string($conn, $_POST['password']);
		$bytSched = $_POST['s1'] . $_POST['s2'] . $_POST['s3'] . $_POST['s4'] . $_POST['s5'] . $_POST['s6'] . $_POST['s7'] . $_POST['s8'] . $_POST['s9'] . $_POST['s10'] . $_POST['s11'] . $_POST['s12'] . $_POST['s13'] . $_POST['s14'] . $_POST['s15'] . $_POST['s16'] . $_POST['s17'] . $_POST['s18'] . $_POST['s19'] . $_POST['s20'] . $_POST['s21'];
		$hexSched = dechex(bindec($bytSched));
		$sql = "INSERT INTO master_Siteuser(siteuser_first, siteuser_last, siteuser_email, siteuser_password, siteuser_phone1, siteuser_phone2, fk_hdyhau_id, fk_usertype_id) VALUES ('".$first."','".$last."','".$email."',MD5('".$pass."'),'".$ph1."','".$ph2."',".$_POST['hdyhau'].", 2)";
		if ($conn->query($sql) !== TRUE)
			echo "Error: " . $sql . "<br>" . $conn->error;
	//On second pass through PHP, data from con-registration is pushed to MySQL, matching on session[id]  
	} else if (isset($_POST['street'])) {
		$st = mysqli_real_escape_string($conn, $_POST['street']);
		$cit = mysqli_real_escape_string($conn, $_POST['city']);
		$stat = mysqli_real_escape_string($conn, $_POST['state']);
		$sql = "INSERT INTO user_Address(address_street, address_city, address_state) VALUES (" . $st . "," . $cit . "," . $stat . ")";
		if ($conn->query($sql) !== TRUE)
			echo "Error: " . $sql . "<br>" . $conn->error;
		$mAdd = mysqli_fetch_assoc($conn->query("SELECT max(address_id) as mAdd FROM user_Address"));
		$result = $conn->query("SELECT max(address_id) as mAdd FROM user_Address");
		$row = mysqli_fetch_assoc($result);
		$conn->query($sql);
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
			<?php include("week_availability.html"); ?>
			<input type="submit" name="submit" value="Submit Registration" />
		</form>
	</div>
	<?php include("PageElements/footer.html") ?>
 	<!--End of html body. End body tag in footer.html -->