<?php
//die('b');
$ip= $_SERVER['REMOTE_ADDR'];
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $google_ad = 0;
    //gclid
    if(strpos($url, 'gclid')!=FALSE){
        $google_ad = 1;
    }
$db = connect_db();
    $tmp = $db->queryNoResult('INSERT INTO k_visit(IP, url, time, google_ad) VALUES("'.$ip.'", "'.$url.'", "'.time().'", '.$google_ad.')');
    detect_click_tac($ip);


?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>
            <?php wp_title( '|', true, 'right' ); ?>
        </title>

        <link href="<?php echo get_template_directory_uri()?>/css/bootstrap.css" rel="stylesheet" />
        <link href="<?php echo get_template_directory_uri()?>/css/responsive_slide.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts/fonts.css">
        <link href="<?php echo get_template_directory_uri()?>/css/main.css" rel="stylesheet" />

        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.flexisel.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/responsiveslides.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/parallax.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.bighover.js"></script>
        
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/js.js"></script>        
        
        <!-- Fonts -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/Font-Awesome-master/web-fonts-with-css/css/fontawesome-all.min.css">    
       
        <?php wp_head(); ?>

        </head>

    <body <?php body_class(); ?>>
       <header id="main-header">
		<div class="main-wrapper">
			<div class="col-sm-3 col-xs-12">
                <a href="/"><div id="site-name">KINGDOM 101</div></a>
			</div>
			<div class="col-sm-3 col-xs-12">
                <a id="h-hotline" href="tel:0918880021"><i class="fas fa-phone-volume"></i> 091 888 0021</a>
			</div>
			<div class="col-sm-6 col-xs-12">
                <div id="btnShowMenu"></div>
				<nav id="main-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'my-custom-menu' ) ); ?>
				</nav>
			</div>
		</div>		
	</header>
        
        
        <?php
if (!is_home() && function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb('
    <div id="breadcrumbs"><div class="container">','</div></div>
    ');
}
?>