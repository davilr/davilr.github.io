<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/php-contact-form-tutorial.html
*/
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();


//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('sennen_gurushi@hotmail.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('n91LqHNvMrpoXte');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.html");
   }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>JustCo</title>
    
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700|Amatic+SC:400,700' rel='stylesheet' type='text/css'>
	
	<!-- CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/simpletextrotator.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/et-line-font.css" rel="stylesheet">
	<link href="assets/css/magnific-popup.css" rel="stylesheet">
	<link href="assets/css/flexslider.css" rel="stylesheet">
	<link href="assets/css/owl.carousel.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
    <link href="child-style.css" rel="stylesheet">
    
    
	<!-- Javascript files -->
	<script src="assets/js/jquery-2.1.3.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
	<script src="assets/js/appear.js"></script>
	<script src="assets/js/jquery.simple-text-rotator.min.js"></script>
	<script src="assets/js/jqBootstrapValidation.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="assets/js/gmaps.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/jquery.flexslider-min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/jquery.fitvids.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/contact.js"></script>
	<script src="assets/js/custom.js"></script>
    
    <script type='text/javascript' src='js/gen_validatorv31.js'></script>

</head>
<body>

	<!-- Preloader -->
	<div class="page-loader">
		<div class="loader">Loading...</div>
	</div>
    
    <div id="totop1"></div>

	<!------------ Navigation start ------------>
	<nav class="navbar navbar-custom navbar-transparent navbar-fixed-top one-page" role="navigation">

		<div class="nav-container">
	
			<div class="navbar-header">
            
                <a href="index.php"><div id="logo"></div></a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html"></a>
			</div>
            
	        <div id="nav-1">
			<div class="collapse navbar-collapse" id="custom-collapse">
             
				<ul class="nav navbar-nav navbar-right">
	                
                   
					<li class="dropdown"><a href="community.php" class="dropdown-toggle" data-toggle="dropdown">Community</a>
                        <ul class="dropdown-menu">
                            <li><a href="community.php#freelancer" class="section-scroll">Freelancer</a></li>
                            <li><a href="community.php#startup" class="section-scroll">Startup</a></li>
                            <li><a href="community.php#small-business" class="section-scroll">Small Business</a></li>
                            <li><a href="community.php#large-company" class="section-scroll">Large Company</a></li>
                        </ul>
                    </li>
					<li><a href="locations.html" class="section-scroll">Locations</a></li>
					<li><a href="pricing.php" class="section-scroll">Pricing</a></li>
					<li><a href="events.php" class="section-scroll">Events</a></li>
					<li><a href="#contact" class="section-scroll">Contact Us</a></li>
					<li><a href="javascript:void(0)" title="COMING SOON" style="opacity:.5;">Sign In</a></li>
                    
	
				</ul>
            
          
			</div>
            </div>
            
            
             <div id="nav-2">
			<div class="collapse navbar-collapse" id="custom-collapse">
             
				<ul class="nav navbar-nav navbar-left" style="text-transform:none;">
	          
					
					<li><a href="#jc2" class="section-scroll">justDESK BASIC</a></li>
					<li><a href="#jc3" class="section-scroll">justDESK UNLIMITED</a></li>
					<li><a href="#jc4" class="section-scroll">justDESK DEDICATED</a></li>
					<li><a href="#jc5" class="section-scroll"><b>justSTUDIO</b></a></li>
                    <li class="compare-prices"><a href="#totop1" class="section-scroll" style="padding-top: 10px;padding-bottom: 10px;">COMPARE PRICES <i class="fa fa-angle-up"></i> </a></li>
	
				</ul>
            
          
			</div>
            </div>
            
	
		</div>

	</nav>
	<!------------ Navigation end ------------>

	<!-- Home start -->
	<section id="home" class="home-section home-parallax home-fade home-full-height" style="display:none;">
    
    </section>

		<div class="pricing-banner">
           
            <div class="custom-container">
            
               <div class="price-list-display">
               
               		<table class="pricing-table" width="100%" border="0">
                      <tbody>
                        <tr><!---------- ROW 0 ------------>
                          <td class="tblabel" valign="top">
                          </td>
                          <td colspan="3" class="" valign="top">
                              <h4>&nbsp; Common - Starters</h4>
                              <hr class="hr-jc">
                          </td>
                          <td class="border-divider" valign="top">
                              <h4>&nbsp;&nbsp; Dedicated Unlimited</h4>
                              <hr class="hr-jc">
                          </td>
                        </tr><!---------- ROW 0 END ------------>
                        <tr><!---------- ROW 1 ------------>
                          <td width="20%" align="right" valign="top"></td>
                          <td width="15%" valign="top">
                              <div class="price-list">
                       
                              <div style="display:inline-block;"><img src="img/just-logo-2-w.png" width="200" height="120"></div><br>
                              <div style="margin:30px 0 30px 0;"><b><span style="font-size:28px;">$</span><span style="font-size:54px;">98</span></b><i>/MO*</i></span></div>
                              <a href="#contact2" class="section-scroll btn btn-border-w btn-round blue-btn">JOIN US TODAY!</a>
                       
                              </div>
                          </td>
                          <td width="15%" class="border-divider" valign="top" align="center">
                              <div class="price-list">
                              <div style="display:inline-block;"><img src="img/just-logo-3-w.png" width="200" height="120"></div><br>
                              <div style="margin:30px 0 30px 0;"><b><span style="font-size:28px;">$</span><span style="font-size:54px;">398</span></b><i>/MO*</i></span></div>
                              <a href="#contact2" class="section-scroll btn btn-border-w btn-round blue-btn">JOIN US TODAY!</a>
                              </div>
                          </td>
                          <td width="15%" class="border-divider" valign="top" align="center">
                              <div class="price-list">
                              <div style="display:inline-block;"><img src="img/just-logo-4-w.png" width="200" height="120"></div><br>
                              <div style="margin:30px 0 30px 0;"><b><span style="font-size:28px;">$</span><span style="font-size:54px;">750</span></b><i>/MO*</i></span></div>
                              <a href="#contact2" class="section-scroll btn btn-border-w btn-round blue-btn">JOIN US TODAY!</a>
                              </div>
                          </td>
                          <td width="35%" class="border-divider" valign="top" align="center">
                              <div class="price-list">
                              <div style="display:inline-block;"><img src="img/just-logo-5-w.png" width="200" height="120"></div><br>
                              <div style="margin:30px 0 30px 0;"><span style="position:relative; bottom:30px; right:10px; font-style:italic;">Starting</span><b><span style="font-size:28px;">$</span><span style="font-size:54px;">800</span></b><i>/MO*</i></span></div>
                              <a href="#contact2" class="section-scroll btn btn-border-w btn-round blue-btn">JOIN US TODAY!</a>
                              </div>
                          </td>
                        </tr><!---------- ROW 1 END ------------>
                        <tr><!---------- ROW 2A ------------>
                          <td class="tblabel" valign="top">
                              <h5>What is it</h5>
                          </td>
                          <td colspan="3" class="tbdescription bg-white-70 borderradius-tl" valign="top" style="padding-top: 16px;">
                          	<p>Flexible access to desk in a communal work-space and benefits of our shared facilities.</p>
                          </td>
                          <td class="tbdescription bg-white-70 border-divider-b borderradius-tr" valign="top" style="padding-top: 16px;">
                          	<p>Access to a dedicated studio and all the benefits to our shared facilities.</p>
                          </td>
                        </tr><!---------- ROW 2A END ------------>
                        
                        <tr><!---------- ROW 3 ------------>
                          <td class="tblabel" valign="top">
                              <h5>Meeting Rooms</h5>
                          </td>
                          <td class="tbdescription bg-white-65" valign="middle">
                          	<p>Charged as per booking</p>
                          </td>
                          <td class="tbdescription bg-white-65 border-divider-b" valign="middle">
                          	<p>Charged as per booking</p>
                          </td>
                          <td class="tbdescription bg-white-65 border-divider-b" valign="middle">
                          	<p>Charged as per booking</p>
                          </td>
                          <td class="tbdescription bg-white-65 border-divider-b" valign="middle">
                          	<p>Charged as per booking</p>
                          </td>
                        </tr><!---------- ROW 3 END ------------>
                        <tr><!---------- ROW 4 ------------>
                          <td class="tblabel" valign="middle">
                              <h5>Business Address</h5>
                          </td>
                          <td class="tbsign bg-white-70" valign="middle">
                          	<p><div class="tick-40"></div></p>
                          </td>
                          <td class="tbsign bg-white-70 border-divider-b" valign="middle">
                          	<p><div class="tick-40"></div></p>
                          </td>
                          <td class="tbsign bg-white-70 border-divider-b" valign="middle">
                          	<p><div class="tick-40"></div></p>
                          </td>
                          <td class="tbsign bg-white-70 border-divider-b" valign="middle">
                          	<p><div class="tick-40"></div></p>
                          </td>
                        </tr><!---------- ROW 4 END ------------>
                        <tr><!---------- ROW 5 ------------>
                          <td class="tblabel" valign="top">
                              <h5>Events & Perks</h5>
                          </td>
                          <td class="tbsign bg-white-65" valign="middle">
                          	<p><div class="tick-40"></div></p>
                          </td>
                          <td class="tbsign bg-white-65 border-divider-b" valign="middle">
                          	<p><div class="tick-40"></div></p>
                          </td>
                          <td class="tbsign bg-white-65 border-divider-b" valign="middle">
                          	<p><div class="tick-40"></div></p>
                          </td>
                          <td class="tbsign bg-white-65 border-divider-b" valign="middle">
                          	<p><div class="tick-40"></div></p>
                          </td>
                        </tr><!---------- ROW 5 END ------------>
                        <tr><!---------- ROW 6 ------------>
                          <td class="tblabel" valign="top">
                              <h5 style="padding-top: 2px; padding-bottom: 2px;">Access to all JustCo Locations</h5>
                          </td>
                          <td class="tbsign bg-white-70" valign="middle">
                          	<p><div class="dash-40"></div></p>
                          </td>
                          <td class="tbsign bg-white-70 border-divider-b" valign="middle">
                          	<p><div class="tick-40"></div></p>
                          </td>
                          <td class="tbsign bg-white-70 border-divider-b" valign="middle">
                          	<p><div class="tick-40"></div></p>
                          </td>
                          <td class="tbsign bg-white-70 border-divider-b" valign="middle">
                          	<p><div class="tick-40"></div></p>
                          </td>
                        </tr><!---------- ROW 6 END ------------>
                        <tr><!---------- ROW 7 ------------>
                          <td class="tblabel" valign="top">
                              <h5>Dedicated Desk</h5>
                          </td>
                          <td class="tbsign bg-white-65" valign="middle">
                          	<div class="dash-40"></div>
                          </td>
                          <td class="tbsign bg-white-65 border-divider-b" valign="middle">
                          	<div class="dash-40"></div>
                          </td>
                          <td class="tbsign bg-white-65 border-divider-b" valign="middle">
                          	<div class="tick-40"></div>
                          </td>
                          <td class="tbsign bg-white-65 border-divider-b" valign="middle">
                          	<div class="dash-40"></div>
                          </td>
                        </tr><!---------- ROW 7 END ------------>
                        <tr><!---------- ROW 8 ------------>
                          <td class="tblabel" valign="top">
                              <h5>Dedicated Studio</h5>
                          </td>
                          <td class="tbsign bg-white-70" valign="middle">
                          	<div class="dash-40"></div>
                          </td>
                          <td class="tbsign bg-white-70 border-divider-b" valign="middle">
                          	<div class="dash-40"></div>
                          </td>
                          <td class="tbsign bg-white-70 border-divider-b" valign="middle">
                          	<div class="dash-40"></div>
                          </td>
                          <td class="tbsign bg-white-70 border-divider-b" valign="middle">
                          	<div class="tick-40"></div>
                          </td>
                        </tr><!---------- ROW 8 END ------------>
                        <tr><!---------- ROW 9 ------------>
                          <td class="tblabel" valign="top">
                              <h5>Access</h5>
                          </td>
                          <td class="tbdescription bg-white-65" valign="top">
                          	<p style="color: rgba(0,0,0,.7);"><strong>1 DAY*</strong></p>
                          </td>
                          <td class="tbdescription bg-white-65 border-divider-b" valign="top">
                          	<p style="color: rgba(0,0,0,.7);"><strong>UNLIMITED</strong></p>
                          </td>
                          <td class="tbdescription bg-white-65 border-divider-b" valign="top">
                          	<p style="color: rgba(0,0,0,.7);"><strong>UNLIMITED</strong></p>
                          </td>
                          <td class="tbdescription bg-white-65 border-divider-b" valign="top">
                          	<p style="color: rgba(0,0,0,.7);"><strong>UNLIMITED</strong></p>
                          </td>
                        </tr><!---------- ROW 9 END ------------>
                        
                        <tr><!---------- ROW 10 ------------>
                          <td class="tblabel" valign="top">
                          </td>
                          <td class="tbdescription bg-white-75 borderradius-bl" valign="top">
                          	<a href="#jc2" class="section-scroll">LEARN MORE</a>
                          </td>
                          <td class="tbdescription bg-white-75 border-divider-b" valign="top">
                          	<a href="#jc3" class="section-scroll">LEARN MORE</a>
                          </td>
                          <td class="tbdescription bg-white-75 border-divider-b" valign="top">
                          	<a href="#jc4" class="section-scroll">LEARN MORE</a>
                          </td>
                          <td class="tbdescription bg-white-75 border-divider-b borderradius-br" valign="top" style="padding-bottom:20px;">
                          	<a href="#jc5" class="section-scroll">LEARN MORE</a>
                          </td>
                        </tr><!---------- ROW 10 END ------------>
                        
                      </tbody>
                    </table>

                   <br>
                   
                   <div style="font-size:12px; line-height:20px;">
                       Operating Hours - Monday - Friday, except Public Holidays, from 8.30am - 6.00pm<br>
                       * Starting prices shown above. Get in touch to learn more.
                   </div>
               
               </div>
               
               <div class="plans"><h4>Plans for every type of member</h4></div>
            
            </div>
            
            <!-- Container end -->
		
		</div>

    
    <section style="background-color:#fff; position: relative; padding: 0;">
    
        <div class="custom-container">
        
            <div class="sub-content">
            
                <h4>our spaces</h4>
                
               
                
                <div id="jc2" style="border-top:1px solid #999; margin-top:20px; opacity:0;"></div>
                <div class="our-space">
                
                    <div class="just-logo">
                        <div style="display:inline-block;"><img src="img/just-logo-2-blu.png" width="250" height="150"></div>
                        <div style="margin:5px 0 10px 0;"><b><span style="font-size:28px;">$</span><span style="font-size:54px;">98</span></b><i>/MO*</i></span></div>
                    </div>
                    
                    <div class="just-info">
                        <div style="margin-bottom:5px;"><h4 style="color:#0097b2;"> justDESK BASIC</h4></div>
                        This membership is perfect for the free-spirited who does not require a workspace daily.<br><br>
                        Consequently, you get to enjoy the benefits of having business address and being part of the JustCommunity.
                        <br><br>
                        <div style="margin-bottom:10px;"><h4>Who is suitable for this</h4> </div>
                        <div style="float:left;margin:0 0 5px 5px;"><a href="community.php#freelancer" class="btn btn-border-w btn-round grey-btn custom-padding">Freelancers </a></div>
                        <div style="float:left;margin:0 0 5px 5px;"><a href="community.php#startup" class="btn btn-border-w btn-round grey-btn custom-padding">Startups </a></div>
              
                        <div style="clear:both"></div><br>
                    </div>
                    
                    <div class="just-sub-info-container">
                            
                        <div class="just-sub-info">
                            <div class="our-spaces-icon"><img src="img/icon-coffee.png"></div>
                            <div class="our-spaces-info">
                                 <div style="margin-bottom:10px;"><h4>Shared workspace once a month</h4> </div>
                                 <div style="line-height:18px;">Have access to a desk in the common workspace next to other aspiring professionals.</div>
                             </div>
                        </div>
                        
                        <div class="just-sub-info">
                            <div class="our-spaces-icon"><img src="img/icon-comp.png"></div>
                            <div class="our-spaces-info">
                                 <div style="margin-bottom:10px;"><h4>Full suite of services</h4> </div>
                                 <div style="line-height:18px;">Our suite of services includes a mailing address, amenities such as printing and IT services. Break time has never looked so exciting with our state of the art entertainment rooms – featuring a classic ping pong table or foosball for the soccer enthusiasts!</div>
                             </div>
                        </div>
                        
                        <div class="just-sub-info">
                            <div class="our-spaces-icon"><img src="img/icon-chem.png"></div>
                            <div class="our-spaces-info">
                                 <div style="margin-bottom:10px;"><h4>JustCo Perks</h4> </div>
                                 <div style="line-height:18px;">Be included in our JustCommunity with exciting events, mixers and so on!</div>
                             </div>
                        </div>
                        
                    </div>
                    
                    <div style="clear:both"></div>
                    
                </div>
                
                <div id="jc3" style="border-top:1px solid #999; margin-top:40px;"></div>
                
                <div class="our-space">
                
                    <div class="just-logo">
                        <div style="display:inline-block;"><img src="img/just-logo-3-blu.png" width="250" height="150"></div>
                        <div style="margin:5px 0 10px 0;"><b><span style="font-size:28px;">$</span><span style="font-size:54px;">398</span></b><i>/MO*</i></span></div>
                    </div>
                    
                    <div class="just-info">
                        <div style="margin-bottom:5px;"><h4 style="color:#0097b2;">justDESK UNLIMITED</h4></div>
                        This membership is perfect if you don't stick to a particular routine or have fixed business hours and require unlimited access to a workspace.<br><br>
                        Also, you will get to enjoy the benefits of being a part of the JustCommunity.
