<?php include("PageElements/header.html");
include("PageElements/navbar.html"); ?>
<title>New User Registration</title>

<body id="regBody" class="formBody">
	<div id="form_container" style="margin:75px 40px">
		<h3><u>New User Registration</u></h3>
		<form style="width: 35%" id="NewUserForm" action="" method="post">
			<br>					
			<label class="form-control-label" for="first">First Name </label>
			<input required name="first" class="form-control-sm" type="text" maxlength="30" value=""/><br> 
			<label class="form-control-label" for="last ">Last Name </label>
			<input required name="last" class="form-control-sm" type="text" maxlength="50" value=""/><br> 
			<hr>
			<label class="form-control-label" for="phone1">Primary Phone Number </label>
			<input required class="form-control-sm" name="phone1" size=16 maxlength="12" placeholder="###-###-####" type="tel" pattern="[2-9][0-9]{2}-[0-9]{3}-[0-9]{4}" title="###-###-####"><br>
			<label class="form-control-label" for="phone2">Secondary Phone Number </label>
			<input class="form-control-sm" name="phone2" size=16 maxlength="12" placeholder="###-###-####" type="tel" pattern="[2-9][0-9]{2}-[0-9]{3}-[0-9]{4}" title="###-###-####"> <br>
			<hr>
			<label class="form-control-label" for="email">Email </label>
			<input required id="email" name="email" class="form-control-sm" type="text" maxlength="60"/><br> 
			<label class="form-control-label" for="password">Password </label>
			<input required id="p" class="form-control-sm" name="password" class="form-control-sm" type="password" maxlength="16" pattern="[0-9a-zA-Z!@#$%&]{8,16}" title="Password may be between 8 and 16 letters, numbers and (! @ # $ % &)"/><br>
			<hr> 
			<label style="font-size:11pt" class="form-control-label" for="userType">How will you use this site? </label>
			<br>
			<input required name="userType" type="radio" value="res-registration"/> Resident<br>
			<input name="userType" type="radio" value="con-registration"/> Contractor<br>
			<input name="userType" type="radio" value="sa-registration"/> Showing Agent<br>
			<input name="userType" type="radio" value="hopm-registration"/> HomeOwner<br>
			<input name="userType" type="radio" value="hopm-registration"/> Property Mgmt Company<br>
			<br>
			<label style="font-size: 11pt" class="form-control-label" for="hdyhau">How did you hear about us?</label><br>
			<input name="hdyhau" class="radio" type="radio" value="1"/> Flier<br>
			<input name="hdyhau" class="radio" type="radio" value="2"/> Marketing Email<br>
			<input name="hdyhau" class="radio" type="radio" value="3"/> Referral<br>
			<input name="hdyhau" class="radio" type="radio" value="4"/> Prop Mgmt Company<br>
			<input name="hdyhau" class="radio" type="radio" value="5"/> Craigslist<br>
			<input name="hdyhau" class="radio" type="radio" value="6"/> Google<br>
			<br>
			<label style="font-size:11pt" class="form-control-label" for="optIn">Would you like to receive news and informational emails relevant to you? </label>
			<br>
			<input class="radio-inline" name="optIn" type="radio" value="1"/> Yes
			<input class="radio-inline" name="optIn" type="radio" value="0"/> No
			<br>
			<br>
			<input id="next" type="submit" value="Continue"/>
		</form>
	</div>
</body>

<?php include("PageElements/footer.html");
 ?>

</html>

<script>
	$('input[name=userType]').change(function(){
		$('#NewUserForm').attr("action", $('input[name=userType]:checked').val() + ".php");
	});
</script>
