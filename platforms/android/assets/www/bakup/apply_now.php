<?php 
require_once('functions.php');
?>
<!DOCTYPE html>
<!-- saved from url=(0041)<?php echo $url; ?>/apply_now.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="description" content="Get Business Cash, provides alternative financing designed to help established businesses get the working capital they need, quickly and easily.">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="files/header_new.css" rel="stylesheet" type="text/css">
<link href="files/general.css" rel="stylesheet" type="text/css">
<link href="files/steps_box.css" rel="stylesheet" type="text/css">
<link href="files/footer.css" rel="stylesheet" type="text/css">
<link href="<?php echo $url; ?>/favicon.ico" rel="icon">

<script async="" src="files/analytics.js"></script><script async="" charset="utf-8" src="files/saved_resource" type="text/javascript"></script><script src="files/live_chat.min.js"></script><style type="text/css"></style>
<script src="files/jquery.min.js"></script>

<script type="text/javascript">
    function check_valid(){
	var name=document.getElementById("apply_name").value.replace("Name","");
	var company=document.getElementById("apply_company").value.replace("Company","");
	var email=document.getElementById("apply_email").value.replace("Email","");
	var phone1=document.getElementById("apply_phone").value.replace("Phone","");
	var phone2=document.getElementById("apply_mobile").value.replace("Mobile Phone","");
	if (name=="" || company=="" || email=="") {
	    alert("Please complete the form.");
	    return false;
	}
	if (phone1=="" && phone2=="") {
	    alert("Please enter at least one phone number.");
	    return false;
	}
	return true;
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {
		$("input[type=text]").focus(function(){
			var the_inputs = $('input[type=text]');
			the_inputs.each(function() {
				var old_val=$(this).val();
				if (old_val=="") {
					var new_val=$(this).attr("data");
					$(this).val(new_val);
				}
			});
			var data=$(this).attr("data");
			if($(this).val().replace(data,"")=='') $(this).val('');
	    });
		  
          
		$("#in_comments").focusout(function() {
			if($("#in_comments").val() == 'Message' || $("#in_comments").val() == ''){
				$("#in_comments").val('Message');
			}
        });
		
		$("#in_comments").focusin(function() {
            if($("#in_comments").val() == 'Message'){
				$("#in_comments").val('');
			}
        });
    });
</script>

<title>GBC - Apply Now</title>
<style __jx__id="___$_3" type="text/css" media="print"> .zopim { display: none !important } </style></head>

<body><embed id="__zopnetworkswf" src="http://cdn.zopim.com/swf/ZClientController2.swf" allowscriptaccess="always" type="application/x-shockwave-flash" style="position: absolute; top: -50px; left: 0px; width: 1px; height: 1px; overflow: hidden;" wmode="opaque"><div __jx__id="___$_111 ___$_110 ___$_109 ___$_108 ___$_1__cookie_notification" class="zopim meshim_components_CookieNotification" style="margin: 0px; padding: 0px; border: 0px; overflow: hidden; position: fixed; z-index: 1000; height: 27px; width: 27px; right: 0px; bottom: 0px; visibility: hidden; font-size: 0px; background: transparent;"><iframe __jx__id="___$_110__iframe" src="javascript:void(document.write('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><head><style>html,body{height:100%;width:100%;} *{border:0;padding:0;margin:0;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box}</style></head><body></body></html>'), document.close())" frameborder="0" style="vertical-align: text-bottom; overflow: hidden; position: relative; width: 100%; height: 100%; margin: 0px; z-index: 999999; background-color: transparent;"></iframe></div><div __jx__id="___$_104 ___$_103 ___$_102 ___$_101 ___$_1__notification" class="zopim meshim_components_Notification" style="margin: 0px; padding: 0px; border: 0px; overflow: hidden; position: fixed; z-index: 2147483647; height: 41px; width: 37px; right: 202px; bottom: 12px; visibility: hidden; font-size: 0px; background: transparent;"><iframe __jx__id="___$_103__iframe" src="javascript:void(document.write('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><head><style>html,body{height:100%;width:100%;} *{border:0;padding:0;margin:0;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box}</style></head><body></body></html>'), document.close())" frameborder="0" style="vertical-align: text-bottom; overflow: hidden; position: relative; width: 100%; height: 100%; margin: 0px; z-index: 999999; background-color: transparent;"></iframe></div><div __jx__id="___$_22 ___$_21 ___$_20 ___$_19 ___$_18 ___$_1__liveHelpWindow" class="zopim meshim_components_LiveHelpWindow" id="__cwindow__" style="margin: 0px; padding: 0px; border: 0px; overflow: hidden; position: fixed; z-index: 10000002; height: 340px; width: 240px; display: none; right: 0px; bottom: 0px; font-size: 0px; background: transparent;"><iframe __jx__id="___$_21__iframe" src="javascript:void(document.write('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><head><style>html,body{height:100%;width:100%;} *{border:0;padding:0;margin:0;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box}</style></head><body></body></html>'), document.close())" frameborder="0" style="vertical-align: text-bottom; overflow: hidden; position: relative; width: 100%; height: 100%; margin: 0px; z-index: 999999; background-color: transparent;"></iframe></div><div __jx__id="___$_14 ___$_13 ___$_12 ___$_1__liveHelpButton" class="zopim meshim_components_FloatingButton" style="margin: 0px; padding: 0px; border: 0px; overflow: hidden; position: fixed; z-index: 10000001; display: none; right: 0px; bottom: 0px; height: 28px; width: 240px; font-size: 0px; background: transparent;"><iframe __jx__id="___$_13__iframe" src="javascript:void(document.write('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><head><style>html,body{height:100%;width:100%;} *{border:0;padding:0;margin:0;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box}</style></head><body></body></html>'), document.close())" frameborder="0" style="vertical-align: text-bottom; overflow: hidden; position: relative; width: 100%; height: 100%; margin: 0px; z-index: 999999; background-color: transparent;"></iframe></div><div __jx__id="___$_6 ___$_5 ___$_4 ___$_1__firstUse" class="zopim meshim_components_FirstUse" style="margin: 0px; padding: 0px; border: 0px; overflow: hidden; position: fixed; height: 90px; width: 222px; z-index: 10000000; display: none; right: 20px; bottom: 20px; font-size: 0px; background: transparent;"><iframe __jx__id="___$_5__iframe" src="javascript:void(document.write('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><head><style>html,body{height:100%;width:100%;} *{border:0;padding:0;margin:0;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box}</style></head><body></body></html>'), document.close())" frameborder="0" style="vertical-align: text-bottom; overflow: hidden; position: relative; width: 100%; height: 100%; margin: 0px; z-index: 999999; background-color: transparent;"></iframe></div>
<!-- google_analytics -->

