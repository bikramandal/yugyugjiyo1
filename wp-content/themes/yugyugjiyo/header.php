<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" style="margin:0px!important;">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100italic,100,300,300italic,400italic,700,700italic,900' rel='stylesheet' type='text/css'>
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/font/ProximaNovaAltLight/ProximaNovaAltLight.css" rel="stylesheet" type="text/css">
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/font/HoboStd/HoboStd0.css" rel="stylesheet" type="text/css">

	<!-- <link href="css/style.css" rel="stylesheet" type="text/css" /> -->
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/media_query.css" rel="stylesheet" type="text/css" />

	<!--banner css and js------------------>
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/banner_slider/slideLp.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript">var base_path = window.location</script>

<!--carosel slider css and js---------->
<link type='text/css' rel='stylesheet' href='<?php echo esc_url( get_template_directory_uri() ); ?>/carosel_slider/css/liquidcarousel.css' />
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/carosel_slider/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/carosel_slider/js/jquery.liquidcarousel.pack.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/carosel_slider/js/liqiud.js"></script>

<!----Right side nav js---------------->
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/rightSideNav/sideNav.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/rightSideNav/sideNav.js"></script>
 
<!----Popup box css & js--------------->
<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/fancy_box/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/fancy_box/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fancy_box/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fancy_box/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/fancy_box/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/fancy_box/jquery.fancybox-media.js?v=1.0.6"></script>
    
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/fancy_box/fancyBox.js"></script>


<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/fancy_box/jiyoFancyBox.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fancy_box/jiyoPopup.css" />
<!-- scripts for top banner-->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/banner_slider/slideLp.js" type="text/javascript"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/banner_slider/highlight.js" type="text/javascript"></script>
<!--search dropdown jquery (edit this js after add Ajax code)------>
<script>
$(function()
{
	
	$("#searchLocLabel").click(function(){
		$("#searchLocActive").css("display", "block");
	});
	
	$("#searchCatLabel").click(function(){
		$("#searchCatActive").css("display", "block");
	});	
	
});	

</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 
<!--side menu -->
<div class="mobilesidemenu">
	<input type="checkbox" id="togglebox" />
	<!-- Modify anything inside the NAV element -->
	<nav id="msidemenu">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Hospitalization</a></li>
			<li><a href="#">Tour for Treatment</a></li>
			<li><a href="#">Pinkbook</a></li>
			<li><a href="#">Jiyodonor</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Blog</a></li>
		</ul>
		
		<ul class="secondNav">
			<li><a href="#">GIve us your feedback</a></li>
			<li><a href="#">Testimonial</a></li>
			<li><a href="#">Terms</a></li>
			<li><a href="#">Policy</a></li>
		</ul>
		<ul class="thirdNav">
			<li><a href="#">List Hospital</a></li>
			<li><a href="#">Become Health Bro</a></li>
		</ul>
		
		<div class="sideNavContact">
			<p>Need Help? Contact us at</p>
			<span class="sideNavPhone">(0) 9735 261969</span>
			<span class="sideNavMail">care@yugyugjiyo.com</span>
		</div>
		
		<div class="sideNavFollow">
			<p>Follow us on</p>
			<ul>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
			</ul>
		</div>	
		<label for="togglebox" id="navtoggler"></label>
	</nav>
	
	<div class="overlay"><label for="togglebox"></label></div>
