<?php include("PageElements/header.html"); 
include("PageElements/navbar.html"); ?>
<title>CRDO</title>

<body id="mainBody" class="formBody">
  <div class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-left w3-text-white" style="padding:48px">
      <span class="w3-jumbo w3-hide-small">Rethink Property Managment</span><br>
      <span class="w3-xlarge w3-hide-large w3-hide-medium" >Rethink Property Managment</span><br>
      <span class="w3-large w3-hide-small">Simple Tech Based Solution for Single Family and Multifamily Rental Owners and Residents.</span><br>
      <span class="w3-small w3-hide-large w3-hide-medium" >Simple Tech Based Solution for Rental Owners and Residents.</span><br>
    </div> 
  </div>
    
  <!-- About Section 
  <div class="w3-container" style="padding:85px 16px" id="about">
    <h3 class="w3-center">ABOUT THE COMPANY</h3>
    <p class="w3-center w3-large">Key features of our company</p>
    <div class="w3-row-padding w3-center" style="margin-top:64px">
      <div class="w3-quarter">
        <i class="fa fa-user w3-margin-bottom w3-jumbo w3-center"></i>
        <p class="w3-large">Who we are</p>
        <p>Based out of Pittsburgh, PA. Max Cardo Ltd is an Real Estate investments group, focusing on single family and multifamily aquasitions and management.
        </p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-desktop w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Problem Solving</p>
        <p>Frustrated with the affordability of quality third property management, we decided to take matter into our own hands and leverage technology to find solutions.</p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Design</p>
        <p>Our passion is developing solutions not selling products. The application that we employ are designed to deal with real life issues that we have experinced over the last 10 years as owner/operators. </p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-users w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Community</p>
        <p>We cant do this alone! We aim to continue to partner with an expanding network of <b>local</b> realtors, contractors as well as other industry service pro's.</p>
      </div>
    </div>
  </div> -->

  <!-- Prospect Section
  <div class="w3-container" style="padding:128px 16px" id="team">
    <div class="w3-row-padding w3-grayscale" style="margin-top:0px">

  	    <div class="w3-col l4 m6 w3-margin-bottom">
  	      <div class="w3-card">
  	        <img src="images/adult-blur-chair-196649.jpg" alt="for rent" style="width:100%">
  	        <div class="w3-container">
  	          <h3>Browse Our Current Inventory</h3>
  	          <p><button class="w3-button w3-light-grey w3-block" onclick="buttonLink(browseHomes)"><i class="fa fa-calendar"></i> Browse Homes & Schedual A Tour</a></button></p>
  	        </div>
  	      </div>
  	    </div>

  	    <div class="w3-col l4 m6 w3-margin-bottom">
  	      <div class="w3-card">
  	        <img src="images/adolescent-bag-beautiful-919436 2.jpg" alt="online app" style="width:100% ">
  	        <div class="w3-container">
  	          <h3>Apply Now</h3>
  	          <p><button class="w3-button w3-light-grey w3-block" onclick="buttonLink(applyNow)"><i class="fa fa-desktop"></i>  Online Application</button></p>
  	        </div>
  	      </div>
  	    </div>

  	    <div class="w3-col l4 m6 w3-margin-bottom">
  	      <div class="w3-card">
  	        <img src="images/close-up-door-keyhole-101808.jpg" alt="resident" style="width:100%">
  	        <div class="w3-container">
  	          <h3>Already A Resident</h3>
  	          <p><button class="w3-button w3-light-grey w3-block" onclick="buttonScroll(alreadyRes)"><i class="fa fa-users"></i> Go To Resident Page</button></p>
  	        </div>
  	      </div>
  	    </div>
  	</div> 
  </div>
   -->

  <!-- Resident Section -->
  <div class="w3-container" style="padding:128px 16px" id="resident">
    <div class="w3-row-padding w3-grayscale" style="margin-top:0px">
        <div class="w3-col l4 m6 w3-margin-bottom">
          <div class="w3-card">
            <img src="images/bolts-carpentry-chrome-289665 3-2.jpg" alt="for rent" style="width:100%">
            <div class="w3-container">
              <h3>Request Service Online </h3>
              <p><button class="w3-button w3-light-grey w3-block" onclick="buttonScroll(srvsRqst)"><i class="fa fa-wrench"></i> Request Maintenance</button></p>
            </div>
          </div>
        </div>

        <div class="w3-col l4 m6 w3-margin-bottom">
          <div class="w3-card">
            <img src="images/ballpen-blur-close-up-461077.jpg" alt="online app" style="width:100% ">
            <div class="w3-container">
              <h3>Online Rental Payment</h3>
              <p><button class="w3-button w3-light-grey w3-block" onclick="buttonNewWindow(webPay)"><i class="fa fa-credit-card"></i> Pay Rent Online</button></p>
            </div>
          </div>
        </div>

        <div class="w3-col l4 m6 w3-margin-bottom">
          <div class="w3-card">
            <img src="images/access-adult-bluetooth-210647.jpg" alt="resident" style="width:100%">
            <div class="w3-container">
              <h3>Contact Us</h3>
              <p><button class="w3-button w3-light-grey w3-block" onclick="buttonScroll(contactUs)"><i class="fa fa-envelope"></i> Contact Us</button></p>
            </div>
          </div>
        </div>
    </div> 
  </div>
   
  <!-- Service Pro Section -->
  <div class="w3-container" style="padding:65px 16px 65px 16px" id="pros">
    <div class="w3-row-padding w3-grayscale" style="margin-top:0px">
      <div class="w3-col l6 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="images/achievement-adult-agent-684387w.jpg" alt="for rent" style="width:100%">
          <div class="w3-container">
            <h3>We Want You</h3>
            <p>Join our growing network of service pro's</p>
            <p><button class="w3-button w3-light-grey w3-block" onclick="buttonLink(joinNetwork)"><i class="fa fa-users"></i> Join the Network: Member Application</button></p>
          </div>
        </div>
      </div>

      <div class="w3-col l6 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="images/architect-architecture-body-33343w.jpg" alt="online app" style="width:100% ">
          <div class="w3-container">
            <h3>Get To Work </h3>
            <p>Members: Log in here to access new jobs, update tickets and submit invoices</p>
            <p><button class="w3-button w3-light-grey w3-block" onclick="buttonLink(vendorCenter)"><i class="fa fa-lock"></i>  Log In: Vendor Center</button></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- We Buy Homes 
  <div class="w3-container w3-light-grey" style="padding:128px 16px" id="buy">
    <div class="w3-row-padding">
      <div class="w3-col m6">
        <h3>Looking to sell property? <br> We buy homes a full market value.</h3>
        <p>Although Max Cardo Ltd does maintain a relationship with many local realtors we also purchase property directly from home/property owners, cutting out the middle man and saving the seller money. Max Cardo Ltd purchases homes at market value and is not a typical “we buy home for cash” type buyer. Consoltaion are quick easy and free, so click below to request a complemetry quote</p>
        <p><button class="w3-button w3-black " onclick="buttonLink(sellHome)"><i class="fa fa-th"></i>  Request a quote</button></p>

      </div>
      <div class="w3-col m6">
        <img class="w3-image w3-round-large" src="images/callout1.jpg" alt="Buildings" width="700" height="394">
      </div>
    </div>
  </div>
  -->

<?php include("PageElements/footer.html"); ?>
