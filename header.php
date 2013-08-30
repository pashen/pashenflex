<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

    <title>FlexiCV vCard template</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Titillium+Web:400,600|Patua+One:400|Titillium+Web:400italic,700italic&subset=latin,latin-ext"/>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/css/reset.css"/>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/css/color-red.css"/>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/css/style.css"/>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/css/jquery.fancybox.css"/>

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/js/jquery.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/js/jquery.easytabs.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/js/jquery.hashchange.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/js/jquery.isotope.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/js/jquery.adipoli.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/js/jquery.fancybox.pack.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/js/jquery.gmap.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/js/response.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/js/custom.js"></script>

</head>

<body>
    <!-- Wrapper --><div id = "wrapper" class = "wrapper">
<?php
 $menu_name = 'header-menu';

    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
	$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

	$menu_items = wp_get_nav_menu_items($menu->term_id);
	//print_r($menu_items);
	$menu_list = '<ul id="navigation-menu" class="navigation-menu">';

	foreach ( (array) $menu_items as $key => $menu_item ) {
	    $title = $menu_item->title;
	    $url = $menu_item->url;
		if ($key === count($menu_items) - 1)
		 $mark = '"last"' ;
		else if ($key === 0) 
		 $mark = '"first"';
	    $menu_list .= '<li class=' . $mark . '><a class="sa-' . $key . '" href="' . $url . '"><span>' . $title . '</span></a></li>';
	}
	$menu_list .= '</ul>';
    } else {
	$menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
    } ?>

		<?php echo $menu_list  ?>
		<?php //wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>