<br><br>
                        <div style="margin-bottom:10px;"><h4>Who is suitable for this</h4> </div>
                        <div style="float:left;margin:0 0 5px 5px;"><a href="community.php#freelancer" class="btn btn-border-w btn-round grey-btn custom-padding">Freelancers </a></div>
                        <div style="float:left;margin:0 0 5px 5px;"><a href="community.php#startup" class="btn btn-border-w btn-round grey-btn custom-padding">Startups </a></div>

                        <div style="clear:both"></div><br>
                    </div>
                    
                    <div class="just-sub-info-container">
                            
                        <div class="just-sub-info">
                            <div class="our-spaces-icon"><img src="img/icon-mug.png"></div>
                            <div class="our-spaces-info">
                                 <div style="margin-bottom:10px;"><h4>Shared workspace</h4> </div>
                                 <div style="line-height:18px;">Access to desk-space when and where you need it next to other creative JustCommunity professionals.</div>
                             </div>
                        </div>
                        
                        <div class="just-sub-info">
                            <div class="our-spaces-icon"><img src="img/icon-comp.png"></div>
                            <div class="our-spaces-info">
                                 <div style=" margin-bottom:10px;"><h4>Full suite of services</h4> </div>
                                 <div style="line-height:18px;">Our suite of services includes a mailing address, amenities such as printing and IT services. Break time has never looked so exciting with our state of the art entertainment rooms – featuring a classic ping pong table or foosball for the soccer enthusiasts!</div>
                             </div>
                        </div>
                        
                        <div class="just-sub-info">
                            <div class="our-spaces-icon"><img src="img/icon-chem.png"></div>
                            <div class="our-spaces-info">
                                 <div style="margin-bottom:10px;"><h4>JustCo Perks</h4> </div>
                                 <div style="line-height:18px;">Be included in our JustCommunity with exciting events, mixers and so on!</div>
                             </div>
                        </div>
                        
                        <div class="just-sub-info">
                            <div class="our-spaces-icon"><img src="img/icon-key.png"></div>
                            <div class="our-spaces-info">
                                 <div style="margin-bottom:10px;"><h4>JustCo All Access Pass</h4> </div>
                                 <div style="line-height:18px;">The all access pass literally allows you 24/7-access to all our JustCo workspaces. You now get to work anytime, anywhere with JustCo!</div>
                             </div>
                        </div>
                        
                    </div>
                    
                    <div style="clear:both"></div>
                    
                </div>
                
                <div id="jc4" style="border-top:1px solid #999; margin-top:40px;"></div>
                
                <div class="our-space">
                
                    <div class="just-logo">
                        <div style="display:inline-block;"><img src="img/just-logo-4-blu.png" width="250" height="150"></div>
                        <div style="margin:5px 0 10px 0;"><b><span style="font-size:28px;">$</span><span style="font-size:54px;">750</span></b><i>/MO*</i></span></div>
                    </div>
                    
                    <div class="just-info">
                        <div style="margin-bottom:5px;"><h4 style="color:#0097b2;">justDESK DEDICATED</h4></div>
                        Prefer consistency in your shared working environment? You and/or your team can have your very own desk in the shared workspace. You get to pick your special spot to conduct productive work!<br><br>
                        Also, you will get to enjoy the benefits of being a part of the JustCommunity.
