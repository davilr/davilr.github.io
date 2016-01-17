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
$formproc->AddRecipient('webenquiry@justgroupglobal.com'); //<<---Put your email address here


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

	<!------------ Navigation start ------------>
	<nav class="navbar navbar-custom navbar-transparent navbar-fixed-top one-page" role="navigation">

		<div class="container">
	
			<div class="navbar-header">
            
                <a href="index.php"><div id="logo"></div></a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"></a>
			</div>
	
			<div class="collapse navbar-collapse" id="custom-collapse">
				<ul class="nav navbar-nav navbar-right">
	
					<li class="dropdown"><a href="community.php" class="dropdown-toggle" data-toggle="dropdown">Community</a>
                        <ul class="dropdown-menu">
                            <li><a href="#freelancer" class="section-scroll">Freelancer</a></li>
                            <li><a href="#startup" class="section-scroll">Startup</a></li>
                            <li><a href="#small-business" class="section-scroll">Small Business</a></li>
                            <li><a href="#large-company" class="section-scroll">Large Company</a></li>
                        </ul>
                    </li>
					<li><a href="locations.html" class="section-scroll">Locations</a></li>
					<li><a href="pricing.php" class="section-scroll">Pricing</a></li>
					<li><a href="events.php" class="section-scroll">Events</a></li>
					<li class="nav-contact"><a href="#contact" class="section-scroll">Contact Us</a></li>
                    <li class="nav-contact-2"><a href="#contact-2" class="section-scroll">Contact Us</a></li>
					<li><a href="javascript:void(0)" title="COMING SOON" style="opacity:.5;">Sign In</a></li>
	
				</ul>
			</div>
	
		</div>

	</nav>
	<!------------ Navigation end ------------>

	<!-- Home start -->
	<section id="home" class="home-section home-parallax home-fade bg-dark-60">

		<div class="hero-slider custom-slider">
			<ul class="slides">

				<li class="bg-dark-30 bg-dark" style="background-image:url(img/banner-freelancers-1.jpg)">
                    <div class="custom-container">
                        <div style="position:absolute; bottom:70px;">
                            
                            <div class="custom-page-title">COMMUNITY</div>
                            <a href="pricing.php" class="section-scroll btn btn-border-w btn-round">JOIN OUR COMMUNITY</a>
                        </div>
                    </div>
				</li>
                
				<li class="bg-dark-30 bg-dark" style="background-image:url(img/banner-freelancers-2.jpg)">
                    <div class="custom-container">
                        <div style="position:absolute; bottom:70px;">
                  
                            <div class="custom-page-title">COMMUNITY</div>
                            <a href="pricing.php" class="section-scroll btn btn-border-w btn-round">JOIN OUR COMMUNITY</a>
                        </div>
                    </div>
				</li>
				
			</ul>
		</div>

	</section >
	<!-- Home end -->
    
    <section style="background-color:#fff; position: relative; padding: 0;">
    
        <div class="custom-container">
            <div class="sub-content">
            
                <div id="freelancer" style="padding-top:35px;"></div>
                
                <div class="jc-breadcrumb"><span style="color:#999;"><a href="index.php">HOME</a>  &nbsp; /  &nbsp; COMMUNITY  &nbsp; /  &nbsp; </span> <a href="javascript:void(0)">FREELANCER</a></div>
                <br>
                <h3>Work to the beat of your own drum</h4><br>
                <p>We have rental options of desk space for the free spirited, be it for a day, week or month! Not desk-bound, no problem!</p><br>
                
                <div class="community-img"><img src="img/img-fre-1.jpg" alt=""></div>
                <div class="community-img"><img src="img/img-fre-2.jpg" alt=""></div>
                <div class="community-img"><img src="img/img-fre-3.jpg" alt=""></div>
                <div class="community-img"><img src="img/img-fre-4.jpg" alt=""></div>
                
                
                <div style="clear:both;"></div><br>
                
                
                <div class="subpage-subcontent">
                    <span style="font-size:32px; font-family:'Amatic SC', cursive;">Hear Directly From Our Members</span><br><br>
                    
                    <div class="subpage-testimonial">
                        <div class="testimonial-img"><img src="img/face-fre-1.jpg" width="100%"></div><br>
						<div class="bubble-speech">
                            <p><span style="color:#0097b2;">"</span>Fantastic open space and great community vibe.<span style="color:#0097b2;">"</span> </p><br><!--br><br><br><br><br><br><br><br-->
                            <span class="name">Asheesh Chanda</span><br>
                            <b style="font-size: 11px;">&nbsp;</b>
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
                
                <div id="startup" style="margin-top: 10px; padding-top:35px; padding-top:35px; border-top: 1px solid rgba(0,0,0,.3);"></div>
                
                <div class="jc-breadcrumb"><span style="color:#999;"><a href="index.php">HOME</a>  &nbsp; /  &nbsp; COMMUNITY  &nbsp; /  &nbsp; </span> <a href="javascript:void(0)">STARTUP</a></div>
                <br>
                <h3>Kick-start your way to success</h4><br>
                <p>Be part of a community of brilliant organizations that would sure to give your business the initial push and inspiration it needs!</p><br>
                
                <div class="community-img"><img src="img/img-sta-1.jpg" alt=""></div>
                <div class="community-img"><img src="img/img-sta-2.jpg" alt=""></div>
                <div class="community-img"><img src="img/img-sta-3.jpg" alt=""></div>
                <div class="community-img"><img src="img/img-sta-4.jpg" alt=""></div>
              
                
                <div style="clear:both;"></div><br>
                
                
                <div class="subpage-subcontent">
                    <span style="font-size:32px; font-family:'Amatic SC', cursive;">Hear Directly From Our Members</span><br><br>
                    
                    <div class="subpage-testimonial">
                        <div class="testimonial-img"><img src="img/face-sta-1.jpg" width="100%"></div><br>
						<div class="bubble-speech">
                            <p><span style="color:#0097b2;">"</span>Great staff, location and community. I get to meet different kind of people with interesting businesses.<span style="color:#0097b2;">"</span> </p><br><!--br><br-->
                            <span class="name">Sylvia Yanti</span><br>
                            <b style="font-size: 11px;">NSONE</b>
                        </div>
                    </div>
                    
                    <div class="subpage-testimonial">
						<div class="testimonial-img"><img src="img/face-sta-2.jpg" width="100%"></div><br>
						<div class="bubble-speech">
							<p><span style="color:#0097b2;">"</span>We love working in the Justco @ Robinson Road offices,  with its central location, great office interior, amazing pantry and breakout area  and super friendly community manager and team, what more could we want!<span style="color:#0097b2;">"</span> </p><br>
							<span class="name">Jason Tay and Soh Wan Yi</span><br>
                            <b style="font-size: 11px;">Goodman Fielder Singapore Pte Ltd</b>
                        </div>
                    </div>
                
                    <div style="clear:both;"></div>
                
                
                </div>
                
                <div id="small-business" style="margin-top: 10px; padding-top:35px; padding-top:35px; border-top: 1px solid rgba(0,0,0,.3);"></div>
                
                <div class="jc-breadcrumb"><span style="color:#999;"><a href="index.php">HOME</a>  &nbsp; /  &nbsp; COMMUNITY  &nbsp; /  &nbsp; </span> <a href="javascript:void(0)">SMALL BUSINESS</a></div>
                <br>
                <h3>Flexible workspaces for ever-expanding needs</h4><br>
                <p>Continual and fast expansion calls for flexible workspace that expands with your business! We have just that here at JustCo.</p><br>
                
                <div class="community-img"><img src="img/img-smb-1.jpg" alt=""></div>
                <div class="community-img"><img src="img/img-smb-2.jpg" alt=""></div>
                <div class="community-img"><img src="img/img-smb-3.jpg" alt=""></div>
                <div class="community-img"><img src="img/img-smb-4.jpg" alt=""></div>
                
                
                <div style="clear:both;"></div><br>
                
                
                <div class="subpage-subcontent">
                    <span style="font-size:32px; font-family:'Amatic SC', cursive;">Hear Directly From Our Members</span><br><br>
                    
                    <div class="subpage-testimonial">
                        <div class="testimonial-img"><img src="img/face-smb-1.jpg" width="100%"></div><br>
						<div class="bubble-speech">
                            <p><span style="color:#0097b2;">"</span>JustCo have been awesome in all of my dealings with them.  From my initial enquiry on office space, to making us feel so welcome on an ongoing basis, they offer the perfect solution to any growing business looking for a cost-effective, cool office solution.  I recommend them to all our clients!<span style="color:#0097b2;">"</span> </p><br><!--br><br><br-->
                            <span class="name">Suzy Goulding</span><br>
                            <b style="font-size: 11px;">Umami Collective Pte Ltd</b>
                        </div>
                    </div>
                    
                    <div class="subpage-testimonial">
						<div class="testimonial-img"><img src="img/face-smb-2.jpg" width="100%"></div><br>
						<div class="bubble-speech">
							<p><span style="color:#0097b2;">"</span>We recently relocated to Singapore to expand our business operations and viewed over twenty serviced offices in Singapore. When we saw the new collaborative work space at 120 Robinson Road, it was an instant decision for us to go for it. We love the design of the collaborative work spaces, the energy in the space and the friendly and efficient staff. It is a pleasure to come to the office and makes work more enjoyable. Keep it up JustCo!<span style="color:#0097b2;">"</span> </p><br>
							<span class="name">Alok and Sylvia Bhatia</span><br>
                            <b style="font-size: 11px;">Watami Trading Pte Ltd</b>
                        </div>
                    </div>
                
                    <div style="clear:both;"></div>
                
                
                </div>
                
                <div id="large-company" style="margin-top: 10px; padding-top:35px; border-top: 1px solid rgba(0,0,0,.3);"></div>
                
                <div class="jc-breadcrumb"><span style="color:#999;"><a href="index.php">HOME</a>  &nbsp; /  &nbsp; COMMUNITY  &nbsp; /  &nbsp; </span> <a href="javascript:void(0)">LARGE COMPANY</a></div>
                <br>
                <h3>We compliment your workspace needs</h4><br>
                <p>Beyond the walls of your typical workspace, we are here to provide the lively and creative workspace or studio that your organization requires to expand into unchartered territories.</p><br>
                
                <div class="community-img"><img src="img/img-lco-1.jpg" alt=""></div>
                <div class="community-img"><img src="img/img-lco-2.jpg" alt=""></div>
                <div class="community-img"><img src="img/img-lco-3.jpg" alt=""></div>
                <div class="community-img"><img src="img/img-lco-4.jpg" alt=""></div>
                
                <div style="clear:both;"></div><br>
                
                
                <div class="subpage-subcontent">
                    <span style="font-size:32px; font-family:'Amatic SC', cursive;">Hear Directly From Our Members</span><br><br>
                    
                    <div class="subpage-testimonial">
                        <div class="testimonial-img"><img src="img/face-lco-1.jpg" width="100%"></div><br>
						<div class="bubble-speech">
                            <p><span style="color:#0097b2;">"</span>The office is very nice, to work but also to relax, you wont feel the stress of the environment around. The shared space is a good way to have discussions with other people. Moreover, Munirah, Farah and Jillyn are lovely staff and make the space even more agreeable.<span style="color:#0097b2;">"</span> </p><br><!--br><br><br-->
                            <span class="name">Denise, Angie, Chloe and Ee Ping</span><br>
                            <b style="font-size: 11px;">Albatross Global Solutions SG Pte Ltd
