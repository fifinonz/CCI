<!--/**-->
<!--*-->
<!--* Author: Muthoni Nguthi-->
<!--* 		  flyra67@gmail.com-->
<!--*         @fifinonz-->
<!--*-->
<!--*-->
<!--* Location: http://github.com/RFL_KE/webapp/-->
<!--*-->
<!--*-->
<!--*-->
<!--*/-->

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Relay For Life - Kenya Cancer Association</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,900,700,500italic,500,400italic,300italic,300,100italic,100|Open+Sans:400,300,400italic,300italic,600,600italic,700italic,700,800|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700' rel='stylesheet' type='text/css'>


<!-- Styles -->
    <link rel="icon" type="image" href="<?php echo base_url();?>assets/images/logo.png" />
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/layerslider/css/layerslider.css" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/purple.css"  />
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/ie.css" />
<script type="text/javascript" language="javascript" src="js/html5shiv.js"></script>
<![endif]-->


<!-- Scripts -->
<script src="http://images.webinane.com/jquery.1.9.1.js" type="text/javascript"></script>
<script src='<?php echo base_url();?>assets/js/testimonials.js'></script>
<script src='<?php echo base_url();?>assets/js/styleswitcher.js'></script>
<script src="<?php echo base_url(); ?>assets/js/cart.js" type="text/javascript" ></script>
<script src='<?php echo base_url();?>assets/js/script.js'></script>
<script src='http://images.webinane.com/bootstrap.js'></script>
<script src="<?php echo base_url();?>assets/js/html5lightbox.js"></script>
<script src="http://images.webinane.com/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
<script defer src="http://images.webinane.com/jquery.flexslider.js"></script>
<script defer src="<?php echo base_url();?>assets/js/jquery.mousewheel.js"></script>

			
<!-- Scripts For Layer Slider  -->
<script src="<?php echo base_url();?>assets/layerslider/js/greensock.js" type="text/javascript"></script>
<!-- LayerSlider script files -->
<script src="<?php echo base_url();?>assets/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>


<!-- Scripts for Pop-up form -->
    <script type="text/javascript"
            src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js"
            data-dojo-config="usePlainJson: true, isDebug: false">
    </script>
    <script type="text/javascript">
        require(["mojo/signup-forms/Loader"],
            function(L) { L.start({"baseUrl":"mc.us11.list-manage.com","uuid":"2f7e5fba8add20ab340278136","lid":"e3ce9d8083"}) })
    </script>

<script>
$(document).ready(function(){
jQuery("#layerslider,#layerslider2,#layerslider3").layerSlider({
	responsive: true,
	responsiveUnder: 1280,
	layersContainer: 1170,
	skin: 'fullwidth',
	hoverPrevNext: true,
	skinsPath: 'layerslider/skins/'
});
});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#post-carousel').carouFredSel({
		auto: false,
		prev: '#prev5',
		next: '#next5',
		items: {
			visible: 1,
		},
	});

	});		
	
