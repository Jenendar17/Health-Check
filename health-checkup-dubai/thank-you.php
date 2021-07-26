<?php

require_once 'class/emailClass.php';

$emailClass = new EmailClass();
//var_dump($_REQUEST['mobile']);
//die();
if (isset($_REQUEST['mobile'])) {

  $mailsent = $emailClass->callback();
    // setcookie('formfilled','yes');
}
else{
  $mailsent = false;
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WRDM7MV');</script>
<!-- End Google Tag Manager -->
<meta name="robots" content="noindex">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="title" content="First Response Healthcare">

<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<title>First Response Healthcare</title>
<link href="images/favicon.png" rel="icon" sizes="32x32"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="intl-tel-input/css/intlTelInput.css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.css"/>
<link href="css/style-30.css" rel="stylesheet" type="text/css"/>

<!--slider-->

<link rel="stylesheet" href="js/assets/owl.carousel.min.css">
<link rel="stylesheet" href="js/assets/owl.theme.default.min.css">

<script src="js/jquery-1.11.1.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.bxslider.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- <script src="media/jui/js/jquery.minbb68.js?6d335272cfe947fe63a1dc6d722f2ca8" type="text/javascript"></script>
<script src="media/jui/js/jquery-noconflictbb68.js?6d335272cfe947fe63a1dc6d722f2ca8" type="text/javascript"></script>
<script src="media/jui/js/jquery-migrate.minbb68.js?6d335272cfe947fe63a1dc6d722f2ca8" type="text/javascript"></script>
<script src="media/com_solidres/assets/js/noconflict.js" type="text/javascript"></script>
<script src="media/com_solidres/assets/js/jquery/ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="media/com_solidres/assets/js/site.min.js" type="text/javascript"></script>
<script src="media/com_solidres/assets/js/common.min.js" type="text/javascript"></script>
<script src="media/com_solidres/assets/js/jquery/external/jquery.cookie.js" type="text/javascript"></script>
<script src="media/com_solidres/assets/js/validate/jquery.validate.min.js" type="text/javascript"></script>
<script src="media/system/js/corebb68.js?6d335272cfe947fe63a1dc6d722f2ca8" type="text/javascript"></script>
<script src="components/com_sppagebuilder/assets/js/parallax.min.js" type="text/javascript"></script>
<script src="components/com_sppagebuilder/assets/js/sppagebuilder.js" type="text/javascript"></script>
<script src="templates/shaper_resort/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="media/system/js/mootools-corebb68.js?6d335272cfe947fe63a1dc6d722f2ca8" type="text/javascript"></script>
<script src="media/com_solidres/assets/js/datePicker/localization/jquery.ui.datepicker-en-GB.js" type="text/javascript"></script>
<script src="components/com_sppagebuilder/assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="templates/shaper_resort/js/matchheight.js" type="text/javascript"></script> -->
<script src="http://maps.googleapis.com/maps/api/js?key=" type="text/javascript"></script>
<!-- <script src="templates/shaper_resort/js/gmap.js" type="text/javascript"></script>
<script src="templates/shaper_resort/js/bootstrap.min.js" type="text/javascript"></script>
<script src="templates/shaper_resort/js/jquery.sticky.js" type="text/javascript"></script>
<script src="templates/shaper_resort/js/smoothscroll.js" type="text/javascript"></script>
<script src="templates/shaper_resort/js/main.js" type="text/javascript"></script>
<script src="templates/shaper_resort/js/frontend-edit.js" type="text/javascript"></script> -->

<meta content="Thank You" property="og:title"/>
<meta content="website" property="og:type"/>
<meta content="http://" property="og:url"/>

<style>
  a.openaccount {
    background: #282832;
    padding: 0px 12px 4px!important;
    border: 2px solid #282832 !important;
    transition: ease all 0.5s;
    outline: none;
    font-family: TradeGothicLT;
    color: #fff;
    z-index: 99999;
    text-align: center;
    border-radius: 4px;
    display: inline-block;
    margin-top: 10PX;
  }
  header {
    position: inherit !important;
    box-shadow: 0 8px 48px 0 rgba(0, 0, 0, 0.08);
  }
</style>
</head>

<body class="site com-sppagebuilder view-page no-layout no-task itemid-550 en-gb ltr  sticky-header layout-fluid">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRDM7MV"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="maih-head">
     <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a href="index.php"><img src="images/logo.png" alt="mindset Logo" class="logo"></a>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-2 btn-left top-bar" style="direction: ltr;">
         <a href="tel:0 50 50 50 387" target="_blank"><div class="top-bar-inner"><div class="top-bar-innermost"><i class="fa fa-phone"></i> 050 50 50 387</div></div></a>
				 <!-- <button id="desktop" type="submit" class="request-brouchuer" data-toggle="modal" data-target="#iaminterested"><i class="fa fa-phone"></i> </i>050 50 50 387
       </button> -->
     </div>
     <!--<img class="hbx-logo" src="images/hbx.png" alt="hbx logo">-->
                    <!-- <button class="start btn btn-sm btn-default ">Start Application</button>
                    <button class="request btn btn-sm btn-default ">Request Info</button> -->
                    <div class="col-md-3 btn-right top-bar">
                     <div id="google_translate_element"></div>
                   </div>
                 </div>
               </div>
             </header>

             <section id="sp-main-body">

              <div id="sp-component" class="col-sm-12 col-md-12">
                <div class="sppb-row-container">


                  <section>
                    <div>
                      <div class="wrap" style="margin:10% auto;padding:15px;height:auto !important;">




                        <h3 class="oops-subtitle" style="text-align: center; font-family: TradeGothicLT; font-size: 19px;
                        font-weight: 400; color: #930c28; line-height: 29px;">
                        Thank You For Your Information !
                        <br/>We Will Get Back To You At The Earliest !
                        <br>
                      </h3>
                      <p><center>
                        <a href="index.php" class="top-bar-innermost back-button"><span style="padding: 10px 20px;"><strong><i aria-hidden="true" class="fa fa-long-arrow-left marR10"></i> Go Back
                        </strong></span></a>
                        <?php 

                                //$the_channel = $_COOKIE['cstm_ppc_channel'];

                        ?>

                        <?php if($the_channel === 'Facebook'){ ?>

                                <!-- <a href="https://login.myhbx.org/login?service=https://admin3.myhbx.org/sso&ReferralSource=MSet&CampCode=S005&utm_source=mindset&utm_medium=reseller&utm_campaign=india
                                "  target="_blank" class="openaccount"><span><strong>CLICK HERE</strong></span></a> -->


                                <?php } ?>

                                <?php if($the_channel === 'GoogleSearch' || $the_channel ===  null){ ?>

                                <!-- <a href="https://login.myhbx.org/login?service=https://admin3.myhbx.org/sso&ReferralSource=MSet&CampCode=S006&utm_source=mindset&utm_medium=reseller&utm_campaign=india
                                " target="_blank" class="openaccount"><span><strong>CLICK HERE</strong></span></a> -->


                                <?php } ?>

                                <?php if($the_channel === 'StrategicGraduates'){ ?>

                                <!-- <a href="https://login.myhbx.org/login?service=https://admin3.myhbx.org/sso&ReferralSource=MSet&CampCode=S001&utm_source=mindset&utm_medium=reseller&utm_campaign=india
                                "  target="_blank" class="openaccount"><span><strong>CLICK HERE</strong></span></a> -->


                                <?php } ?>

                                <?php if($the_channel === 'HBXLeads'){ ?>

                                <!-- <a href="https://login.myhbx.org/login?service=https://admin3.myhbx.org/sso&ReferralSource=MSet&CampCode=HBXLeads&utm_source=mindset&utm_medium=reseller&utm_campaign=india
                                "  target="_blank" class="openaccount"><span><strong>CLICK HERE</strong></span></a> -->


                                <?php } ?> 

                                <?php if($the_channel === 'Naukri'){ ?>

                                <!-- <a href="https://login.myhbx.org/login?service=https://admin3.myhbx.org/sso&ReferralSource=MSet&CampCode=S004&utm_source=mindset&utm_medium=reseller&utm_campaign=india
                                "  target="_blank" class="openaccount"><span><strong>CLICK HERE</strong></span></a> -->


                                <?php } ?> 
                              </center></p>                            


                            </div>
                          </div>
                        </section>


                      </div>
                    </div>

                  </section>

                  <footer style="width: 100%; float: left;">
                    <div class="container">
                     <div class="row">

                      <div class="disclaimer-main">
                       <p><i class="fa fa-map-marker footer-icon" aria-hidden="true"></i> P.O. Box 117341
                        <a href="mailto:info@firstresponse.ae" target="_blank"> <i class="fa fa-envelope footer-icon" aria-hidden="true"></i> info@firstresponse.ae </a> <a href="tel:0 50 50 50 387" target="_blank"><i class="fa fa-phone footer-icon" aria-hidden="true"></i> 0 50 50 50 387</a></p>
                        <p style="font-weight: 700;">Copyright © 2019 First Response Healthcare
                         <br>
                         All rights reserved. Ministry of Health License No: PE14910-21/09/2019
                       </p>
                     </div>

								<!-- <div class="col-md-12 col-sm-12">
									<div class="row">
										<div class="disclaimer-inner">
											<p>Copyright &copy; 2018 Mindset Global | <a href="" data-toggle="modal" id="1" data-target="#aboutusModal">About us</a> | <a href="" data-toggle="modal" id="1" data-target="#privacyModal">Privacy Policy</a></p>
										</div></div>
									</div> -->
							<!-- <div class="col-md-12 col-sm-12">
								<div class="row">
									<div class="disclaimer-inner">
								<p>Admission Assitance Service in India for Mindset Global are Managed By: <img
										src="images/Strategic Alliances Logo.png" alt=""><img src="" alt=""></p>
									<p>In collaboration with</p><center><img style="margin-left: 7px" 
										src="images/Strategic Alliances Logo.png" alt=""><img style="margin-left: 7px" src="images/mindset-sm-loog.png" alt=""></center>
								</div></div>
							</div> -->
							<!-- <div class="col-md-12 col-sm-12">
								<div class="row">
									<div class="disclaimer-inner">
										<p>Admission Assitance Service in India for Mindset Global are Managed By: <img style="margin-left: 7px" 
											src="images/Strategic Alliances Logo.png" alt=""></p>
										</div></div>
									</div> -->
								</div>
							</div>
            </footer>


            <script type="text/javascript">

var duplicate_google_translate_counter = 0;//this stops google adding button multiple times

function googleTranslateElementInit() {
 if (duplicate_google_translate_counter == 0) {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
duplicate_google_translate_counter++;
}

</script>
<script type="text/javascript" src="lightbox/light-box.js"></script>
<script src="intl-tel-input/js/intlTelInput.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/mobilevalidate-4.js"></script>
<script src="js/vai.js"></script>
<script src="js/cookie.js"></script>
<script src="js/popout.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>


</html>