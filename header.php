<!DOCTYPE html>
<html>
	
<!--
 _         _         _         _       _         
| |       | |       | |       | |     | |        
| | _____ | | ____ _| | _____ | | __ _| | _____  
| |/ / _ \| |/ / _` | |/ / _ \| |/ _` | |/ / _ \ 
|   < (_) |   < (_| |   < (_) | | (_| |   < (_) |
|_|\_\___/|_|\_\__,_|_|\_\___/|_|\__,_|_|\_\___/ 
                                                 
Willkommen in meinem Quelltext!
Es ist euch natürlich erlaubt Sachen aus meinem Quellcode zu kopieren,
hab ich schlussendlich auch gemacht.

Wenn Ihr an mehr informationen zu einzelnen Teilen kommen wollt, könnt
Ihr mir auch eine Mail Schicken, die E-Mail Adresse von mir lautet:
niklas.koehler(at)live.de

Bei der Erstellung meines Blogs habe ich übrigens auf folgende 
Technologien zurückgegriffen:

	- Wordpress (http://wordpress.org)
	- jQuery (http://jquery.com/)
	- Google Webfonts (http://www.google.com/webfonts)
	- Twitter Bootstrap (http://twitter.github.com/bootstrap/)
	- Modernizr (http://modernizr.com/)
	- Normalize.css (http://necolas.github.com/normalize.css/)
	
TL;DR
Kopiert euch alles was Ihr haben wollt und schreibt mir eine Mail 
wenn ihr fragen habt.

Cheers! Niklas Köhler, 15.11.2012

-->     

<head>
	<!-- Global Attributs -->
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php wp_title(''); ?></title>

		<meta name="viewport" content="width=device-width">

	<!-- Stylesheets -->
		<!-- Normalize.css -->
			<link rel="stylesheet" href="http://kokakolako.de/wp-content/themes/kokakolako/css/fallback.css">
		<!-- Default Stylesheet -->
			<link rel="stylesheet" type="text/css" href="http://kokakolako.de/wp-content/themes/kokakolako/style.css" />
		<!-- Large Screen (1060px - MAX) -->
			<link rel="stylesheet" type="text/css" href="http://kokakolako.de/wp-content/themes/kokakolako/css/large_screen.css" />
		<!-- Tablet (MIN - 1060px) -->
			<link rel="stylesheet" type="text/css" href="http://kokakolako.de/wp-content/themes/kokakolako/css/tablet.css" />
		<!-- Smartphones (MIN - 480px) -->
			<link rel="stylesheet" type="text/css" href="http://kokakolako.de/wp-content/themes/kokakolako/css/phone.css">
		<!-- Bootstrap -->
			<link rel="stylesheet" type="text/css" href="http://kokakolako.de/wp-content/themes/kokakolako/lib/bootstrap/css/bootstrap.css">
		<!-- Fallback.css -->
			<link rel="stylesheet" href="http://kokakolako.de/wp-content/themes/kokakolako/css/fallback.css">

	<!-- Favicon -->	
		<link rel="shortcut icon" href="http://kokakolako.de/wp-content/themes/kokakolako/img/favicon.ico" />

	<!-- Alexa Verification ID -->	
		<meta name="alexaVerifyID" content="Zpz-HE6WWZ5V75k0utkI140LqKc">

	<!-- Linked Files -->
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="image_src" href="http://kokakolako.de/wp-content/themes/kokakolako/img/logo.png" />

	<!-- Google Webfonts -->
		<link href='http://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=The+Girl+Next+Door' rel='stylesheet' type='text/css'>

	<?php wp_head();?>
</head>

<!-- Haupt-Navigation -->
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
	              <div class="navbar-inner">
	                <div class="container-fluid">
	                	<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            			<span class="icon-bar"></span>
	            			<span class="icon-bar"></span>
	            			<span class="icon-bar"></span>
	          		  	</button>
	                  <div class="nav-collapse">
	                    <ul class="nav">
	                      <li><a href="http://kokakolako.de">Startseite</a></li>
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategorien <b class="caret"></b></a>
	                        <ul class="dropdown-menu">
	                        	<?php wp_list_categories('title_li='); ?>
	                        </ul>
	                      </li>
	                      <li><a href="http://twitter.com/kokakolako">@kokakolako</a></li>
	                    </ul>
	                    <?php get_search_form(); ?>
	                    <ul class="nav pull-right">
	                    	<?php if ( is_user_logged_in() ) { ?>
								<li><a href="http://kokakolako.de/wp-admin/index.php">Dashboard</a></li>
							<?php } ?>
	                    </ul>
	                  </div><!-- /.nav-collapse -->
	                </div>
	              </div><!-- /navbar-inner -->
	            </div>
	<div class="wrapper">

	<!-- Header -->
	<a href="http://kokakolako.de">
		<header class="header">			
				<img src="http://kokakolako.de/wp-content/themes/kokakolako/img/logo.svg" alt="Logo von Kokakolako.de" />
		</header>
	</a>