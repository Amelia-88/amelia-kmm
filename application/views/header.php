<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>WEDHUS MABUR</title>

		<!-- base_url dihitung dari folder root / paling awal -->


		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/owl.carousel.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/owl.theme.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/animate.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/flexslider.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/pricing.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/gallery.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/lightbox.min.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css");?>" >
        <link rel="stylesheet" href="<?php echo base_url("assets/css/responsive.css");?>" >
        <style type="text/css">
            /* The sticky class is added to the navbar with JS when it reaches its scroll position */
.sticky {
  position: fixed;
  z-index: 999999999;
  top: 0;
  width: 100%;
}

.hide-image {
    display: none;
}

    .navbar-nav >li > a{
        color: #333333 !important;
    }
    /* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 60px;
}
        </style>

        <script src="<?php echo base_url("assets/js/jquery-1.11.2.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.flexslider.min.js"); ?>"></script>
        <script type="text/javascript">
            
            $(window).load(function() {
                $('.flexslider').flexslider({
                 animation: "slide",
                 controlsContainer: ".flexslider-container"
                });
            });
        </script>

	</head>
    <body data-spy="scroll" data-target="#template-navbar">
        <!--== 1. Navigation ==-->
        <div>
            <img src="<?php echo base_url("assets/images/he.png"); ?>" class="img-responsive" style="width: 100%; height: 20px">
        </div>
        <div class="col-md-8 col-md-offset-5">
            <img src="<?php echo base_url("assets/images/Logo.png"); ?>" class="img-responsive" style="width: 200px; height: 200px; margin-top: 10px;">
        </div>

    <div class="collapse navbar-collapse" style="background: #fff !important;" id="navbar-brand-centered">
        <menu class="col-md-12" style="padding-left: 27em">
            <ul class="nav navbar-nav">
                <li>
                    <img class="hide-image" id="logo-h" src="<?php echo base_url("assets/images/Logo.png"); ?>" style="width: 80px; height: 80px; margin-top: -20px;">
                </li>
                <li><a href="<?php echo base_url('home'); ?>">HOME</a></li>
                <li><a href="<?php echo base_url('home/about'); ?>">ABOUT</a></li>
                <li><a href="<?php echo base_url('home/menu/menuall'); ?>">MENU</a></li>
                <li><a href="<?php echo base_url('home/gallery') ?>">GALLERY</a></li>
                <li><a href="<?php echo base_url('home/article') ?>">ARTICLE</a></li>
                <li><a href="<?php echo base_url('home/contact') ?>">CONTACT</a></li>
            </ul>
        </menu>
    </div>
</body>