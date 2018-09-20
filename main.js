
//link for buttons with offsite links, tracks with GA via conversion page
var applyNow = ["conv1.html","https://levanongrp.managebuilding.com/Resident/apps/rentalapp/"];
var browseHomes = ["conv1.html","https://levanongrp.managebuilding.com/Resident/PublicPages/ApartmentSearch.aspx"];
var joinNetwork = ["conv1.html","contactGF.html"];
var vendorCenter = ["conv1.html","comingSoon.html"];
var sellHome = ["conv1.html","sellYourHomeGF.html"];
//var webPay = ["conv1.html",""];
 


//links for scroll down to section (action not tracked on GA) or link to another page on site
var alreadyRes = "index.html#resident";
var srvsRqst = "ServiceRequestGF.html";
var contactUs = "contactGF.html";
var webPay = "https://levanongrp.managebuilding.com/Resident/PublicPages/Home.aspx?ReturnUrl=%2fResident%2fdefault.aspx";




function buttonScroll(arg){
	window.open(arg, '_top');
}

function buttonNewWindow(arg){
	window.open(arg, '_blank');
}

function buttonLink(arg){
	console.log("start");
	setTimeout(function() {window.open(arg[0]+'?var='+arg[1],'_top')}, 50);	
}

function convLink(){
		var par = window.location.search.substring(1).split("=") ;
		console.log(par);
		setTimeout(function() {window.open(par[1],'_top');}, 50);
}

function buildPage(file){
	var html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>New User Registration</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all">
</head>
<body id="main_body" class="formBody">
	<div class="w3-top">
    	<div class="w3-bar w3-white w3-card" id="myNavbar" style="padding: 0px 20px">
    		<a href="index.html" class="w3-bar-item w3-button w3-wide">
    			<span class="tlgMed" style="color:black">The Levanon Group</span> <span class="tlgSmall" style="color:black">LLC</span>   
    		</a>
		</div>
	</div>
	</div>
</body>
</html>';
	$("'#" + file + "'").empty().append(html);
}