</b>
                        </div>
                    </div>
                    
                    <div class="subpage-testimonial">
						<div class="testimonial-img"><img src="img/face-lco-2.jpg" width="100%"></div><br>
						<div class="bubble-speech">
							<p><span style="color:#0097b2;">"</span>JustCo has been fantastic for our efforts to open up our APJ regional office.  Located in the heart of the city close to our customers and prospects, a fresh and vibrant facility that is conducive to collaboration, teamwork and bringing a growing team    together. The team at JustCo understand the demands of organizations of any size and are more than helpful when it comes to setting up or running your business on a day to day basis.<span style="color:#0097b2;">"</span> </p><br>
							<span class="name">Michael Clarke</span><br>
                            <b style="font-size: 11px;">SevOne Singapore Pte Ltd</b>
                        </div>
                    </div>
                
                    <div style="clear:both;"></div>
                
                
                </div>
                
                
                <div class="subpage-subcontent">
                    <span style="font-size:32px; font-family:'Amatic SC', cursive;">Prices</span><br><br>
                    
                    
                    
                    <div class="subpage-pricing">
                        <div style="display:inline-block; width: 100%; height: 150px; background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)) repeat scroll 0% 0%, transparent url('img/just-logo-0-blu.png') no-repeat scroll 50% 50% / auto 100%;"></div><br>
                        <div style="margin:5px 0 10px 0;"><span style="position:relative; bottom:30px; right:10px; font-style:italic;">Starting</span><b><span style="font-size:28px;">$</span><span style="font-size:54px;">98</span></b><i>/MO*</i></span></div>
                        <p>JustDesk offers a range of flexible hot desking options depending on your business requirements. What's more, you'd get to enjoy the full suite of common services that JustCo has to offer.</p><br><br>
                        <a href="pricing.php" class="section-scroll btn btn-border-w btn-round blue-btn">Learn More</a>
                    </div>
                    
                    <div class="subpage-pricing subpage-pricing-border">
                        <div style="display:inline-block; width: 100%; height: 150px; background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)) repeat scroll 0% 0%, transparent url('img/just-logo-5-blu.png') no-repeat scroll 50% 50% / auto 100%;"></div><br>
                        <div style="margin:5px 0 10px 0;"><span style="position:relative; bottom:30px; right:10px; font-style:italic;">Starting</span><b><span style="font-size:28px;">$</span><span style="font-size:54px;">800</span></b><i>/MO*</i></span></div>
                        <p>JustStudio offers your team a comfortable studio space they can call home – 24/7. Work collaboratively and creatively in our vibrant studios while having access to all shared amenities when your team needs a breather!</p><br>
                        <a href="pricing.php" class="btn btn-border-w btn-round blue-btn">Learn More</a>
                    </div>
                    
                    <div style="clear:both;"></div>
                    <br>
                    
                    <span style="font-size:13px; text-align:left;">* Starting prices shown above. Get in touch to learn more.</span>
                
                </div>
             
                
            </div>


            <div class="floating-contact">
                <div id="contact-2" class="contact-container sticky">
                    <div class="contact-wrapper">
                        <div class="sidebar-contact-form ">
                            <h6>We Want To Hear From You!</h6>
                            Let's get in touch! we can propose the right solution for your business<br>
                        
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
                                    <li><a href="#freelancer">FREELANCER</a></li>
                                    <li><a href="#startup">STARTUP</a></li>
                                    <li><a href="#small-business">SMALL BUSINESS</a></li>  
                                    <li><a href="#large-company">LARGE COMPANY</a></li>
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
						<p class="copyright">© 2015 <a href="index.php">JUSTCO</a>. ALL RIGHTS RESERVED.</p>
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