<br><br>
                        <div style="margin-bottom:10px;"><h4>Who is suitable for this</h4> </div>
                        <div style="float:left;margin:0 0 5px 5px;"><a href="community.php#freelancer" class="btn btn-border-w btn-round grey-btn custom-padding">Freelancers </a></div>
                        <div style="float:left;margin:0 0 5px 5px;"><a href="community.php#startup" class="btn btn-border-w btn-round grey-btn custom-padding">Startups </a></div>
                        <div style="float:left;margin:0 0 5px 5px;"><a href="com-nonprofit.html" class="btn btn-border-w btn-round grey-btn custom-padding">Non-Profits </a></div>
                        <div style="float:left;margin:0 0 5px 5px;"><a href="community.php#small-business" class="btn btn-border-w btn-round grey-btn custom-padding">Small Business </a></div>
                        <div style="clear:both"></div><br>
                    
                    </div>
                    
                    <div class="just-sub-info-container">
                            
                        <div class="just-sub-info">
                            <div class="our-spaces-icon"><img src="img/icon-file.png"></div>
                            <div class="our-spaces-info">
                                 <div style="margin-bottom:10px;"><h4>A specially reserved desk</h4> </div>
                                 <div style="line-height:18px;">Shape up your very own personal workspace with a desk reserved – just for you. </div>
                             </div>
                        </div>
                        
                        <div class="just-sub-info">
                            <div class="our-spaces-icon"><img src="img/icon-comp.png"></div>
                            <div class="our-spaces-info">
                                 <div style="margin-bottom:10px;"><h4>Full suite of services</h4></div>
                                 <div style="line-height:18px;">Our suite of services includes a mailing address, amenities such as printing and IT services. Break time has never looked so exciting with our state of the art entertainment rooms – featuring a classic ping pong table or foosball for the soccer enthusiasts!</div>
                             </div>
                        </div>
                        
                        <div class="just-sub-info">
                            <div class="our-spaces-icon"><img src="img/icon-chem.png"></div>
                            <div class="our-spaces-info">
                                 <div style="margin-bottom:10px;"><h4>JustCo Perks</h4></div>
                                 <div style="line-height:18px;">Be included in our JustCommunity with exciting events, mixers and so on!</div>
                             </div>
                        </div>
                        
                        <div class="just-sub-info">
                            <div class="our-spaces-icon"><img src="img/icon-key.png"></div>
                            <div class="our-spaces-info">
                                 <div style="margin-bottom:10px;"><h4>JustCo All Access Pass</h4></div>
                                 <div style="line-height:18px;">The all access pass literally allows you 24/7-access to all our JustCo workspaces. You now get to work anytime, anywhere with JustCo!</div>
                             </div>
                        </div>
                        
                    </div>
                    
                    <div style="clear:both"></div>
                    
                </div>
                
                <div id="jc5" style="border-top:1px solid #999; margin-top:40px;"></div>
                
                <div class="our-space">
                
                    <div class="just-logo">
                        <div style="display:inline-block;"><img src="img/just-logo-5-blu.png" width="250" height="150"></div>
                        <div style="margin:5px 0 10px 0;"><span style="position:relative; bottom:30px; right:10px; font-style:italic;">Starting</span><b><span style="font-size:28px;">$</span><span style="font-size:54px;">800</span></b><i>/MO*</i></span></div>
                    </div>
                    
                    <div class="just-info">
                        <div style="margin-bottom:5px;"><h4 style="color:#0097b2;">justSTUDIO</h4></div>
                        Conduct your business in an exclusive studio space that specifically caters to you and your colleagues. <br><br>
                        Fancy a break or simply breathing space? You get to enjoy the full suite of services and amenities as well.
                        <br><br>
                        <div style="margin-bottom:10px;"><h4>Who is suitable for this</h4> </div>
                        <div style="float:left;margin:0 0 5px 5px;"><a href="community.php#startup" class="btn btn-border-w btn-round grey-btn custom-padding">Startups </a></div>
                        <div style="float:left;margin:0 0 5px 5px;"><a href="com-nonprofit.html" class="btn btn-border-w btn-round grey-btn custom-padding">Non-Profits </a></div>
                        <div style="float:left;margin:0 0 5px 5px;"><a href="community.php#small-business" class="btn btn-border-w btn-round grey-btn custom-padding">Small Business </a></div>
                        <div style="float:left;margin:0 0 5px 5px;"><a href="community.php#large-company" class="btn btn-border-w btn-round grey-btn custom-padding">Large Companies </a></div>
                        <div style="clear:both"></div><br>
                    
                    </div>
                    
                    <div class="just-sub-info-container">
                            
                        <div class="just-sub-info">
                            
                            <div class="our-spaces-icon"><img src="img/icon-light.png"></div>
                            <div class="our-spaces-info">
                                 <div style="margin-bottom:10px;"><h4>A studio space to call home</h4> </div>
                                 <div style="line-height:18px;">Give your team a studio to conduct your work in a peaceful and secure environment.</div>
                             </div>
                        </div>
                        
                        <div class="just-sub-info">
                            <div class="our-spaces-icon"><img src="img/icon-comp.png"></div>
                            <div class="our-spaces-info">
                                 <div style="margin-bottom:10px;"><h4>Full suite of services</h4></div>
                                 <div style="line-height:18px;">Our suite of services includes a mailing address, amenities such as printing and IT services. Break time has never looked so exciting with our state of the art entertainment rooms – featuring a classic ping pong table or foosball for the soccer enthusiasts!</div>
                             </div>
                        </div>
                        
                        <div class="just-sub-info">
                            <div class="our-spaces-icon"><img src="img/icon-chem.png"></div>
                            <div class="our-spaces-info">
                                 <div style="margin-bottom:10px;"><h4>JustCo Perks</h4></div>
                                 <div style="line-height:18px;">Be included in our JustCommunity with exciting events, mixers and so on!</div>
                             </div>
                        </div>
                        
                        <div class="just-sub-info">
                            <div class="our-spaces-icon"><img src="img/icon-key.png"></div>
                            <div class="our-spaces-info">
                                 <div style="margin-bottom:10px;"><h4>JustCo All Access Pass</h4></div>
                                 <div style="line-height:18px;">The all access pass literally allows you 24/7-access to all our JustCo workspaces. You now get to work anytime, anywhere with JustCo!</div>
                             </div>
                        </div>
                        
                    </div>
                    
                    
                    
                    <div style="clear:both"></div>
                    
                    <br><br>
                    <div style="font-size:12px; line-height:20px;">
                       * Starting prices shown above. Get in touch to learn more. Terms and conditions apply.
                    </div>
                    
                    
                    
                </div>
                
                <div style="border-top:1px solid #999; margin-top:40px;"></div>
                <div style="padding: 15px 0 30px 0;">
                
                    <h4>Hear Directly From Our Members</h4><br><br>
                    
                    <div class="subpage-testimonial">
						<div class="testimonial-img"><img src="img/face-lco-2.jpg" width="100%"></div><br>
						<div class="bubble-speech">
							<p><span style="color:#0097b2;">"</span>JustCo has been fantastic for our efforts to open up our APJ regional office.  Located in the heart of the city close to our customers and prospects, a fresh and vibrant facility that is conducive to collaboration, teamwork and bringing a growing team    together. The team at JustCo understand the demands of organizations of any size and are more than helpful when it comes to setting up or running your business on a day to day basis.<span style="color:#0097b2;">"</span> </p><br>
							<span class="name">Michael Clarke</span><br>
                            <b style="font-size: 11px;">SevOne Singapore Pte Ltd</b>
                        </div>
                    </div>
                    
                    <div class="subpage-testimonial">
						<div class="testimonial-img"><img src="img/face-fre-2.jpg" width="100%"></div><br>
						<div class="bubble-speech">
							<p><span style="color:#0097b2;">"</span>Hunter Consulting is pleased with the environment, décor, quality of facilities and above all the level of service and professionalism of the front desk staff. We are attracted to the concept of a themed office that allows its tenants to engage in activities ranging from networking sessions to fun and games. A treat to those who value the importance of a work hard, play hard environment.<span style="color:#0097b2;">"</span> </p><br>
							<span class="name">Samantha Soh</span><br>
                            <b style="font-size: 11px;">Hunter Consulting</b>
                        </div>
                    </div>
                
                    <div style="clear:both;"></div>
                
                </div>
                
                
                <h2 class="module-title font-alt">Our Clients</h2>
                    <div class="module-subtitle font-serif">
				        Been there done that...stick with us
                    </div>
                
                <div class="pricing-clients">
                
                    <div class="pricing-clients-list"><img src="img/exlogo-6.jpg" width="100" height="100"></div>
                    <div class="pricing-clients-list"><img src="img/exlogo-7.jpg" width="100" height="100"></div>
                    <div class="pricing-clients-list"><img src="img/exlogo-4.jpg" width="100" height="100"></div>
                    <div class="pricing-clients-list"><img src="img/exlogo-5.jpg" width="100" height="100"></div>
                
                </div>
                
            
            </div>
            
            
            
            
            <div class="floating-contact">
                <div id="contact2" class="contact-container sticky">
                    <div class="contact-wrapper">
                        <div class="sidebar-contact-form ">
                            <h6>We Want To Hear From You!</h6>
                            Let's get in touch! We can propose the right solution for your business.<br>
                        
                             <form id='contactus1' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>


            <input type='hidden' name='submitted' id='submitted' value='1'/>
            <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
            <input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
            <div class="clearfix"></div>

            <div class='clearfix'>
                <input type='text' class="sidebar-contact-style" name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>'  placeholder="NAME*" /><br/>
                <span id='contactus1_name_errorloc' class='error'></span>
            </div>
            <div class='clearfix'>
                <input type='text' class="sidebar-contact-style" name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' placeholder="YOUR EMAIL*" /><br/>
                <span id='contactus1_email_errorloc' class='error'></span>
            </div>
            <div class='clearfix'>
                <input type='text' class="sidebar-contact-style" name='telephone' id='telephone' value='<?php echo $formproc->SafeDisplay('telephone') ?>' placeholder="YOUR PHONE NO." /><br/>
            </div>
            <div class="clearfix">
                <span id='contactus1_message_errorloc' class='error'></span>
                <textarea rows="10" cols="50" class="sidebar-contact-style" name='message' id='message' placeholder="MESSAGE*" /><?php echo $formproc->SafeDisplay('message') ?></textarea>
            </div>


            <div class='clearfix'>
                <button type='submit' class="btn btn-block btn-round btn-d" value='Submit'>Submit</button>
            </div>


            </form>
                        </div>
                        <div style="margin-top:10px; text-align:center;">
                            <span style="color:#111;">or call us at</span><br>
                            <b><span style="color:#0097b2; font-size:28px;">+65 68125889</span></b>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div style="clear:both;"></div>
        
        
        </div>
    
    </section>

        
		<!-- Contact start -->
		<section id="contact" class="pattern-grey contact-display">
			<div class="container">
           <div class="text-center">

						<h2 class="module-title font-alt">Get in Touch With Us</h2>
                        <div class="module-subtitle font-serif">
				            Contact us anytime if you have any question or enquiries. We'd love to hear from you.
                        </div>

			</div>
        
            <div class="contact-form-container">
        
            <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>


            <input type='hidden' name='submitted' id='submitted' value='1'/>
            <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
            <input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
            <div class="clearfix"></div>

            <div class='clearfix'>
                <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>'  placeholder="NAME*" /><br/>
                <span id='contactus_name_errorloc' class='error'></span>
            </div>
            <div class='clearfix'>
                <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' placeholder="YOUR EMAIL*" /><br/>
                <span id='contactus_email_errorloc' class='error'></span>
            </div>
            <div class='clearfix'>
                <input type='text' name='telephone' id='telephone' value='<?php echo $formproc->SafeDisplay('telephone') ?>' placeholder="YOUR PHONE NO." /><br/>
            </div>
            <div class="clearfix">
                <span id='contactus_message_errorloc' class='error'></span>
                <textarea rows="10" cols="50" name='message' id='message' placeholder="MESSAGE*" /><?php echo $formproc->SafeDisplay('message') ?></textarea>
            </div>


            <div class='clearfix'>
                <button type='submit' class="btn btn-block btn-round btn-d" value='Submit'>Submit</button>
            </div>


            </form>
            
            </div>
            
          </div>
          
		</section>
		<!-- Contact end -->
     
	

		<!------------ Widgets start ------------>
		<section id="prefooter">
            <div class="pattern-black">
                <div class="container">
        
                    <div class="row">
        
                        <div class="col-sm-4">
        
                            <!-- Widget start -->
                            <div class="widget">
                                <div class="logo-widget"></div><br>
                                <p>JUSTCO HQ</p>
                                <p>120 Robinson Road, #15-01, Singapore 068913</p>
                                <p>T: +65 6812 5888</a></p>
                                <p>T: +65 6812 5889</a></p>
                            </div>
                            <!-- Widget end -->
        
                        </div>
        
                        <div class="col-sm-2">
        
                            <!-- Widget start -->
                            <div class="widget">
                                
                                <ul class="icon-list">
                                    <div class="filler"><li>A</li></div>
                                    <li><a href="our-story.html">OUR STORY</a></li>
                                    <li><a href="careers.html">CAREERS</a></li>
                                    <li><a href="pricing.php">PRICING</a></li>
                                    <li><a href="events.php">EVENTS</a></li>
                                    <!--li><a href="faq.html">FAQ</a></li-->
                                </ul>
                            </div>
                            <!-- Widget end -->
        
                        </div>
        
                        <div class="col-sm-2 ">
        
                            <!-- Widget start -->
                            <div class="widget">
                                
                                <ul class="icon-list">
                                    <div class="filler"><li>A</li></div>
                                    <li><a href="javascript:void(0)" title="COMING SOON" style="opacity:.3;">SIGN IN / SIGN UP</a></li>
                                    
                                </ul>
                            </div>
                            <!-- Widget end -->
        
                        </div>
        
                        <div class="col-sm-2">
        
                            <!-- Widget start -->
                            <div class="widget">
                                
                                <ul class="icon-list">
                                    
                                    <li><b><span style="color:#999; font-size:80%; opacity:.5;">COMMUNITY</span></b></li>
                                    <li><a href="community.php#freelancer">FREELANCER</a></li>
                                    <li><a href="community.php#startup">STARTUP</a></li>
                                    <li><a href="community.php#small-business">SMALL BUSINESS</a></li>
                                    <!--li><a href="com-nonprofit.html">NON-PROFIT</a></li-->
                                    <li><a href="community.php#large-company">LARGE COMPANY</a></li>
                                </ul>
                            </div>
                            <!-- Widget end -->
        
                        </div>
                        
                        <div class="col-sm-2">
        
                            <!-- Widget start -->
                            <div class="widget">
                                <ul class="icon-list">
                                    
                                    <li><b><span style="color:#999; font-size:80%; opacity:.5;">SINGAPORE LOCATIONS</span></b></li>
                                    <li><a href="loc-sg-120robinson.php">120 Robinson Rd, SG</a></li>
                                    <li><a href="loc-sg-6rafflesquay.php">6 Raffles Quay, SG</a></li>
                                    <li>&nbsp;</li>
                                   
                                    
                                </ul>
                            </div>
                            <!-- Widget end -->
        
                        </div>
        
                    </div><!-- .row -->
        
                </div>
            </div>
        </section>
		<!------------ Widgets end ------------>

	
		<!------------ Footer start ------------>
		<footer class="footer">
			<div class="container">
	
				<div class="row">
	
					<div class="col-sm-6">
						<p class="copyright">© 2015 <a href="index.html">JUSTCO</a>. ALL RIGHTS RESERVED.</p>
					</div>
	
					<div class="col-sm-6">
						<div class="footer-social-links">
							<a href="https://www.facebook.com/JC.JustCo" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
							<a href="https://twitter.com/JC_JustCo" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
							<a href="https://instagram.com/JustCo_SG"><i class="fa fa-instagram fa-lg" target="_blank"></i></a>
                            <a href="https://www.linkedin.com/company/justco"><i class="fa fa-linkedin fa-lg" target="_blank"></i></a>
                            <!--a href="#"><i class="fa fa-google-plus fa-lg" target="_blank"></i></a-->
						</div>
					</div>
	
				</div><!-- .row -->
	
			</div>
		</footer>
		<!------------ Footer end ------------>
	
	</div>
	<!-- Wrapper start -->
	
	<!-- Scroll-up -->
	<div class="scroll-up">
		<a href="#totop"><i class="fa fa-angle-double-up"></i></a>
	</div>
    
    
    
	<script type="text/javascript" src="jquery.jsticky.js"></script>
	<script type="text/javascript">
		$(function(){

			$(".sticky").sticky({
				topSpacing: 80,
				zIndex:2,
				stopper: "#prefooter"
			});

		});
	</script>
    
    <script>
