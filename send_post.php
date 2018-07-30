<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Form</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Untitled Form</a></h1>
		<form id="form_20154" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Untitled Form</h2>
			<p>This is your form description. Click here to edit.</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">First Name </label>
		<div>
			<input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Last Name </label>
		<div>
			<input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Primary Phone Number </label>
		<span>
			<input id="element_3_1" name="element_3_1" class="element text" size="3" maxlength="3" value="" type="text"> -
			<label for="element_3_1">(###)</label>
		</span>
		<span>
			<input id="element_3_2" name="element_3_2" class="element text" size="3" maxlength="3" value="" type="text"> -
			<label for="element_3_2">###</label>
		</span>
		<span>
	 		<input id="element_3_3" name="element_3_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_3_3">####</label>
		</span>
		 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Secondary Phone Number </label>
		<span>
			<input id="element_4_1" name="element_4_1" class="element text" size="3" maxlength="3" value="" type="text"> -
			<label for="element_4_1">(###)</label>
		</span>
		<span>
			<input id="element_4_2" name="element_4_2" class="element text" size="3" maxlength="3" value="" type="text"> -
			<label for="element_4_2">###</label>
		</span>
		<span>
	 		<input id="element_4_3" name="element_4_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_4_3">####</label>
		</span>
		 
		</li>		<li id="li_9" >
		<label class="description" for="element_9">Email Address </label>
		<div>
			<input id="element_9" name="element_9" class="element text large" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Date of Birth </label>
		<span>
			<input id="element_5_1" name="element_5_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_5_1">MM</label>
		</span>
		<span>
			<input id="element_5_2" name="element_5_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_5_2">DD</label>
		</span>
		<span>
	 		<input id="element_5_3" name="element_5_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_5_3">YYYY</label>
		</span>
	
		<span id="calendar_5">
			<img id="cal_img_5" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_5_3",
			baseField    : "element_5",
			displayArea  : "calendar_5",
			button		 : "cal_img_5",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">House Number </label>
		<div>
			<input id="element_6" name="element_6" class="element text small" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="element_7">Street Name </label>
		<div>
			<input id="element_7" name="element_7" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_8" >
		<label class="description" for="element_8">City </label>
		<div>
			<input id="element_8" name="element_8" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_12" >
		<label class="description" for="element_12">State </label>
		<div>
		<select class="element select medium" id="element_12" name="element_12"> 
			<option value="" selected="selected"></option>
<option value="1" >First option</option>
<option value="2" >Second option</option>
<option value="3" >Third option</option>

		</select>
		</div> 
		</li>		<li id="li_10" >
		<label class="description" for="element_10">Username </label>
		<div>
			<input id="element_10" name="element_10" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_10"><small>Please select a username.</small></p> 
		</li>		<li id="li_11" >
		<label class="description" for="element_11">Password </label>
		<div>
			<input id="element_11" name="element_11" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_11"><small>Password must contain number, letters and one special character and be at least 8 characters in length.</small></p> 
		</li>		<li id="li_13" >
		<label class="description" for="element_13">How will you use the site? </label>
		<span>
			<input id="element_13_1" name="element_13" class="element radio" type="radio" value="1" />
<label class="choice" for="element_13_1">Resident</label>
<input id="element_13_2" name="element_13" class="element radio" type="radio" value="2" />
<label class="choice" for="element_13_2">Contractor</label>
<input id="element_13_3" name="element_13" class="element radio" type="radio" value="3" />
<label class="choice" for="element_13_3">Showing Agent</label>
<input id="element_13_4" name="element_13" class="element radio" type="radio" value="4" />
<label class="choice" for="element_13_4">Home Owner</label>
<input id="element_13_5" name="element_13" class="element radio" type="radio" value="5" />
<label class="choice" for="element_13_5">Property Mgmt Company</label>

		</span> 
		</li>		<li id="li_14" >
		<label class="description" for="element_14">Would you like to receive news and informational emails relevant to you? </label>
		<span>
			<input id="element_14_1" name="element_14" class="element radio" type="radio" value="1" />
<label class="choice" for="element_14_1">Yes</label>
<input id="element_14_2" name="element_14" class="element radio" type="radio" value="2" />
<label class="choice" for="element_14_2">No</label>

		</span> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="20154" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			Generated by <a href="http://www.phpform.org">pForm</a>
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>