<!--	<label class="toggler" id="maintoggler" for="togglebox"></label>
--></div>

	<header>
    	<div class="topBar">
        	<div class="wrapper">
                 <div class="topLeft">
				 	<a href="#"><p><span>shocker offer</span> get flat 10% off on any surgery at any hospital</p></a>
				 </div>   
				<div class="topRight">
					<ul>
						<li class="dwnApp"><a href="#">Download app</a></li>
						<li>24/7 Support  (0) 9735261969</li>
						<li><a href="">Pinkbook</a></li>
						<li><a href="">Track request</a></li>
						<li>
							<form action="" method="get">
							  <div class="select-style">
								  <select>
									<option value="English">English</option>
									<option value="Dutch">Dutch</option>
									<option value="Dutch">Dutch</option>
								  </select>
								</div>
							</form>
						</li>
					</ul>
				</div>	
            </div>
        </div><!--topBar end-->
		
		<div class="headMenu">
			<div class="wrapper">
				<div class="topHead">
					<div class="logo"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="Yog Yog Jiyo" /></a></div>
					<div class="topMenu">
						<ul>
							<li class="hospt"><a href="#">Hospitalization</a></li>
							<li class="notify"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/notific.png" alt="Notification" /></a></li>
							<li class="loginNav"><a class="fancybox" data-fancybox-group="button" href="#inline1">Login/Sign Up</a></li>
							<div id="inline1" class="jiyoPopupBox">
                            	 <div class="loginPopup">
         <div class="popupCnt">
            	<div class="loginPopupLeft"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/fancy_box/popupImg.jpg" alt="YugYugJiyo" /></div>
                
                <div id="firstLoginBox">
                   	<div class="popupSocial">
						<a href=""><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/fancy_box/googleBt.jpg" alt="YugYugJiyo Google" /></a>
						<a href=""><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/fancy_box/facebookBt.jpg" alt="YugYugJiyo Facebook" /></a>
					</div>
					<p>Or use your email / mobile number</p>
                        <a id="popLoginBt">Login</a>
                        <a id="popSignUpBt">Sign up</a>
                  
                </div>
                
                <div id="loginBox">
                    <div id="backBt" class="topBackLink"><a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/fancy_box/arr3.png" /></a>Login With Email & Mobile No.</div>
                    <div class="popupInput">
						<form action="" method="get">
							<input placeholder="Email or Mobile no" name="" type="text" />
							<input placeholder="Password" name="" type="text" />							
							<input value="Login" name="" type="submit" />
						</form>
					</div>
					<p><a id="goforgotPswbox">Forgot Password</a></p>					
                    <div class="popupBottomLink">New to YugYugJiyo? <a id="goSignupbox"> Sign Up</a></div>
                </div>
                
                <div id="signupBox">
                    <div id="backBt1" class="topBackLink"><a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/fancy_box/arr3.png" /></a>Sign Up With Email & Mobile No.</div>
					<div class="popupInput">
						<form action="" method="get">
							<input placeholder="Name" name="" type="text" />
							<input placeholder="Email" name="" type="text" />
							<input placeholder="Mobile No." name="" type="text" />
							<input placeholder="Password" name="" type="text" />
							<input value="Sign Up" name="" type="submit" />
						</form>
					</div>
						
                    <div class="condition">By clicking Sign Up, you agree to YugYugJiyo's <a href="#"> Terms of Use</a> and <a href="#"> Privecy Policy.</a></div>
                    <div class="popupBottomLink">Already have a YugYugJiyo account? <a id="goLoginbox"> Login</a></div>
                    
                </div>
            
            	<div id="forgotPswBox">
                    <div id="backLoginbox" class="topBackLink"><a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/fancy_box/arr3.png" /></a>Reset Password</div>
					<h6>Enter the email address associated with your account, and we'll email you a link to reset your password. </h6>
					<div class="popupInput">
						<form action="" method="get">
							<input placeholder="Email" name="" type="text" />
							<input value="Send Reset" name="" type="submit" />
						</form>
					</div>
                </div>
            
         </div>   
    </div>
								 
                            </div>
							<li class="mainMenu"><label for="togglebox">Menu</label></li>
						</ul>
					</div>
				</div>
			</div>
		</div><!--headMenu end-->
		
		<div class="topCaptionbox">
			<div class="wrapper">
				<div class="topCaption">
					<h1><span>Welcome to the Next Generation Health caring Portal. So</span>Click Here, TaKe Care</h1>
				</div>
			</div>
		</div><!--topCaptionbox end-->	
		
		<div class="bannerArea">
			<div class="wrapper">
				<div class="searchArea">
					<div class="searchCntArea">
						<h2>Explore best hospitals for treatment in Kolkata</h2>
						<div class="searchCnt">
							<form action="" method="get">
								<div id="searchLocLabel" class="dispLocBox"><p>Kolkata</p><a href="#">Change Location</a></div>
								<!--hidden search category list-->
								<div id="searchLocActive" class="locSearch">
									<input placeholder="Please type a location" name="" type="text">
									<ul>
										<li class="tips">tips : search by city name, location or landmark</li>
										<li><a href="#">All of Kolkata</a></li>
										<li class="curentLoc"><a href="#">Detect current location</a></li>
									</ul>
									<p>Popular Locations</p>
									<ul>
										<li><a href="#">Salt Lake, Kolkata</a></li>
										<li><a href="#">Dum Dum, Kolkata</a></li>
										<li><a href="#">Ballygunge, Kolkata</a></li>
									</ul>
								</div>
								
								<div id="searchCatLabel" class="dispCateBox">hospital, speciality or treatment...</div>
								<!--hidden search category list-->
								<div id="searchCatActive" class="cateList">
									<input placeholder="hospital, speciality or treatment..." name="" type="text">
									<p>Suggested Seraches</p>
									<ul>
										<li><a href="#">Neurological</a></li>
										<li><a href="#">Kidney Transplant</a></li>
										<li><a href="#">Bone & Joint</a></li>
									</ul>
								</div>
								
								<input value="Search" name="" type="submit">
							</form>
						</div> 
						<p><a href="#">Recently Viewed</a></p>
					</div>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/search_bn.jpg" alt="" />
				</div><!--searchArea end-->
				<div class="bannerTop">
					<section id="highlight">
						   <section class="wrapHighlight">
							  <ul class="listCont">
								<li>
								  <div class="cont">
									<a href="#" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner1.jpg" alt="COMMING SOON" /></a>								  </div>
								</li>
								<!-- block -->
								<li>
								  <div class="cont">
									<a href="#" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner1.jpg" alt="COMMING SOON" /></a>								  </div>
								</li>
								<!-- block -->
								<li>
								  <div class="cont">
									<a href="#" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner1.jpg" alt="COMMING SOON" /></a>								  </div>
								</li>
								<!-- block -->
								<li>
								  <div class="cont">
									<a href="#" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner1.jpg" alt="COMMING SOON" /></a>								  </div>
								</li>
								<!-- block -->
								<li>
								  <div class="cont">
									<a href="#" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner1.jpg" alt="COMMING SOON" /></a>								  </div>
								</li>
								<!-- block -->
							  </ul>
							</section><!-- wrapHighlight -->
    </section><!-- banner section -->
				</div>
				
			</div>
		</div><!--bannerArea end-->
		
    </header>
    
    <div class="content">
