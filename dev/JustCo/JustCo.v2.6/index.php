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
$formproc->AddRecipient('wilsen.davil@gmail.com'); //<<---Put your email address here webenquiry@justgroupglobal.com


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
	<link href="assets/css/flexslider.css" rel="stylesheet">
	<link href="assets/css/owl.carousel.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
    <link href="child-style.css" rel="stylesheet">

<link href="magnific-popup.css" rel="stylesheet">


<style>
.white-popup {
  position: relative;
  background: #FFF;
  padding: 0px;
  width:auto;
  max-width: 650px;
  margin: 20px auto;
  border-radius:8px;
}

</style>

<script src="assets/js/jquery-2.1.3.min.js"></script>

<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script type='text/javascript' src='js/gen_validatorv31.js'></script>

<script>
    $(document).ready(function () {
        $('.open-popup-link').magnificPopup({
  type:'inline',
  midClick: true,
  mainClass: 'mfp-fade' // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
  
});
		
    });
</script>
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

	</nav>
	<!------------ Navigation end ------------>
    
    <!-- Home start -->
	<section id="home" class="home-section home-parallax home-fade home-full-height">

		<div class="hero-slider">
			<ul class="slides">

				<li class="bg-dark-30 bg-dark" style="background-image:url(img/banner-1.jpg)">
					<div class="hs-caption">
						<div class="caption-content">
							<div class="mb-70"></div>				
							
							<div class="work-better"> <img src="img/slide-1-type.png" width="100%"></div>
                           
                            <div style="margin-top:20px;">
								CALL US FOR ENQUIRY<br>
                                <span style="font-size:30px; font-weight:700;">+65 6812 5888</span>
							</div>
                           
                            
						</div>
					</div>
				</li>
                
                <li class="bg-dark-60 bg-dark" style="background-image:url(img/banner-2.jpg)">
					<div class="hs-caption">
						<div class="caption-content">
							<div class="mb-70"></div>				
							
							<div class="hs-title-size-4 font-alt mb-50">
								Workplace Magic
							</div>
                            
                            <div class="col-sm-8 col-sm-offset-2 mb-40">Produce your next great work with us here at JustCo!</div>
                            <div style="clear:both"></div>
                            <br>
							<a href="#about" class="section-scroll btn btn-border-w btn-round">Learn More</a>
                           
                            <div style="margin-top:100px;">
								CALL US FOR ENQUIRY<br>
                                <span style="font-size:30px; font-weight:700;">+65 6812 5888</span>
							</div>
                           
                            
						</div>
					</div>
				</li>
				
			</ul>
		</div>

	</section >
	<!-- Home end -->

	<!-- Wrapper start -->
	<div class="main">

		<!-- About start -->
		<section id="about" class="pattern-black">
			<div class="container">

				<div class="row">

					<div style="text-align:center;">

						<h2 class="module-title font-alt"><span style="color:white;">Hello!</span></h2>
						<div class="module-subtitle font-serif">
							<span style="color:white;">Welcome to JustCo – a creative common working space to suit your every need! At JustCo we endeavor to foster a creative work environment, with a myriad of brilliant individuals and organizations vibing off each other to produce stunning work. We are excited to have fresh new individuals or organizations join our ever-growing community. 
                            
                            </span>
						</div>

					</div>

				</div><!-- .row -->

				<div class="row">

					<div class="col-sm-2 col-sm-offset-5">

						<div class="large-text align-center">
							<a href="#team" class="section-scroll"><i class="fa fa-angle-down"></i></a>
						</div>

					</div>

				</div>

			</div><!-- .container -->
		</section>
		<!-- About end -->
        
        <section id="team" class="pattern-grey">
			<div class="container">

				<div class="row">

					<div style="text-align:center;">

						<h2 class="module-title font-alt">The JustCommunity</h2>
						<div class="module-subtitle font-serif">
							Experience first-hand how co-working and hot desking can make a positive difference to your work life with us! Regardless of the size of your organization…Let's make work better – together.
                        </div>
					</div>

				</div><!-- .row -->

				<div class="row">

					<!-- Team item star -->
                    <a href="community.php#freelancer">
					<div class="col-sm-6 col-community mb-sm-0 wow fadeInUp">
						<div class="team-item">
							<div class="team-image">
								<img src="img/communitytype-1.jpg" alt="">
								<div class="team-detail">
									<h4>FREELANCER</h4>
									<p class="font-serif">Work to the beat of your own drum.</p>
								</div>
							</div>
						</div>
					</div>
                    </a>
					<!-- Team item end -->

					<!-- Team item star -->
                    <a href="community.php#startup">
					<div class="col-sm-6 col-community mb-sm-0 wow fadeInUp">
						<div class="team-item">
							<div class="team-image">
								<img src="img/communitytype-2.jpg" alt="">
								<div class="team-detail">
									<h4>STARTUP</h4>
									<p class="font-serif">Kick-start your way to success instantaneously.</p>
								</div>
							</div>
						</div>
					</div>
                    </a>
					<!-- Team item end -->

					<!-- Team item star -->
                    <a href="community.php#small-business">
					<div class="col-sm-6 col-community mb-sm-0 wow fadeInUp">
						<div class="team-item">
							<div class="team-image">
								<img src="img/communitytype-3.jpg" alt="">
								<div class="team-detail">
									<h4>SMALL BUSINESS</h4>
									<p class="font-serif">Flexible workspaces to suit your ever-expanding needs.</p>
								</div>
							</div>
						</div>
					</div>
                    </a>
					<!-- Team item end -->

					<!-- Team item star -->
                    
					<!--div class="col-sm-6 col-community mb-sm-0 wow fadeInUp">
						<div class="team-item">
							<div class="team-image">
								<img src="img/communitytype-4.jpg" alt="">
								<div class="team-detail">
									<h4>NON-PROFIT</h4>
									<p class="font-serif">Coming soon</p>
								</div>
							</div>
						</div>
					</div-->
                    
					<!-- Team item end -->
                    
                    <!-- Team item star -->
                    <a href="community.php#large-company">
					<div class="col-sm-6 col-community mb-sm-0 wow fadeInUp">
						<div class="team-item">
							<div class="team-image">
								<img src="img/communitytype-5.jpg" alt="">
								<div class="team-detail">
									<h4>LARGE COMPANY</h4>
									<p class="font-serif">The perfect compliment to your workspace needs.</p>
								</div>
							</div>
						</div>
					</div>
                    </a>
					<!-- Team item end -->
                    <div style="clear:both;"></div>
                    
                    <div class="mb-60"></div>
                    
                    <div class="module-subtitle font-serif">
							No matter what your workspace needs, JustCo has the right workspace tailored just for you! 
					</div>

				</div><!-- .row -->

			</div>
		</section>
		<!-- Team end -->
        

		<!-- Divider -->
		<hr class="divider-w">
		<!-- Divider -->
        
        <!-- Pricing start -->
        <section id="pricing" class="bg-blur">
        
            <h2 class="module-title font-alt"><span style="color:white;">Get On Board</span></h2>
            
            <div class="module-subtitle font-serif">
				<span style="color:white;">Here's a look at your two main workspace types offered at JustCo.</span>
                                                    
			</div>
            
            <div class="custom-container">
            
                <div class="home-pricing">
                
                    <div style="display:inline-block;"><img src="img/just-logo-0-w.png" width="250" height="150"></div><br><br>
                    <span style="position:relative; bottom:30px; right:10px; font-style:italic;">Starting</span> <span style="font-size:48px; font-weight:700;">$98 </span><span style="font-size:30px;">/mo*</span><br><br>
                    <strong>Flexible Desk-space Membership</strong><br><br>
                    
                    <table width="100%" border="0">
                      <tbody>
                        <tr>
                          <td align="left" valign="top"><div class="tick"></div></td>
                          <td align="left" valign="top">Full access to our suite of services with flexible access to a desk in a common workspace.</td>
                        </tr>
                      </tbody>
                    </table><br>
                    
                    <!--div style="margin-top:10px; text-align:left;"><div class="tick"></div><p style="padding-top:5px;">Full access to our suite of services with flexible access to a desk in a common workspace</p></div-->
                    
                    <a href="pricing.php" class="section-scroll btn btn-border-w btn-round">Learn More</a>
                
                </div>
                
                <div class="home-pricing pricing-border">
                    <div style="display:inline-block;"><img src="img/just-logo-5-w.png" width="250" height="150"></div><br><br>
                    <span style="position:relative; bottom:30px; right:10px; font-style:italic;">Starting</span><span style="font-size:48px; font-weight:700;">$800 </span><span style="font-size:30px;">/mo*</span><br><br>
                    <strong>Studio Office - space Membership</strong><br><br>
                    
                    <table width="100%" border="0">
                      <tbody>
                        <tr>
                          <td align="left" valign="top"><div class="tick"></div></td>
                          <td align="left" valign="top">24/7 access to a dedicated space and all shared facilities.<br><br></td>
                        </tr>
                      </tbody>
                    </table><br>
                    
                    <a href="pricing.php" class="section-scroll btn btn-border-w btn-round">Learn More</a>
                    
                </div>
            
            </div>
            
			<div style="font-size:12px; line-height:20px;">
				* Starting prices shown above. Get in touch to learn more.
			</div>
            
            <div style="clear:both"></div>
                       
        
        </section>
        <!-- Pricing end -->
        
        <!-- Testimonial start -->
        
        <section id="testimonial" class="pattern-grey">
        
            <div class="custom-container">
            
                <h2 class="module-title font-alt">Hear From Our Members</h2>
                
                <div class="testimonial">
					<div class="testimonial-img"><img src="img/face-3.jpg" width="100%"></div><br>
					<div class="bubble-speech">
                       <p><span style="color:#0097b2;">"</span>We have just moved into JustCo @ Robinson Road. Not only does this office space house a great location and window view, the services rendered are impeccable! The creative, edgy office decor definitely suits LINE and what we stand for as a company as well.<span style="color:#0097b2;">"</span> </p><br>
                       <span class="name">Rachel Hoon</span><br>
                       <b style="font-size: 11px;">LINE Singapore</b>
                   </div>
                </div>
                
                <div class="testimonial">
                   <div class="testimonial-img"><img src="img/face-1.jpg" width="100%"></div><br>
                   <div class="bubble-speech">
                       <p><span style="color:#0097b2;">"</span>JustCo...just what we are looking for, no frills affordable...Last but not least, excellent meeting area for tenants!<span style="color:#0097b2;">"</span> </p><br><br><br><br>
                       <span class="name">Vincent Sim</span><br>
                       <b style="font-size: 11px;">HEAT Software</b>
                   </div>
                </div>
                
                <div class="testimonial">
                   <div class="testimonial-img"><img src="img/face-2.jpg" width="100%"></div><br>
                   <div class="bubble-speech">
                       <p><span style="color:#0097b2;">"</span>DD8 had a good feeling about JustCo after viewing the space whilst under renovation, and our expectations have definitely been met. Moving in, setting up and getting to work could not have been more straight-forward and the JustCo team are super friendly and helpful.<span style="color:#0097b2;">"</span> </p><br>
                       <span style="color:#0097b2;">Mark Garret</span><br>
                       <b style="font-size: 11px;"> DD8</b>
                   </div>
                
                </div>
                
                
                <div style="clear:both"></div>
            
            </div>
        
        </section>
        
        <!-- Testimonial end -->
        
        <!---------- Events start ------------>
        
        <section id="events" class="bg-blur2">
        
            <h2 class="module-title font-alt"><span style="color:white;">What's The Buzz</span></h2>
			    <div class="module-subtitle font-serif">
				    <span style="color:white;">Come join us at our string of exciting events at JustCo!</span>
                </div>
                    
             <div class="events-container">
             
                <!------------ Event 1 START ------------>
				<div class="events-list">
                    <div class="events-icon events-icon-border"><img src="img-events/logo-event-2.jpg" width="100%" ></div>
                    <div class="events-info events-border">
                        <div class="events-title">RELAX, REJUVENATE AND ENERGISE THROUGH YOUR BREATH</div>
                        <div class="events-date">
                        	<strong>
                            	Thursday, 21st January 2016, 6.15pm - 7.15pm 
                        		<br>JustCo, 120 Robinson Road #15-01
                            </strong>
                        </div>
                        <div class="events-btn"><a href="#modal-event-1" class="open-popup-link"><strong>Learn more </strong>&rsaquo;</a></div>
                    </div>
                </div>
                <!------------ Event 1 END ------------>
                <!------------ Event 2 START ------------>
				<div class="events-list">
                    <div class="events-icon events-icon-border"><img src="img-events/logo-event-1.jpg" width="100%" ></div>
                    <div class="events-info events-border">
                        <div class="events-title">LIFEHACK: THE ART OF TIME MANAGEMENT</div>
                        <div class="events-date">
                        	<strong>
                            	Wednesday, 20th January 2016, 6.45pm - 8.45pm 
                        		<br>JustCo, 120 Robinson Road #15-01
                            </strong>
                        </div>
                        <div class="events-btn"><a href="#modal-event-2" class="open-popup-link"><strong>Learn more </strong>&rsaquo;</a></div>
                    </div>
                </div>
                <!------------ Event 2 END ------------>
             
             <div style="clear:both"></div>
             
             </div>
             
             <br>
             <div style="text-align:center;"><a href="events.php" class="section-scroll btn btn-border-w btn-round">Go To Events</a></div>
                
        
        </section>
        
        <!------------ Events end ------------>
        
		
		<!-- Contact start -->

       <section id="contact" class="pattern-grey">
         
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
        
       

        <!---------- Event Popup content START------------>
        
        <!---------- Popup 0 START ------------>
        <div id="modal-event" class="white-popup mfp-hide sans">
            <div class="modal-event-header">
                <div style="position:absolute; bottom:10px;">
                    <div class="custom-page-title">EVENT TITLE</div>
                    <b>28 SEP 2015</b>
                </div>
            </div>
            <div class="modal-event-detail">
                <div class="modal-event-info">We have just moved into JustCo @ Robinson Road. Not only does this office space house a great location and window view, the services rendered are impeccable! The creative, edgy office decor definitely suits LINE and what we stand for as a company as well.<br><br>
                Not only does this office space house a great location and window view, the services rendered are impeccable! The creative, edgy office decor definitely suits LINE and what we stand for as a company as well.
                </div>
                <div class="modal-event-btn"><a href="#about" class="section-scroll btn btn-border-w btn-round blue-btn">MORE INFO</a></div>
                <div style="clear:both"></div>    
            </div>
        </div>
        <!---------- Popup 0 END ------------>
        
        <!---------- Popup 1 START ------------>
        <div id="modal-event-1" class="white-popup mfp-hide sans">
            <div class="modal-event-header" style="
	background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)) repeat scroll 0% 0%, transparent url('img-events/banner-event-2.jpg') no-repeat scroll 50% 50% / 100% auto; background-size:cover;">
                <div style="position:absolute; bottom:10px;">
                    <div class="modal-event-title">RELAX, REJUVENATE AND ENERGISE THROUGH YOUR BREATH</div>
                    <div class="modal-event-date"><b>Thursday, 21st January 2016, 6.15pm - 7.15pm</b> &nbsp;|&nbsp; JustCo, 120 Robinson Road #15-01</div>
                </div>
            </div>
            <div class="modal-event-detail">
                <div class="modal-event-info">
                	A dance between movement and breath, this class will help you relax, rejuvenate, energise your mind and body. The practitioner finds a comfortable position, focuses on breath and listens.<br><br>
                	Perfect for those who have a hard time slowing down and who are often on the go. Join us next Thursday evening at The Exchange @ Level 15!
                </div>
                <div class="modal-event-btn"><a href="http://click.icptrack.com/icp/relay.php?r=&msgid=0&act=11111&c=1422454&destination=http%3A%2F%2Fpeatix.com%2Fevent%2F142409" class="section-scroll btn btn-border-w btn-round blue-btn" target="_blank">RSVP HERE</a></div>
                <div style="clear:both"></div>    
            </div>
        </div>
        <!---------- Popup 1 END ------------>
        
        <!---------- Popup 2 START ------------>
        <div id="modal-event-2" class="white-popup mfp-hide sans">
            <div class="modal-event-header" style="
	background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)) repeat scroll 0% 0%, transparent url('img-events/banner-event-1.jpg') no-repeat scroll 50% 50% / 100% auto; background-size:cover;">
                <div style="position:absolute; bottom:10px;">
                    <div class="modal-event-title">LIFEHACK: THE ART OF TIME MANAGEMENT</div>
                    <div class="modal-event-date"><b>Wednesday, 20th January 2016, 6.45pm - 8.45pm</b> &nbsp;|&nbsp; JustCo, 120 Robinson Road #15-01</div>
                </div>
            </div>
            <div class="modal-event-detail">
                <div class="modal-event-info">
                	This workshop offers practical techniques that you can use immediately to gain control over your day. You'll learn to recognise and minimise time-wasting activities, refocus on important goals, and make decisions that help you achieve effective, efficient results in all areas of your life.
                </div>
                <div class="modal-event-btn"><a href="http://click.icptrack.com/icp/relay.php?r=&msgid=0&act=11111&c=1422454&destination=http%3A%2F%2Fpeatix.com%2Fevent%2F140958" class="section-scroll btn btn-border-w btn-round blue-btn" target="_blank">BUY TICKETS</a></div>
                <div style="clear:both"></div>    
            </div>
        </div>
        <!---------- Popup 2 END ------------>

        <!---------- Event Popup content END ------------>
        
        	

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

<!-- Javascript files -->
	
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
	
	<script src="assets/js/jquery.fitvids.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/contact.js"></script>
	<script src="assets/js/custom.js"></script>


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


</body>
</html>
