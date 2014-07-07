<!--=== Top ===-->    
<div class="top">
    <div class="container">         
        <ul class="loginbar pull-right">
            <li>
                <i class="icon-globe"></i>
                <a>Languages</a>
                <ul class="lenguages">
                    <li class="active">
                        <a href="#">Français <i class="icon-ok"></i></a> 
                    </li>
                    <li><a href="#">English</a></li>
                </ul>
            </li> 
            <li class="devider"></li>   
            <li><a href="#">Login</a></li>   
        </ul>
    </div>      
</div><!--/top-->
<!--=== End Top ===-->    

<!--=== Header ===-->    
<div class="header">
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <img id="logo-header" src="<?php echo base_url(); ?>assets/img/logo1-default.png" alt="Logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?php if ($this->uri->segment(1) =='home') echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>home">
                            Home
                        </a>
                    </li>
                    <li class="<?php if ($this->uri->segment(1) =='services') echo 'active';?>">
                        <a href="<?php echo base_url(); ?>services">
                            Services
                        </a>
                    </li>
                    <li class="<?php if ($this->uri->segment(1) =='fournitures') echo 'active';?>">
                        <a href="<?php echo base_url(); ?>fournitures">
                            Fournitures
                        </a>
                    </li>
                    <li class="<?php if ($this->uri->segment(1) =='contactus') echo 'active';?>">
                        <a href="<?php echo base_url(); ?>contactus">
                            Contactez-nous
                        </a>
                    </li>                    
                    <li class="hidden-sm"><a class="search"><i class="icon-search search-btn"></i></a></li>
                </ul>
                <div class="search-open">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn-u" type="button">Go</button>
                        </span>
                    </div><!-- /input-group -->
                </div>                
            </div><!-- /navbar-collapse -->
        </div>    
    </div>    
</div><!--/header-->
<!--=== End Header ===--> 