</script>	
<script>
$(window).load(function(){
  $('.shop').flexslider({
	animation: "slide",
	animationLoop: false,
	controlNav: false,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,	
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});

	$('.posts-carousel').flexslider({
	animation: "slide",
	animationLoop: false,
	controlNav: false,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,	
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
	
  $('.footer_carousel').flexslider({
	animation: "slide",
	animationLoop: false,
	slideShow:false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:false,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});

});
</script>
    <!-- #region Jssor Slider Begin -->

    <!-- Jssor Slider is free under MIT license. -->
    <!-- Development Reference http://www.jssor.com/development. -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for release -->
    <script>
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
                $AutoPlay: true,
                $Idle: 0,
                $AutoPlaySteps: 4,
                $SlideDuration: 1600,
                $SlideEasing: $Jease$.$Linear,
                $PauseOnHover: 4,
                $SlideWidth: 140,
                $Cols: 7
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 809);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
</head>
<body class="bg-body3">
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<script>(function(d,t){
        var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src="//x.instagramfollowbutton.com/follow.js";s.parentNode.insertBefore(g,s);}(document,"script"));
</script>
<div class="theme-layout boxed">

<div id="top-bar">
    <div class="container">
        <ul>
			<li>
				<i class="icon-home"></i>
				KENCASA Offices, KNH Nairobi.
			</li>
			<li>
				<i class="icon-phone"></i>
				(+254) 717-666-044
			</li>
			<li>
				<i class="icon-envelope"></i>
				info@relayforlifekenya.org
			</li>
		</ul>
            <div class="registration-box">
<!--                <a class="header-btn arrow" href="--><?php //echo base_url();?><!--site/relay/donate" title="">Donate <span class="arrow"></span></a>-->
<!--<!--                --><?php //// if(isset($this->session->userdata['logged_in'])){
////                    echo anchor('auth/logout', 'Log Out', 'class="header-btn"');
////
////
////                }else{
//                    echo anchor('auth/login', 'Log In', 'class="header-btn"');
//
//                ?>

        <div class="header-social">

            <div class="fb-share-button" data-href="https://www.facebook.com/Relay4LifeKenya" data-layout="button_count"></div>
            <div class="fb-like" data-href="https://www.facebook.com/Relay4LifeKenya" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false" >
            </div>
            <div>
            <a class="twitter-follow-button" href="https://twitter.com/Relay4LifeKE">
                Follow @Relay4LifeKE</a></div><br/>
            <div>
            <span class="ig-follow" data-id="5f3de635fe" data-handle="relayforlifekenya" data-count="true" data-size="large" data-username="true"></span>
            </div>

        </div>
            </div>
    </div>
    </div>

<header class="header2 sticky">
	<div class="container">
		<div class="logo">
            <br/><br/>
			<img src="<?php echo base_url();?>assets/images/logo.png"alt="">

            <h1>Relay For Life Kenya</h1>
		</div><!-- Logo -->

        <nav class="menu">
			<ul id="menu-navigation">
				<li class="active"><a href="<?php echo base_url();?>site/relay/home">Home</a></li>

                <li><a href="<?php echo base_url();?>site/relay/what_is_relay" title="">What Is Relay For Life?</a></li>

                <li><a href="<?php echo base_url();?>site/relay/sign_up">Sign Up For Relay 2015</a>
                </li>
<!--				<li><a>Products</a>-->
<!--					<ul>-->
<!--						<li><a href="--><?php //echo base_url();?><!--relay/buy_product">Shop for Products</a>-->
<!--							</li>-->
<!--						<li><a href="--><?php //echo base_url();?><!--relay/view_cart">View My Cart</a>-->
<!--							</li>-->
<!---->
<!--						<li><a href="--><?php //echo base_url();?><!--relay/checkout">Checkout</a>-->
<!--						</li>-->
<!---->
<!--					</ul>-->
<!--				</li>-->

<!--				<li><a>Gallery</a>-->
<!--					<ul>-->
<!--						<li><a href="--><?php //echo base_url();?><!--relay/gallery_image">Image Gallery</a>-->
<!---->
<!--						-->
<!--<!--						<li><a href="#">Video Gallery</a>-->
<!--							-->
<!--						</li>-->
<!--						</ul><!-- Drop Down -->
<!--				</li>-->
				<li><a href="#">Resource Center</a>
                    <ul class="mega-menu2">
                        <li><a style="color: #800080"><strong>Common Cancers</strong></a></li>
                        <li><a style="color: #800080">
                                <strong>Common Cancers</strong></a></li>
                        <li><a style="color: #800080">
                                <strong>Cancers in General</strong></a></li>
                        <li>
                            <a href="<?php echo base_url();?>assets/docs/breast_cancer.pdf" title="">Breast Cancer</a>
                        </li>
                        <li><a href="<?php echo base_url();?>assets/docs/lung_cancer.pdf" title="">Lung Cancer</a></li>
                        <li><a href="<?php echo base_url();?>assets/docs/esophageal_cancer.pdf" title="">Esophageal Cancer</a></li>
                        <li><a href="<?php echo base_url();?>assets/docs/cervical_cancer.pdf" title="">Cervical Cancer</a></li>
                        <li><a href="<?php echo base_url();?>assets/docs/retinoblastoma.pdf" title="">Retinoblastoma</a></li>
                        <li><a href="<?php echo base_url();?>assets/docs/nutrition.pdf" title="">Nutrition Tips</a></li>
                        <li><a href="<?php echo base_url();?>assets/docs/Leukemia.pdf" title="">Leukemia</a></li>
                        <li><a href="<?php echo base_url();?>assets/docs/general_lymphoma.pdf" title="">General Lymphomas</a></li>
                        <li><a href="http://www.yackenya.org/cancer-statistics/" title="">Cancer Statistics</a></li>
                        <li><a href="<?php echo base_url();?>assets/docs/colorectal_cancer.pdf" title="">Colerectal Cancer</a></li>
                        <li><a href="<?php echo base_url();?>assets/docs/non_hodgkins_lymphoma.pdf" title="">Non Hodgkins Lymphoma</a></li>

                        <!--                        <li><a href="#" title="">Sun/UV</a></li>-->
                    </ul><!-- Drop Down -->
                </li>
					

				<li><a href="<?php echo base_url();?>site/relay/faqs">FAQs</a></li>
				<li><a href="<?php echo base_url();?>site/relay/contact_us">Contact Us</a></li>


            </ul>



		</nav><!-- Menu -->

	</div>
</header>
    <div class="responsive-header">
        <div class="responsive-logo">
            <a href="#" title=""><img style="width: 40px;" src="<?php echo base_url();?>assets/images/logo.png" alt="Logo" /><h1>Relay For Life Kenya</h1></a>
        </div>
        <span><i class="icon-align-justify"></i></span>
        <ul>
            <li class="active"><a href="<?php echo base_url();?>site/relay/home">Home</a></li>

            <li><a href="<?php echo base_url();?>site/relay/what_is_relay" title="">What Is Relay For Life?</a></li>

            <li><a href="<?php echo base_url();?>site/relay/sign_up">Sign Up For Relay 2015</a>
            </li>

            <!--				<li><a>Products</a>-->
            <!--					<ul>-->
            <!--						<li><a href="--><?php //echo base_url();?><!--relay/buy_product">Shop for Products</a>-->
            <!--							</li>-->
            <!--						<li><a href="--><?php //echo base_url();?><!--relay/view_cart">View My Cart</a>-->
            <!--							</li>-->
            <!---->
            <!--						<li><a href="--><?php //echo base_url();?><!--relay/checkout">Checkout</a>-->
            <!--						</li>-->
            <!---->
            <!--					</ul>-->
            <!--				</li>-->

            <!--				<li><a>Gallery</a>-->
            <!--					<ul>-->
            <!--						<li><a href="--><?php //echo base_url();?><!--relay/gallery_image">Image Gallery</a>-->
            <!---->
            <!--						-->
            <!--<!--						<li><a href="#">Video Gallery</a>-->
            <!--							-->
            <!--						</li>-->
            <!--						</ul><!-- Drop Down -->
            <!--				</li>-->
            <li><a href="#">Resource Center</a>
                <ul class="mega-menu2">

                    <li><a href="<?php echo base_url();?>assets/docs/breast_cancer.pdf" title="">Breast Cancer</a></li>
                    <li><a href="<?php echo base_url();?>assets/docs/cervical_cancer.pdf" title="">Cervical Cancer</a></li>
                    <li><a href="<?php echo base_url();?>assets/docs/colorectal_cancer.pdf" title="">Colerectal Cancer</a></li>
                    <li><a href="<?php echo base_url();?>assets/docs/esophageal_cancer.pdf" title="">Esophageal Cancer</a></li>
                    <li><a href="<?php echo base_url();?>assets/docs/Leukemia.pdf" title="">Leukemia</a></li>
                    <li><a href="<?php echo base_url();?>assets/docs/lung_cancer.pdf" title="">Lung Cancer</a></li>
                    <li><a href="<?php echo base_url();?>assets/docs/general_lymphoma.pdf" title="">General Lymphomas</a></li>
                    <li><a href="<?php echo base_url();?>assets/docs/non_hodgkins_lymphoma.pdf" title="">Non Hodgkins Lymphoma</a></li>
                    <li><a href="<?php echo base_url();?>assets/docs/retinoblastoma.pdf" title="">Retinoblastoma</a></li>
                    <!--                        <li><a href="#" title="">Diet</a></li>-->
                    <li><a href="<?php echo base_url();?>assets/docs/nutrition.pdf" title="">Nutrition Tips</a></li>
                    <!--                        <li><a href="#" title="">Sun/UV</a></li>-->
                </ul><!-- Drop Down -->
            </li>

            </li>
            <li><a href="<?php echo base_url();?>site/relay/faqs">FAQs</a></li>
            <li><a href="<?php echo base_url();?>site/relay/contact_us">Contact Us</a></li>


        </ul>
    </div><!--Responsive header-->
