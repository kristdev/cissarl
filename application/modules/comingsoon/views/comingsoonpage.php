<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="fr"> <!--<![endif]-->  
<head>
    <title>Cis Sarl | Coming Soon</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Redistribuable by kristdev">

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/headers/header1.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <link rel="shortcut icon" href="favicon.ico">        
    <!-- CSS Implementing Plugins -->    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/countdown/css/countdown.css">
    <!-- CSS Page Style -->    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pages/page_coming_soon.css">    
    <!-- CSS Theme -->    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themes/default.css" id="style_color">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themes/headers/default.html" id="style_color-header-1">    
</head> 

<body class="coming-soon-page">
  
<div class="coming-soon-border"></div>

<!--=== Content Part ===-->    
<div class="container">
    <!-- Coming Soon Content -->
    <div class="row">
        <div class="col-md-12 coming-soon">
            <h1>Disponible bientôt!</h1>
            <p>Nous vous demandons toutes excuses pour cette inconvénience, notre site web est en maintenance. Nos équipes travaillent continuellement pour vous proposer une interface plus conviviale et des fonctionalités à vous staisfaire. Merci de votre patience.</p><br>
            <form>
                <div class="input-group col-md-4 col-md-offset-4">
                    <input type="text" class="form-control" placeholder="Your Email">
                    <span class="input-group-btn">
                        <button class="btn-u" type="button">Subscribe</button>
                    </span>                        
                </div><!-- /input-group -->                    
            </form>
        </div>
    </div>

    <!-- Coming Soon Plugn -->
    <div class="coming-soon-plugin">
        <div id="defaultCountdown"></div>
    </div>

    <!-- Coming Soon Footer -->
    <div class="row">
        <div class="col-md-6">
            <ul class="social-icons">
                <li><a href="#" data-original-title="Feed" class="social_rss"></a></li>
                <li><a href="#" data-original-title="Facebook" class="social_facebook"></a></li>
                <li><a href="#" data-original-title="Twitter" class="social_twitter"></a></li>
                <li><a href="#" data-original-title="Goole Plus" class="social_googleplus"></a></li>
                <li><a href="#" data-original-title="Pinterest" class="social_pintrest"></a></li>
                <li><a href="#" data-original-title="Linkedin" class="social_linkedin"></a></li>
                <li><a href="#" data-original-title="Vimeo" class="social_vimeo"></a></li>
            </ul>            
        </div>
        <div class="col-md-6">
            <div class="coming-soon-copyright">
                <p>2013 © Unify - Responsive Website Template</p>                
            </div>
        </div>
    </div>
</div><!--/container-->
<!--=== End Content Part ===-->

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/hover-dropdown.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/back-to-top.js"></script>
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/countdown/jquery.countdown.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/backstretch/jquery.backstretch.min.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js"></script>

<script>
    $.backstretch([
      "assets/img/bg/1.jpg",
      "assets/img/bg/3.jpg",
      "assets/img/bg/2.jpg"
      ], {
        fade: 1000,
        duration: 7000
    });
</script>

<script type="text/javascript">
    $(function () {
        var austDay = new Date();
        austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
        $('#defaultCountdown').countdown({until: austDay});
        $('#year').text(austDay.getFullYear());
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
<![endif]-->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29166220-1']);
  _gaq.push(['_setDomainName', 'htmlstream.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</body>

</html> 