<!DOCTYPE html>
<!--[if IE 8]> <html lang="fr" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="fr" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="fr"> <!--<![endif]-->  

<head>
    <title>Nous contacter | Cis</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/headers/header1.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">        
    <!-- CSS Implementing Plugins -->    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/flexslider/flexslider.css" type="text/css" media="screen">          
    <!-- CSS Page Style -->    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pages/page_contact.css">
    <!-- CSS Theme -->    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themes/default.css" id="style_color">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themes/headers/default.html" id="style_color-header-1">    
</head> 

<body>
<!-- header_top module    -->
<?php echo Modules::run('header_top'); ?>
<!-- Fin module header_top --> 

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Nous Contacter</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">Contacts</li>
        </ul>
    </div>
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!-- Google Map -->
<div id="map" class="map margin-bottom-40">
</div><!---/map-->
<!-- End Google Map -->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row margin-bottom-30">
		<div class="col-md-9 mb-margin-bottom-30">
            <div class="headline"><h2>Formulaire de contact</h2></div>
            <p>Laissez nous un message, notre service spécialisé vous rappellera le plus tôt possible.</p><br />
			<form action="contactus/sending" method="POST">
                <label>Name: <span class="color-red">*</span></label>
                <div class="row margin-bottom-20">
                    <div class="col-md-7 col-md-offset-0">
                        <input type="text" class="form-control" name="Name">
                        <?php 
                            if(form_error('Name')){
                                echo form_error('Name','<p class="text-warning">', '</p>');
                            }
                        ?>
                    </div>                
                </div>
                
                <label>Email: <span class="color-red">*</span></label>
                <div class="row margin-bottom-20">
                    <div class="col-md-7 col-md-offset-0">
                        <input type="text" class="form-control" name="Email">
                        <?php 
                            if(form_error('Email')){
                                echo form_error('Email','<p class="text-warning">', '</p>');
                            }
                        ?>
                    </div>                
                </div>

                <label>Sujet: <span class="color-red">*</span></label>
                <div class="row margin-bottom-20">
                    <div class="col-md-7 col-md-offset-0">
                        <input type="text" class="form-control" name="Sujet">
                        <?php 
                            if(form_error('Sujet')){
                                echo form_error('Sujet','<p class="text-warning">', '</p>');
                            }
                        ?>
                    </div>                
                </div>
                
                <label>Message: <span class="color-red">*</span></label>
                <div class="row margin-bottom-20">
                    <div class="col-md-11 col-md-offset-0">
                        <textarea rows="8" class="form-control" name="Message"></textarea>
                        <?php 
                            if(form_error('Message')){
                                echo form_error('Message','<p class="text-warning">', '</p>');
                            }
                        ?>
                    </div>                
                </div>
                
                <p><button type="submit" class="btn-u">Envoyer Message</button></p>
                <?php 
                    if(isset($confirm_message)){
                        echo $confirm_message;
                    }
                ?>
            </form>
        </div><!--/col-md-9-->
        
		<div class="col-md-3">
        	<!-- Contacts -->
            <div class="headline"><h2>Contacts</h2></div>
            <ul class="list-unstyled who margin-bottom-30">
                <li><a href="#"><i class="icon-home"></i>2260, Rue JAMOT-AKWA</a></li>
                <li><a href="#"><i class="icon-envelope-alt"></i>cis_sarl@yahoo.fr</a></li>
                <li><a href="#"><i class="icon-phone-sign"></i>237 99412769</a></li>
                <li><a href="#"><i class="icon-globe"></i>http://www.cissarl.com</a></li>
            </ul>

        	<!-- Business Hours -->
            <div class="headline"><h2>Heures d'ouvertures</h2></div>
            <ul class="list-unstyled margin-bottom-30">
            	<li><strong>Monday-Friday:</strong> 8am to 6pm</li>
            	<li><strong>Saturday:</strong> 9am to 1pm</li>
            	<li><strong>Sunday:</strong> Closed</li>
            </ul>

        	<!-- Why we are? -->
            <div class="headline"><h2>pourquoi nous?</h2></div>
            <p>Nous sommes convaincus que la pérennité du partenariat est mutuellement profitable pour la totale satisfaction notre client. Aussi, nous nous engageons à :</p>
            <ul class="list-unstyled">
            	<li><i class="icon-ok color-green"></i> Mettre à la disposition de nos clients et partenaires, uniquement des compétences requises pour leur apporter des solutions appropriées aux problèmes posés;</li>
            	<li><i class="icon-ok color-green"></i> Assister techniquement nos clients ;</li>
            </ul>
        </div><!--/col-md-3-->
    </div><!--/row-->        

    <!-- Clients Module -->
    <?php echo Modules::run('clients'); ?>
    <!-- Fin clients module -->
</div><!--/container-->		
<!--=== End Content Part ===-->

<!-- footer-copyright module -->
<?php echo Modules::run('footer_copyright'); ?>
<!-- Fin module footer-copyright -->

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/hover-dropdown.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/back-to-top.js"></script>
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/gmap/gmap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pages/contact.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();                
        Contact.initMap();        
    });
</script>
<!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>assets/plugins/respond.js"></script>
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