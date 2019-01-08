<?php
    $mac=$_POST['mac'];
    $ip=$_POST['ip'];
    $username=$_POST['username'];
    $linklogin=$_POST['link-login'];
    $linkorig=$_POST['link-orig'];
    $error=$_POST['error'];
    $trial=$_POST['trial'];
    $loginby=$_POST['login-by'];
    $chapid=$_POST['chap-id'];
    $chapchallenge=$_POST['chap-challenge'];
    $linkloginonly=$_POST['link-login-only'];
    $linkorigesc=$_POST['link-orig-esc'];
    $macesc=$_POST['mac-esc'];
    $identity=$_POST['identity'];
    $bytesinnice=$_POST['bytes-in-nice'];
    $bytesoutnice=$_POST['bytes-out-nice'];
    $sessiontimeleft=$_POST['session-time-left'];
    $uptime=$_POST['uptime'];
    $refreshtimeout=$_POST['refresh-timeout'];
    $linkstatus=$_POST['link-status'];
    $location = '1';
    $mobile = '00963933074900';
    if($_POST['location-id']) {
      $location=$_POST['location-id'];
    }
    if($_POST['username']) {
      $mobile = $_POST['username'];
    }


?>



<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
	<title>Login V9</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main12.css?v=1.9.2">
<!--===============================================================================================-->
</head>

<body>



<div class="container-gr">
<div class="full-screen-ads">
  <a id="ads-link" target="_blank" href="">
  <img class="hidden" id="ads-image" src="" />
  <div class="hidden" id="ads-video">
  </div>
</a>
</div>
</div>
<div id="loader" class="loader">
  <div class="loader-text">
    جاري التحقق
  </div>
  <div class="loader-image">
    <svg width="65px"  height="65px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-rolling" style="background: none;"><circle cx="50" cy="50" fill="none" ng-attr-stroke="{{config.color}}" ng-attr-stroke-width="{{config.width}}" ng-attr-r="{{config.radius}}" ng-attr-stroke-dasharray="{{config.dasharray}}" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(282 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></circle></svg>
  </div>
</div>
<div id="link-btn-div" class="pulse-btn hidden">
  <div class="pulse-btn-bg"></div>
   <div class="pulse-btn-btn"><a id="link-btn" href="" target="_blank"><i class="fa fa-chevron-down" aria-hidden="true"></i></a></button>
</div>
</div>

<div id="welcome-text" class="welcome-text">
مرحبا بك في  <a href="http://techpeak.sy">Techpeak.sy</a> <br>  المشروع الرائد بخدمات Wifi
</div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main12.js?v=1.9.2"></script>
  <script>
  $( document ).ready(function() {
    var  firstClick  = true;
    var is_mobile = false;
    if( $('#mobile-check').css('display')=='none') {
       is_mobile = true;
   }
    $('a').click( function(e) {
     if($(this).attr('id')=="ads-link" || $(this).attr('id')=="link-btn") {
  <?php if(($mobile!='') && ($location!='') ): ?>

       if(firstClick) {
         clickInfo = '{"ad_id":"'+adId+'","mobile":"'+<?php echo json_encode($mobile); ?>+'","location_id":"'+<?php echo json_encode($location); ?>+'","campaign_id":"'+campaignId+'"}';
         $.ajax({
             type: "POST",
             url: "https://techpeak-net.com/api/clicks",
             cache: false,
             data:JSON.parse(clickInfo),
             statusCode: {
               200: function (response) {
              }
            },
             success: function(html) {
               firstClick = false;
             },
             error: function(XMLHttpRequest, textStatus, errorThrown) {
             },
             beforeSend: function() {
             },
             complete: function() {
             }
         });
       }
       <?php endif; ?>
      } else {
        e.preventDefault();
        return false;
      }
    });
     var adsLocId = <?php echo json_encode($location)?>;
     var adsMobile = <?php echo json_encode($mobile)?>;
      if((adsLocId != '') && (adsMobile != '') ) {
        adslink = "https://techpeak-net.com/api/campaign_ads/getAds?limit=1&mobile="+adsMobile+"&location_id="+adsLocId;
        console.log(adslink);
      } else {
        adslink = "https://techpeak-net.com/api/campaign_ads/getAds";
        console.log(adslink);
      }
    $.ajax({
        type: "GET",
        url: adslink,
        cache: false,
        statusCode: {
          200: function (response) {
            console.log(response);
            response = JSON.stringify(response[0]);
            response = JSON.parse(response);
            adId = response.id;
            campaignId = response.campaign_id;
            if(response.type == 'video') {
            var video = $('<video />', {
            src: response.media_link,
            type: 'video/mp4',
            id:'videoOfAds',
            controls: false,
            autoplay:true
            });
              $('#ads-video').append(video);
              $("#ads-link").prop("href", response.link);
              var firstRun=true;
              $("#videoOfAds").on("play", function () {
                if(firstRun) {
                }
                $('#ads-video').one('load',function() {
                $('#ads-video').removeClass('hidden');
                $("#link-btn-div").removeClass('hidden');
                $("#link-btn").text(response.botton_title);
                $("#ads-link").prop("href", response.link);
                $("#ads-btn").prop("href", response.link);
                $('#loader').hide();
                });
              //********Must Get Video Not Cached !*********/
              });
            } else if (response.type == 'image') {

              console.log(response);
              if (is_mobile == true) {
                if(response.portrait_link) {
                  $('#ads-image').attr('src',response.portrait_thumb_link);
                } else {
                    $('#ads-image').attr('src',response.thumb_link);
                }
              } else {
                $('#ads-image').attr('src',response.thumb_link);
              }
              $("#link-btn").text(response.botton_title);
              $("#ads-link").prop("href", response.link);
              $("#ads-btn").prop("href", response.link);
              $('#ads-image').one('load',function() {
              $('#ads-image').removeClass('hidden');
              $("#link-btn-div").removeClass('hidden');
              $("#welcome-text").addClass('hidden');
              $("#link-btn").prop("href", response.link);
              $('#loader').hide();
              });
            } else {
              $('.modal-body').text('Something went wrong, please try again later 22');
              $('#errorModal').modal('show');
            }
         }
       },
        success: function(html) {
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
          $('.modal-body').text('Something went wrong, please try again later 33');
          $('#errorModal').modal('show');
        },
        beforeSend: function() {

        },
        complete: function() {

        }
    });
  });
  </script>
  <div id="mobile-check">

  </div>
</body>
</html>
