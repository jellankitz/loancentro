<?php 
require_once('functions.php');
?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="description" content="Loan Centro provides working capital for small business owners with no collateral or fixed payments. Fast, flexible unsecured financing.">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="files/header_new.css" rel="stylesheet" type="text/css">
<link href="files/general.css" rel="stylesheet" type="text/css">
<link href="files/index.css" rel="stylesheet" type="text/css">
<link href="files/steps_box.css" rel="stylesheet" type="text/css">
<link href="files/footer.css" rel="stylesheet" type="text/css">
<link href="<?php echo $url; ?>/favicon.ico" rel="icon">

<script async="" charset="utf-8" src="files/saved_resource" type="text/javascript">
<script src="files/jquery.min.js"></script>
<script>
$(document).ready(function(e) {
	
	var isMobile = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|touch|opera mini/i.test(navigator.userAgent.toLowerCase()));
	if(isMobile)
	{
		$('#phone_click a').attr("href","tel:8883642070");
	}
	else
	{
		$('#phone_click a').attr("href","javascript:void(0);");
	}

});
</script>
<script>
	window.fbAsyncInit = function() {
        FB.init({
          appId      : '1420390971576055',
          xfbml      : true,
          version    : 'v2.0'
        });
		
		FB.login(function(response) {
		   if (response.authResponse) {
			 console.log('Welcome!  Fetching your information.... ');
			 FB.api('/me', function(response) {
			   console.log('Good to see you, ' + response.name + '.');
			   $("#apply_name").val(response.name);
			 });
			 FB.api('/email', function(response) {
			   $("#email").val(response.email);
			 });
		   } else {
			 console.log('User cancelled login or did not fully authorize.');
		   }
		 });
		
		FB.getLoginStatus(function(response) {
		  if (response.status === 'connected') {
			 FB.api('/me', function(response) {
			   console.log('Good to see you, ' + response.name + '.');
			   $("#apply_name").val(response.name);
			 });
			 FB.api('/email', function(response) {
			   $("#email").val(response.email);
			 });
			var uid = response.authResponse.userID;
			var accessToken = response.authResponse.accessToken;
		  } else if (response.status === 'not_authorized') {
			console.log('not authenticated');
		  } else {
			console.log('wala jd');
		  }
		 });
    };
</script>

<title>Loan Centro - Find Business Loans Fast</title>
<style __jx__id="___$_3" type="text/css" media="print"> .zopim { display: none !important } </style></head>

<body>
	    
    <link href="files/css" rel="stylesheet" type="text/css">
<script src="files/jquery.min.js"></script>
<script>

$(document).ready(function(e){
	
	var url = window.location.href;
	var value = url.substring(url.lastIndexOf('/') + 1);
	
	var id,
		menu_pages = {
			'merchant_cash_advances.html': '#li1',
			'restaurant.html': '#li2',
			'bad_credit.html': '#li3',
			'unsecured_business_financing.html': '#li4'	
		};
	if(id = menu_pages[value]){
		$('header ul li').removeClass('selected');
		$(id).addClass('selected');
	}
});
	
</script>
<header>
	<div class="wrapper">
	<!--
    	<nav>
            <a href="<?php echo $url; ?>/index.php">Home</a> |
            <a href="<?php echo $url; ?>/contact_us.html">Contact Us</a> |
            <a href="<?php echo $url; ?>/apply_now.php">Apply Now</a> |
            <a href="<?php echo $url; ?>/company.html">Company</a> |
            <a href="<?php echo $url; ?>/faqs.html">FAQs</a> |
            <a href="<?php echo $url; ?>/how_it_works.html">How It Works</a>
        </nav>-->
        
        <a href="<?php echo $url; ?>/index.html" class="logo">
            <img src="images/logo.gif">
        </a>
        
        <div class="right_header">
            <p>Apply Now to be Approved</p>
            <div class="bg_aplly">
            	<a href="<?php echo $url; ?>/apply_now.php"><button>Request Funding »</button></a>
                
            </div>
        </div>
        
    </div>
    <ul class="blue_line">
        <li id="li4"></li>     
    </ul>
</header> 	
    <div class="wrapper dark">
    	<div class="center apply_by_fax">
        	<br>
            <br>
        	<h2>Congratulations,</h2><br>   
            <h2>Based on the information you provided, You may qualify for our business funding program.</h2><br>
            <h2>You will be contacted shortly to complete the process.</strong> </h2><br>
            <h2>We try hard to get everyone funding, and if you've made it this far your chances are fantastic!</h2><br>
        </div><!-- END -- center -->
    </div><!-- END -- wrapper dark -->
            
            
            
    <div class="above_footer"><div></div></div>        
<footer>
        <div class="blue_l"></div>
        <div class="menu">
        	<div class="dark_line">
            	<div class="wrapper">
            		<!--<a href="index.html"><img title="Home Page" src="images/footer_icon.png" /></a>-->
            	</div><!-- END -- wrapper  -->
            </div><!-- END -- dark_line  -->
        </div><!-- END -- menu  -->
        
        <div class="gray_line">
        	<p>
                LoanCentro.com | © Copyright | loancentro.com | 
                <a style="cursor:pointer;" onclick="window.open(&#39;privacy.php&#39;,&#39;privacy&#39;,&#39;width=500,height=500,toolbar=yes,location=yes,directories=yes,status=yes,menubar=yes,scrollbars=yes&#39;);">
                 Privacy Policy</a>
            </p>
        </div>
        
        
        
</footer>
<!-- Offer Conversion: LoanCentro.com (Fb App) -->
<iframe src="http://1.rsctrack.com/SLPV" scrolling="no" frameborder="0" width="1" height="1"></iframe>
<!-- // End Offer Conversion -->
</body></html>