<div __jx__id="___$_2 ___$_1" style="position: absolute; visibility: hidden; border: 0px; padding: 0px; margin: 0px; width: 0px; height: 0px;" class=" livechat"></div>
    <link href="files/css" rel="stylesheet" type="text/css">

<header>
	<div class="wrapper apply_page">
    	<nav>
            <a href="<?php echo $url; ?>/index.php">Home</a> |
            <a href="<?php echo $url; ?>/contact_us.html">Contact Us</a> |
            <a href="<?php echo $url; ?>/apply_now.php">Apply Now</a> |
            <a href="<?php echo $url; ?>/company.html">Company</a> |
            <a href="<?php echo $url; ?>/faqs.html">FAQs</a> |
            <a href="<?php echo $url; ?>/how_it_works.html">How It Works</a>
        </nav>
        
        <a href="<?php echo $url; ?>/index.html" class="logo">
            <img src="images/logo.gif">
        </a>
        
        <div class="right_header">
            <a href="tel:1-888-364-2070" class="call_free_apply"></a>
        </div>
        
    </div>
    <ul class="blue_line">
        <li id="li1"><a href="<?php echo $url; ?>/merchant_cash_advances.html">Merchant Cash Advance</a></li>
        <li id="li2"><a href="<?php echo $url; ?>/restaurant.html">Restaurant Financing</a></li>
        <li id="li3"><a href="<?php echo $url; ?>/bad_credit.html">Bad Credit Financing</a></li>
        <li id="li4"><a href="<?php echo $url; ?>/unsecured_business_financing.html">Unsecured Financing</a></li>     
    </ul>
