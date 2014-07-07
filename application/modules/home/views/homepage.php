<!DOCTYPE html>
<!--[if IE 8]> <html lang="fr" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="fr" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="fr"> <!--<![endif]-->  
<head>
    <title>Bienvenue à Cis sarl</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cameroon Industries and services, pompes,incinérateurs,compteurs,groupes électrogènes,tuyeaux,matériels incendies...">
    <meta name="author" content="kristdev">
    <meta name="robots" content="all" />
    <meta name="googlebot" content="all" />
    <meta name="keywords" content="Cameroun,Douala,Pompes,incendies,Péroliers,Incinérateurs,tuyeaux,HQSE,CIS,industrielle">

    <meta name="REVISIT-AFTER" content="7 days">
    <meta http-equiv="Content-Language" content="fr">


    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/headers/header1.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">        
    <!-- CSS Implementing Plugins -->    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/flexslider/flexslider.css">    	
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/parallax-slider/css/parallax-slider.css">
    <!-- CSS Theme -->    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themes/default.css" id="style_color">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themes/headers/default.html" id="style_color-header-1">    
</head>	

<body>
<!-- header_top module    -->
<?php echo Modules::run('header_top'); ?>
<!-- Fin module header_top -->

<!--=== Slider ===-->
<div class="slider-inner">
    <div id="da-slider" class="da-slider">
        <div class="da-slide">
            <h2><i>MAINTENANCE</i> <br /> <i>INDUSTRIELLE</i> <br /></h2>
            <p><i>Maintenance et installation</i> <br /> <i>des hydrocarbures</i> <br /></p>
            <div class="da-img"><img src="assets/plugins/parallax-slider/img/1.png" alt="" /></div>
        </div>
        <div class="da-slide">
            <h2><i>HQSE</i> <br /></h2>
            <p><i>Système de management Hygiène sécurité </i> <br /> <i>Environnement qualité</i></p>
            <div class="da-img">
				<div class="da-img"><img src="assets/plugins/parallax-slider/img/2.png" alt="" /> </div>
            </div>
        </div>
        <div class="da-slide">
            <h2><i>FOURNITURES</i> <br /> <i>INDUSTRIELLES</i> <br /></h2>
            <p><i>produits, accessoires,</i> <br /><i>outillage et consommables techniques</i></p>
            <div class="da-img"><img src="assets/plugins/parallax-slider/img/html5andcss3.png" alt="image01" /></div>
        </div>
        <div class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>		
        </div>
    </div><!--/da-slider-->
</div><!--/slider-->
<!--=== End Slider ===-->

<!--=== Purchase Block ===-->
<div class="purchase">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <span>Cameroun Industrie Et Services (CIS SARL).</span>
                <p> <strong>Notre mission</strong> se définit à être pour notre client un partenaire stratégique pour un développement durable sur la base d’une croissance saine, en lui apportant une expertise améliorée.</p>
            </div>            
            <div class="col-md-3">
                <a href="<?php echo base_url(); ?>assets/docs/cis.pdf" class="btn-buy hover-effect">Notre brochure</a>            
            </div>
        </div>
    </div>
</div><!--/row-->
<!-- End Purchase Block -->

<!--=== Content Part ===-->
<div class="container">	
	<!-- Service Blocks -->
	<div class="row">
    	<div class="col-md-4">
    		<div class="service">
                <i class="icon-wrench service-icon"></i>
    			<div class="desc">
    				<h4>Maintenance industrielle</h4>
                    <p><?php $string='C.I.S. est spécialisée dans la maintenance et l\'installation industrielle et des hydrocarbures. Dans le cadre de son activité industrielle, CAMEROUN INDUSTRIE ET SERVICES assure pour vous! Ainsi nous vous proposons ces prestations:'; echo character_limiter($string, 180); ?></p>
    			</div>
    		</div>	
    	</div>
    	<div class="col-md-4">
    		<div class="service">
                <i class="icon-cogs service-icon"></i>
    			<div class="desc">
    				<h4>Fourniture industrielle</h4>
                    <p><?php $string="CAMEROUN INDUSTRIE ET SERVICES: fourniture industrielle, produits, accessoires, outillage et consommables techniques pour professionnels de l'automobile,
