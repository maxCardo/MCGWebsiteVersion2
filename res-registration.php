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
		<form id="resReg" action="send_post.php" method="post">					
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
