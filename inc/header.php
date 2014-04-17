<!DOCTYPE html>
<!--[if IE 8]>  <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->  
  <?php 
  $title = "20 Years On";
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?php echo $title; ?></title>
  <meta name="description" content="South Africa, Apartheid">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--For Social-->
  <meta property="fb:admins" content= "1576174123" />
  <meta property="fb:app_id" content="255177357966940" /> 
  <meta property="og:title" content="20 Years On"/>
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://subdomain.mysite.com/my_logo.png"/>
  <meta property="og:description" content="20 Years On description"/>
  <meta property="og:url" content="http://www.20yearson.org/" />
  <meta property="og:site_name" content="20 years on is so awesome" />
  <!--Favicon-->

  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/grid-5.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" media="(max-width: 1280px)" href="css/screen_1280.css">
  <link rel="stylesheet" media="(max-width: 1024px)" href="css/screen_1024.css">
  <link rel="stylesheet" media="(max-width: 780px)" href="css/tablet.css">
  <link rel="stylesheet" media="(max-width: 639px)" href="css/phone.css">
  <link rel="stylesheet" type="text/css" href="js/shadowbox/shadowbox.css">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <script src="js/vendor/custom.modernizr.js"></script>

  <!--Edge Webfont-->
  <script type="text/javascript" src="//use.edgefonts.net/maven-pro.js"></script> 
  <script type="text/javascript" src="//use.edgefonts.net/bebas-neue.js"></script> 
  <script type="text/javascript" src="//use.edgefonts.net/source-sans-pro;open-sans.js"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script type="text/javascript" src="js/jquery.animate-colors-min.js"></script>
</head>
<body>
<!--Load the Facebook SDK-->
  <div id="fb-root"></div>
  <script>
    window.fbAsyncInit = function() {
      // init the FB JS SDK
      FB.init({
        appId      : '255177357966940',                        // App ID from the app dashboard
        channelUrl : 'http://www.20yearson.org', // Channel file for x-domain comms
        status     : true,                                 // Check Facebook Login status
        xfbml      : true                                  // Look for social plugins on the page
      });

      // Additional initialization code such as adding Event Listeners goes here
    };

    // Load the SDK asynchronously
    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/all.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));     
  </script>
<!--End Facebook-->