du bâtiment, de l'industrie et les collectivités, au Cameroun et dans la sous-région."; echo character_limiter($string, 180); ?></p>
    			</div>
    		</div>	
    	</div>
    	<div class="col-md-4">
    		<div class="service">
                <i class="icon-key service-icon"></i>
    			<div class="desc">
    				<h4>H.Q.S.E</h4>
                    <p><?php $string="Système de management Hygiène sécurité environnement qualité; Politique Hygiène sécurité environnement"; echo character_limiter($string, 180); ?></p>
    			</div>
    		</div>	
    	</div>			    
	</div><!--/row-->
	<!-- End Service Blokcs -->

	<!-- Recent Works -->
    <div class="headline"><h2>Nos dernieres réalisations</h2></div>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="thumbnails thumbnail-style thumbnail-kenburn">
            	<div class="thumbnail-img">
                    <div class="overflow-hidden">
                        <img class="img-responsive" src="assets/img/main/work1.jpeg" alt="" />
                    </div>
                    <a class="btn-more hover-effect" href="#">read more +</a>					
                </div>
                <div class="caption">
                    <h3><a class="hover-effect" href="#">Project One</a></h3>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnails thumbnail-style thumbnail-kenburn">
                <div class="thumbnail-img">
                    <div class="overflow-hidden">
                        <img class="img-responsive" src="assets/img/main/work2.jpeg" alt="" />
                    </div>
                    <a class="btn-more hover-effect" href="#">read more +</a>                   
                </div>
                <div class="caption">
                    <h3><a class="hover-effect" href="#">Project Two</a></h3>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnails thumbnail-style thumbnail-kenburn">
                <div class="thumbnail-img">
                    <div class="overflow-hidden">
                        <img class="img-responsive" src="assets/img/main/work3.jpeg" alt="" />
                    </div>
                    <a class="btn-more hover-effect" href="#">read more +</a>                   
                </div>
                <div class="caption">
                    <h3><a class="hover-effect" href="#">Project Three</a></h3>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnails thumbnail-style thumbnail-kenburn">
                <div class="thumbnail-img">
                    <div class="overflow-hidden">
                        <img class="img-responsive" src="assets/img/main/work4.jpeg" alt="" />
                    </div>
                    <a class="btn-more hover-effect" href="#">read more +</a>                   
                </div>
                <div class="caption">
                    <h3><a class="hover-effect" href="#">Project Four</a></h3>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
                </div>
            </div>
        </div>
    </div><!--/row-->
	<!-- End Recent Works -->
    
	<!-- Info Blokcs -->
	<div class="row">
    	<!-- Welcome Block -->
		<div class="col-md-8">
			<div class="headline"><h2>Pourquoi Cis?</h2></div>
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-responsive margin-bottom-20" src="assets/img/main/cis5.jpg" alt="" />
                </div>
                <div class="col-sm-8">
                    <p>Nous sommes convaincus que la pérennité du partenariat est mutuellement profitable pour la totale satisfaction notre client. Aussi, nous nous engageons à :</p>
                    <ul class="list-unstyled margin-bottom-20">
                        <li><i class="icon-ok color-green"></i> Mettre à la disposition de nos clients et partenaires, uniquement des compétences requises pour leur apporter des solutions appropriées aux problèmes posés;</li>
                        <li><i class="icon-ok color-green"></i> Assister techniquement nos clients ;</li>
                        <!-- <li><i class="icon-ok color-green"></i> Responsive Bootstrap Template</li>
                        <li><i class="icon-ok color-green"></i> Corporate and Creative</li> -->
                    </ul>                    
                </div>
            </div>

            <blockquote class="hero-unify">
                <p>Aujourd’hui, C.I.S. SARL intervient dans les pays de la sous région CEMAC (Tchad, Congo, RCA, Gabon, Guinée-équatoriale…). Cette présence remarquable de C.I.S. SARL nous a permis de développer une importante relation de clients / consommateurs..</p>
                <small>Senior Managr, Mathias Wansi</small>
            </blockquote>
        </div><!--/col-md-8-->        

        <!-- Latest Shots -->
        <?php echo Modules::run('cis_images'); ?>
        <!--/col-md-4-->
	</div><!--/row-->	
	<!-- End Info Blokcs -->

	<!-- Clients Module -->
    <?php echo Modules::run('clients'); ?>
    <!-- Fin clients module -->
</div><!--/container-->		
<!-- End Content Part -->

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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/parallax-slider/js/jquery.cslider.js"></script> 
<!-- JS Page Level -->           
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pages/index.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        App.initSliders();
        Index.initParallaxSlider();
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