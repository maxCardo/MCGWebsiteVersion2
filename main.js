
//link for buttons with offsite links, tracks with GA via conversion page
var applyNow = ["conv1.html","https://levanongrp.managebuilding.com/Resident/apps/rentalapp/"];
var browseHomes = ["conv1.html","https://levanongrp.managebuilding.com/Resident/PublicPages/ApartmentSearch.aspx"];
var joinNetwork = ["conv1.html","contactGF.html"];
var vendorCenter = ["conv1.html","comingSoon.html"];
var sellHome = ["conv1.html","sellYourHomeGF.html"];
var webPay = ["conv1.html",""];
 


//links for scroll down to section (action not tracked on GA) or link to another page on site
var alreadyRes = "index.html#resident";
var srvsRqst = "ServiceRequestGF.html";
var contactUs = "contactGF.html";



function buttonScroll(arg){
	window.open(arg, '_top');
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


