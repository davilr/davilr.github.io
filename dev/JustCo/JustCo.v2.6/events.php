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
    
    <!-- Header section start -->
    <section class="module bg-dark bg-dark-60" data-background="img/banner-sub-7.jpg" style="height:480px;">
        <div class="custom-container">

                <div style="position:absolute; bottom:60px;">            
                        <div style="font-size:48px; margin:20px 0 10px 0; font-weight:100;">EVENTS</div>
                       
  
                </div>
            </div>
    </section>
    <!-- Header section end -->
       
	<!-- Featured Event start -->
    <section class="module" style="padding:0;">
    
    	<!-- Featured Event 1 -->
        <a href="#modal-event-2" class="open-popup-link"><div class="events-img" style="
	background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)) repeat scroll 0% 0%, transparent url('img-events/banner-event-2.jpg') no-repeat scroll 50% 50% / auto 100%;">
            <div class="events-img-title">
                <div class="events-img-title-main font-alt">RELAX, REJUVENATE AND ENERGISE THROUGH YOUR BREATH</div>
                <div class="events-img-title-date">21st January 2016</div>
            </div>
        </div></a>
    	<!-- Featured Event 1 End -->
        
    	<!-- Featured Event 2 -->
        <a href="#modal-event-1" class="open-popup-link"><div class="events-img" style="
	background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)) repeat scroll 0% 0%, transparent url('img-events/banner-event-1.jpg') no-repeat scroll 50% 50% / auto 100%">
            <div class="events-img-title">
                <div class="events-img-title-main font-alt">LIFEHACK: THE ART OF TIME MANAGEMENT</div>
                <div class="events-img-title-date">20th January 2016</div>
            </div>
        </div></a>
    	<!-- Featured Event 2 End -->
        
    	<!-- Featured Event 3 -->
        <div class="events-img" style="
	background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)) repeat scroll 0% 0%, transparent url('img-events/banner-event-01.jpg') no-repeat scroll 50% 50% / auto 100%">
            <div class="events-img-title">
                <div class="events-img-title-main font-alt"></div>
                <div class="events-img-title-date"></div>
            </div>
        </div>
    	<!-- Featured Event 3 End -->
        
    </section>
	<!-- Featured Event End -->
    
    <div style="clear:both"></div>
    
        
    
	<!---------- Events start ------------>
    <section class="module" style="padding:60px 0 60px;">
    
        <div style="text-align:center; max-width: 1200px; margin-left: auto; margin-right: auto;">

				<h2 class="module-title font-alt">What's The Buzz</h2>
				<div class="module-subtitle font-serif">
				Here at JustCo, we want to make work, better. We host events that seek to engaged, bond and excite our community members. Don't miss out on any of the fun!
        
				</div>

		</div>
  
        <br>
        
             
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
             <div class="" style="text-align:center; ">Have something to contribute or an exciting event in mind that will liven up the workspace? We are eager to know! </div>
             <br>   
             
             <div style="font-size:24px; margin:20px 0 50px 0; text-align:center; font-weight:700;">PAST EVENTS</div>   
             
             
             <div class="events-container">
             
                <!------------ Event 3 START ------------>
				<div class="events-list">
                    <div class="events-icon events-icon-border"><img src="img-events/logo-event-3.jpg" width="100%" ></div>
                    <div class="events-info events-border">
                        <div class="events-title">JUSTCO CHRISTMAS GATHERING 2015</div>
                        <div class="events-date">
                        	<strong>
                            	Friday, 11th December 2015, 5.00pm - 7.00pm 
                        		<br>JustCo, 120 Robinson Road #15-01
                            </strong>
                        </div>
                        <div class="events-btn"><a href="#modal-event-3" class="open-popup-link"><strong>Learn more </strong>&rsaquo;</a></div>
                    </div>
                </div>
                <!------------ Event 3 END ------------>
                <!------------ Event 4 START ------------>
				<div class="events-list">
                    <div class="events-icon events-icon-border"><img src="img-events/logo-event-4.jpg" width="100%" ></div>
                    <div class="events-info events-border">
                        <div class="events-title">SHOW AND TELL: FLEXM PRODUCT LAUNCH</div>
                        <div class="events-date">
                        	<strong>
                            	Thursday, 10th December 2015, 5.00pm - 6.00pm 
                        		<br>JustCo, 120 Robinson Road #15-01
                            </strong>
                        </div>
                        <div class="events-btn"><a href="#modal-event-4" class="open-popup-link"><strong>Learn more </strong>&rsaquo;</a></div>
                    </div>
                </div>
                <!------------ Event 4 END ------------>
                <!------------ Event 5 START ------------>
                <div class="events-list">
                    <div class="events-icon events-icon-border"><img src="img-events/logo-event-5.jpg" width="100%" ></div>
                    <div class="events-info events-border">
                        <div class="events-title">SHESAYS SINGAPORE, PERSONAL BRANDING EVENT</div>
                        <div class="events-date">
                        	<strong>
                            	November 2015 
                        		<br>JustCo, 120 Robinson Road #15-01
                            </strong>
                        </div>
                        <div class="events-btn"><a href="#modal-event-5" class="open-popup-link"><strong>Learn more </strong>&rsaquo;</a></div>
                    </div>
                </div>
                <!------------ Event 5 END ------------>
                 <!------------ Event 6 START ------------>
                <div class="events-list">
                    <div class="events-icon events-icon-border"><img src="img-events/logo-event-6.jpg" width="100%" ></div>
                    <div class="events-info events-border">
                        <div class="events-title">LUNCH & LEARN WITH THE CHANGE SCHOOL</div>
                        <div class="events-date">
                        	<strong>
                            	November 2015 
                        		<br>JustCo, 120 Robinson Road #15-01
                            </strong>
                        </div>
                        <div class="events-btn"><a href="#modal-event-6" class="open-popup-link"><strong>Learn more </strong>&rsaquo;</a></div>
                    </div>
                </div>
                <!------------ Event 6 END ------------>
             
             
             
                 <div style="clear:both"></div>
             </div>
        
    </section>
	<!------------ Events End ------------>
        
		
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
        
        <!---------- Popup 3 START ------------>
        <div id="modal-event-3" class="white-popup mfp-hide sans">
            <div class="modal-event-header" style="
	background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)) repeat scroll 0% 0%, transparent url('img-events/banner-event-3.jpg') no-repeat scroll 50% 50% / 100% auto; background-size:cover;">
                <div style="position:absolute; bottom:10px;">
                    <div class="modal-event-title">JUSTCO CHRISTMAS GATHERING 2015</div>
                    <div class="modal-event-date"><b>Friday, 11th December 2015, 5.00pm - 7.00pm</b> &nbsp;|&nbsp; JustCo, 120 Robinson Road #15-01</div>
                </div>
            </div>
            <div class="modal-event-detail">
                <div class="modal-event-info">
                	JINGLE & MINGLE......Let's get together for some holiday cheer for Christmas is very near! To celebrate the season of giving, come have fun and play the arcade games and foosball for free! We are also launching our first "Icebreaker Session: Get to Know JustCo Community". Please do join us for JustCo's Holiday Party!
                </div>
                <div class="modal-event-btn"><a href="http://peatix.com/event/132912/view" class="section-scroll btn btn-border-w btn-round blue-btn" target="_blank">RSVP HERE</a></div>
                <div style="clear:both"></div>    
            </div>
        </div>
        <!---------- Popup 3 END ------------>
        
        <!---------- Popup 4 START ------------>
        <div id="modal-event-4" class="white-popup mfp-hide sans">
            <div class="modal-event-header" style="
	background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)) repeat scroll 0% 0%, transparent url('img-events/banner-event-4.jpg') no-repeat scroll 50% 50% / 100% auto; background-size:cover;">
                <div style="position:absolute; bottom:10px;">
                    <div class="modal-event-title">SHOW AND TELL: FLEXM PRODUCT LAUNCH</div>
                    <div class="modal-event-date"><b>Thursday, 10th December 2015, 5.00pm - 6.00pm</b> &nbsp;|&nbsp; JustCo, 120 Robinson Road #15-01</div>
                </div>
            </div>
            <div class="modal-event-detail">
                <div class="modal-event-info">
                	Come join us in the launch of FlexM's latest product- FlexM Consumer FlexM is a FinTech company providing electronic payment solutions to the consumer and corporate market in Singapore. Their solutions are customised for foreign workers and companies with foreign workers on the payroll which consists of an E-wallet and a prepaid Mastercard!<br><br>
                    Visit flexm.sg or Facebook page Flexm Consumer for more info.
                </div>
                <div class="modal-event-btn"><a href="http://peatix.com/event/132910/view" class="section-scroll btn btn-border-w btn-round blue-btn" target="_blank">RSVP HERE</a></div>
                <div style="clear:both"></div>    
            </div>
        </div>
        <!---------- Popup 4 END ------------>
        
        <!---------- Popup 5 START ------------>
        <div id="modal-event-5" class="white-popup mfp-hide sans">
            <div class="modal-event-header" style="
	background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)) repeat scroll 0% 0%, transparent url('img-events/banner-event-5.jpg') no-repeat scroll 50% 50% / 100% auto; background-size:cover;">
                <div style="position:absolute; bottom:10px;">
                    <div class="modal-event-title">SHESAYS SINGAPORE, PERSONAL BRANDING EVENT</div>
                    <div class="modal-event-date"><b>November 2015</b> &nbsp;|&nbsp; JustCo, 120 Robinson Road #15-01</div>
                </div>
            </div>
            <div class="modal-event-detail">
                <div class="modal-event-info">
                	It was our pleasure to have hosted the award-winning organisation, SheSays Singapore, for an inspiring networking and information session. Attendees learned about personal branding and how to evolve their brand through the different phases of their careers. There was also a Q&A session where the panel of extinguished speakers addressed each participant's specific questions on personal branding.
                </div>
               
                <div style="clear:both"></div>    
            </div>
        </div>
        <!---------- Popup 5 END ------------>
        
        <!---------- Popup 6 START ------------>
        <div id="modal-event-6" class="white-popup mfp-hide sans">
            <div class="modal-event-header" style="
	background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)) repeat scroll 0% 0%, transparent url('img-events/banner-event-6.jpg') no-repeat scroll 50% 50% / 100% auto; background-size:cover;">
                <div style="position:absolute; bottom:10px;">
                    <div class="modal-event-title">LUNCH & LEARN WITH THE CHANGE SCHOOL</div>
                    <div class="modal-event-date"><b>November 2015</b> &nbsp;|&nbsp; JustCo, 120 Robinson Road #15-01</div>
                </div>
            </div>
            <div class="modal-event-detail">
                <div class="modal-event-info">
                	We had the pleasure of having the founder of The Change School for a session of Lunch & Learn: Understanding Millennials in the Workforce. The interactive discussion and networking session was very insightful for our participants as they left the session with a better understanding of how to better manage and work with millennials.
                </div>
               
                <div style="clear:both"></div>    
            </div>
        </div>
        <!---------- Popup 6 END ------------>

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