var $nav = $('#nav-1');
$(document).scroll(function() {
    $nav.css({display: $(this).scrollTop() > 1? "none":"block"});
});

var $nav2 = $('#nav-2');
$(document).scroll(function() {
    $nav2.css({display: $(this).scrollTop() > 1? "block":"none"});
});
</script>


<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");


    frmvalidator.addValidation("scaptcha","req","Please enter the code in the image above");

    document.forms['contactus'].scaptcha.validator
      = new FG_CaptchaValidator(document.forms['contactus'].scaptcha,
                    document.images['scaptcha_img']);

    function SCaptcha_Validate()
    {
        return document.forms['contactus'].scaptcha.validator.validate();
    }

    frmvalidator.setAddnlValidationFunction("SCaptcha_Validate");

    function refresh_captcha_img()
    {
        var img = document.images['scaptcha_img'];
        img.src = img.src.substring(0,img.src.lastIndexOf("?")) + "?rand="+Math.random()*1000;
    }

// ]]>
</script>

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus1");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");


    frmvalidator.addValidation("scaptcha","req","Please enter the code in the image above");

    document.forms['contactus1'].scaptcha.validator
      = new FG_CaptchaValidator(document.forms['contactus1'].scaptcha,
                    document.images['scaptcha_img']);

    function SCaptcha_Validate()
    {
        return document.forms['contactus1'].scaptcha.validator.validate();
    }

    frmvalidator.setAddnlValidationFunction("SCaptcha_Validate");

    function refresh_captcha_img()
    {
        var img = document.images['scaptcha_img'];
        img.src = img.src.substring(0,img.src.lastIndexOf("?")) + "?rand="+Math.random()*1000;
    }

// ]]>
</script>


</body>
</html>