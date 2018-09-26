
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

// Modal Image Gallery
function onClick(element) {
document.getElementById("img01").src = element.src;
document.getElementById("modal01").style.display = "block";
var captionText = document.getElementById("caption");
captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
      mySidebar.style.display = 'none';
  } else {
      mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
}

function  buttonLinkDelay(arg){
	alert(arg);
	//window.open(arg,'_top');
}


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
function validate(input){
		var check = input.value;
		var regex = /[^a-z0-9]/gi;
		input.value = input.value.replace(regex, "");
	}