</header>	
    <div class="wrapper dark">
    	
    	<div class="center" id="apply_now">
        	<p>Complete this simple online application form and we will process your financing request. Our application does not require you to provide private or detailed financial information.</p><br>
            <form action="<?php echo $url; ?>/apply.php" method="post">
                <input type="hidden" is="action" name="action" value="apply">
                            
                <div class="textboxs">
                
                    <div class="general">
                        <input id="apply_name" type="text" value="Name" placeholder="Name" data="Name" name="apply_name">
                        <input id="apply_phone" type="text" value="Phone" placeholder="Phone" data="Phone" name="apply_phone">
                        <input id="apply_company" type="text" value="Company" placeholder="Company" data="Company" name="apply_company">
                        <input id="apply_mobile" type="text" value="Mobile Phone" placeholder="Mobile Phone" data="Mobile Phone" name="apply_mobile">
                        <textarea name="in_comments" id="in_comments" placeholder="Message">Message</textarea>
                    </div><!--End general-->
                    
                    <div class="private">
                        <div>
                            <label>
                                <select name="apply_state" id="apply_state">
                                    <option value="" selected="selected">State</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="D.C.">D.C.</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>                       
                                </select>
                            </label>
                        </div>
                            <input id="apply_zip" type="text" value="Zip Code" placeholder="Zip Code" data="Zip Code" name="apply_zip">
                        <div>
                            <label>
                                <select id="monthly-revenue" name="in_gross">
                                    <option selected="selected" value="Monthly Gross Sales">Monthly Gross Sales</option>
                                    <option value="$1k-$10k">$1 - $10,000</option>
                                    <option value="$10k-$25k">$10,000 - $25,000</option>
                                    <option value="$25k-$50k" selected="selected">$25,000 - $50,000</option>
                                    <option value="$50k-$100k">$50,000 - $100,000</option>
                                    <option value="$100k-$250k">$100,000 - $250,000</option>
                                    <option value="$250k+">$250,000 +</option>                   		
                                </select>	
                            </label>
                        </div>
                        <div>
                            <label>
                                <select id="apply_monthly-credit" name="apply_monthly">
                                    <option selected="selected">CC Processing</option>
                                    <option value="0">Not Processing CC</option>
                                    <option value="$0k-$1k">$0 - $1000</option>
                                    <option value="$1k-$2.5k">$1000 - $2500</option>
                                    <option value="$2.5k-$4k">$2500 - $4000</option>
                                    <option value="4k-$5k">$4,000 - $5,000</option>
                                    <option value="$5k-$10k">$5,000 - $10,000</option>
                                    <option value="$10k-$20k">$10,000 - $20,000</option>
                                    <option value="$20k-$30k">$20,000 - $30,000</option>
                                    <option value="$30k-$40k">$30,000 - $40,000</option>
                                    <option value="$40k-$50k">$40,000 - $50,000</option>
                                    <option value="$50k-$60k">$50,000 - $60,000</option>
                                    <option value="$60k-$70k">$60,000 - $70,000</option>
                                    <option value="$70k-$80k">$70,000 - $80,000</option>
                                    <option value="$80k-$90k">$80,000 - $90,000</option>
                                    <option value="$90k-$100k">$90,000 - $100,000</option>
                                    <option value="$100k-$110k">$100,000 - $110,000</option>
                                    <option value="$110k-$120k">$110,000 - $120,000</option>
                                    <option value="$120k-$125k">$120,000 - $125,000</option>
                                    <option value="$125k+">$125,000+</option>                        
                                </select>
                            </label>
                        </div>
                        <input id="email" type="text" name="email" value="" placeholder="Email" style="display:none;">
                        <input id="apply_email" type="text" value="Email" data="Email" placeholder="Email" name="contact_email">
                        <p>By submitting this form I certify that I am a U.S Resident over the age of 18 and agree to the Privacy Policy</p>
                        <input id="apply_submit" type="submit" value="Submit »" name="apply_submit" onclick="return check_valid();">
                    </div> 
                    
                </div><!-- END -- textboxs -->
            
                <div class="checks">
                    <p>We will contact you within 24 hours.</p>
                    <ul>
                    <li>Privacy &amp; Security Protected</li>
                    <li>3 Simple Steps</li>
                    <li>100% Online</li>
                    <li>Bad Credit OK</li>
                    <li>Same Day Approval</li>
                    <li>Fast Loan Application</li>
                    <li>Cash Direct Deposited</li>                   
                    </ul>
                </div>
            </form>
		
		              
        </div><!-- END -- center -->
    </div><!-- END -- wrapper dark -->
            
                  
	<footer>
        <div class="blue_l"></div>
        <div class="menu">
        	<div class="dark_line">
            	<div class="wrapper">
            		<!--<a href="index.html"><img title="Home Page" src="images/footer_icon.png" /></a>-->
                    <div class="push_down"></div>
                    <ul>
                        
                        <li><a href="<?php echo $url; ?>/contact_us.html">Contact Us</a></li>
                        <li><a href="files/apply_now.htm">Apply Now</a></li>
                        <li><a href="<?php echo $url; ?>/company.html">Company</a></li>
                        <li><a href="<?php echo $url; ?>/faqs.html">FAQs</a></li>
                        <li><a href="<?php echo $url; ?>/how_it_works.html">How It Works</a></li>
                        <li><a href="<?php echo $url; ?>/merchant_cash_advances.html">Merchant Cash Advance</a></li>
                        <li><a href="<?php echo $url; ?>/restaurant.html">Restaurant Financing</a></li>
                        <li><a href="<?php echo $url; ?>/bad_credit.html">Bad Credit Financing</a></li>
                        <li><a href="<?php echo $url; ?>/unsecured_business_financing.html">Unsecured Financing</a></li>                 
                    </ul>
            	</div><!-- END -- wrapper  -->
            </div><!-- END -- dark_line  -->
        </div><!-- END -- menu  -->
        
        <div class="gray_line">
        	<p>
                Get Business Cash | 75 Maiden Lane, New York, NY 10038 | © Copyright | getbusinesscash.com | 
                <a style="cursor:pointer;" onclick="window.open(&#39;privacy_policy.html&#39;,&#39;privacy&#39;,&#39;width=500,height=500,toolbar=yes,location=yes,directories=yes,status=yes,menubar=yes,scrollbars=yes&#39;);">
                 Privacy Policy</a>
            </p>
        </div>
        
        
        
</footer>


</body></html>