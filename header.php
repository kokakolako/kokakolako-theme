<!doctype html>
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
		<!-- Bootstrap -->
			<link href="http://kokakolako.de/wp-content/themes/kokakolako/lib/bootstrap/docs/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
		<!-- Bootstrap Responsive -->
			<link href="http://kokakolako.de/wp-content/themes/kokakolako/lib/bootstrap/docs/assets/css/bootstrap-responsive.css" rel="stylesheet">
		<!-- Fallback.css -->
			<link href="http://kokakolako.de/wp-content/themes/kokakolako/css/fallback.css" rel="stylesheet" type="text/css">
		<!-- Default Stylesheet -->
			<link href="http://kokakolako.de/wp-content/themes/kokakolako/style.css" rel="stylesheet" type="text/css" />
		<!-- Large Screen (1060px - MAX) -->
			<link href="http://kokakolako.de/wp-content/themes/kokakolako/css/large_screen.css" rel="stylesheet" type="text/css" />
		<!-- Tablet (MIN - 1060px) -->
			<link href="http://kokakolako.de/wp-content/themes/kokakolako/css/tablet.css" rel="stylesheet" type="text/css" />
		<!-- Smartphones (MIN - 480px) -->
			<link href="http://kokakolako.de/wp-content/themes/kokakolako/css/phone.css" rel="stylesheet" type="text/css">

	<!-- Favicon -->	
		<link href="http://kokakolako.de/wp-content/themes/kokakolako/img/favicon.ico" rel="shortcut icon" />

	<!-- Alexa Verification ID -->	
		<meta name="alexaVerifyID" content="Zpz-HE6WWZ5V75k0utkI140LqKc">

	<!-- Linked Files -->
		<link href="<?php bloginfo('rss2_url'); ?>" rel="alternate" type="application/rss+xml" title="RSS 2.0" />
		<link href="<?php bloginfo('rss_url'); ?>" rel="alternate" type="text/xml" title="RSS .92" />
		<link href="<?php bloginfo('atom_url'); ?>" rel="alternate" type="application/atom+xml" title="Atom 1.0" />
		<link href="<?php bloginfo('pingback_url'); ?>" rel="pingback" />
		<link href="http://kokakolako.de/wp-content/themes/kokakolako/img/logo.png" rel="image_src" />

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
	                	<button class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" type="button">
	            			<span class="icon-bar"></span>
	            			<span class="icon-bar"></span>
	            			<span class="icon-bar"></span>
	          		  	</button>
	                  <div class="nav-collapse">
	                    <ul class="nav">
	                      <li><a href="http://kokakolako.de">Startseite</a></li>
	                      <li><a href="https://github.com/kokakolako">GitHub</a></li>
	                      <li class="dropdown">
	                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kategorien <b class="caret"></b></a>
	                        <ul class="dropdown-menu">
	                        	<?php wp_list_categories('title_li='); ?>
	                        </ul>
	                      </li>
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
				<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cgo8c3ZnCiAgIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIKICAgeG1sbnM6Y2M9Imh0dHA6Ly9jcmVhdGl2ZWNvbW1vbnMub3JnL25zIyIKICAgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIgogICB4bWxuczpzdmc9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIgogICB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciCiAgIHdpZHRoPSI1MDAiCiAgIGhlaWdodD0iMTIwIgogICB2ZXJzaW9uPSIxLjEiCiAgPgogIDxtZXRhZGF0YT4KICAgIDxyZGY6UkRGPgogICAgICA8Y2M6V29yaz4KICAgICAgICA8ZGM6Zm9ybWF0PmltYWdlL3N2Zyt4bWw8L2RjOmZvcm1hdD4KICAgICAgICA8ZGM6dHlwZQogICAgICAgICAgIHJkZjpyZXNvdXJjZT0iaHR0cDovL3B1cmwub3JnL2RjL2RjbWl0eXBlL1N0aWxsSW1hZ2UiIC8+CiAgICAgIDwvY2M6V29yaz4KICAgIDwvcmRmOlJERj4KICA8L21ldGFkYXRhPgogIDxnCiAgICAgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzIuODU3MTYzLC00NzUuODMwNzYpIj4KICAgIDxwYXRoCiAgICAgICBzdHlsZT0iZmlsbDojZmZmZmZmO2ZpbGwtb3BhY2l0eToxIgogICAgICAgZD0ibSAyMi43MjY0NTcsNDc1LjgzMDc2IDAsNS4wMDIwOSAtNS4wNTMwNiwwIDAsNS4wMDIwOCAtNS4wNTMwNiwwIDAsNS4wMDIwOCAtNS4wNTMwNDk5LDAgMCwxOS45ODMzMyA1LjA1MzA0OTksMCAwLDUuMDAyMDggMjAuMTg2OTYsMCAwLDUuMDAyMDkgLTUuMDI3NzgsMCAwLDEwLjAwNDE3IC01LjA1MzA2LDAgMCwxMC4wMDQxNiAtNS4wNTMwNiwwIDAsNS4wMDIwOSAtNS4wNTMwNiwwIDAsNS4wMDIwOSAtNS4wNTMwNDk5LDAgMCw1LjAwMjA4IC01LjA1MzA1LDAgMCw1LjAwMjA4IC01LjA1MzA2LDAgMCw1LjAwMjA4IC0yMC4yMTIyMjAxLDAgMCwtNS4wMDIwOCA1LjA1MzA0LDAgMCwtNS4wMDIwOCA1LjA1MzA2LDAgMCwtMTUuMDA2MjYgLTE1LjE1OTE2LDAgMCw1LjAwMjA5IC01LjA1MzA2LC0wLjAyNSAwLDIwLjAzMzM1IDUuMDUzMDYsMCAwLDQuOTc3MDcgMTUuMTU5MTYsLTAuMDI0OSAwLDUuMDI3MSAxMC4xMDYxMjAxLDAgMCwtNS4wMjcxIDE1LjE1OTE1OTksMC4wMjQ5IDAsLTQuOTc3MDcgMTAuMTA2MTIsMCAwLC01LjAwMjA5IDUuMDUzMDYsMCAwLC01LjAwMjA5IDUuMDI3NzgsMCAwLC01LjAwMjA4IDUuMDUzMDYsMCAwLC0xMC4wMDQxNyA1LjA1MzA1LDAgMCwtMTAuMDA0MTYgNS4wNTMwNiwwIDAsMTUuMDA2MjUgLTUuMDUzMDYsMCAwLDI5Ljk4NzUgNS4wNTMwNiwwIDAsNS4wMDIwOCA1LjA1MzA2LDAgMCw1LjAwMjA3IDUuMDUzMDUsMCAwLDUuMDAyMDkgNS4wNTMwNiwwIDAsNS4wMDIwOSAzNS4zNDYxMywwIDAsLTUuMDAyMDkgMTUuMTU5MTYzLDAgMCwtNS4wMDIwOSAzNS4zNzE0LDAgMCw1LjAwMjA5IDEwLjA4MDg1LDAgMCw1LjAwMjA5IDEwLjEwNjEsMCAwLC01LjAwMjA5IDI1LjI2NTI4LDAgMCw1LjAwMjA5IDUuMDUzMDYsMCAwLC0xMC4wMDQxOCAtMTAuMTA2MTEsMCAwLC01LjAwMjA3IC0xNS4xNTkxNywwIDAsLTUuMDAyMDggLTYwLjYxMTQxLDAgMCw1LjAwMjA4IC0yMC4yMTIyMjMsMCAwLDUuMDAyMDcgLTIwLjE4Njk2LDAgMCwtNS4wMDIwNyAtNS4wNTMwNiwwIDAsLTUuMDAyMDggLTUuMDUzMDUsMCAwLC0zOS45OTE2NyAtNS4wNTMwNiwwIDAsLTUuMDAyMDggLTUuMDUzMDUsMCAwLC01LjAwMjA5IDEwLjEwNjExLDAgMCwtNS4wMDIwOCA1LjA1MzA1LDAgMCwtNS4wMDIwOSA1LjA1MzA2LDAgMCwtNS4wMDIwOSA1LjA1MzA2LDAgMCwtNS4wMDIwOCA1LjA1MzA1LDAgMCwtNC45NzcwNyA1LjA1MzA2LDAgMCwtNS4wMDIwOSA1LjAyNzc5LDAgMCwtNS4wMDIwOCA1LjA1MzA2LDAgMCwtNS4wMDIwOCA1LjA1MzA1MywwIDAsLTUuMDAyMDkgLTEwLjEwNjExMywwIDAsNS4wMDIwOSAtNS4wMjc3OSwwIDAsNS4wMDIwOCAtNS4wNTMwNiwwIDAsNS4wMDIwOCAtNS4wNTMwNSwwIDAsNS4wMDIwOSAtNS4wNTMwNiwwIDAsNC45NzcwNyAtNS4wNTMwNiwwIDAsNS4wMDIwOCAtNS4wNTMwNSwwIDAsNS4wMDIwOSAtNS4wNTMwNiwwIDAsNS4wMDIwOSAtMTAuMTA2MTEsMCAwLC0xMC4wMDQxOCA1LjA1MzA2LDAgMCwtOS45NzkxNSA1LjA1MzA1LDAgMCwtNS4wMDIwOSA1LjA1MzA2LDAgMCwtMTAuMDA0MTYgLTUuMDUzMDYsMCAwLDUuMDAyMDggLTEwLjEwNjExLDAgMCw1LjAwMjA4IC01LjA1MzA2LDAgMCw1LjAwMjA5IC01LjA1MzA1LDAgMCw0Ljk3NzA3IC0yMC4xODY5NiwwIDAsLTkuOTc5MTYgNS4wNTMwNiwwIDAsLTUuMDAyMDggNS4wNTMwNiwwIDAsLTUuMDAyMDggNS4wMjc3OCwwIDAsLTUuMDAyMDkgMTAuMTA2MTEsMCAwLC01LjAwMjA4IC0yMC4xODY5NSwwIHogbSAzMzMuMzUwMTAzLDQuOTc3MDcgMCw1LjAwMjA5IC0xMC4wODA4NSwwIDAsNS4wMDIwOCAtNS4wNTMwNSwwIDAsNS4wMDIwOSAtNS4wNTMwNSwwIDAsNS4wMDIwOSAtNS4wNTMwNiwwIDAsNS4wMDIwNyAtNS4wNTMwNiwwIDAsNS4wMDIwOSAtNS4wNTMwNiwwIDAsMTAuMDA0MTcgLTUuMDUzMDUsMCAwLDkuOTc5MTYgLTUuMDUzMDYsMCAwLDUuMDAyMDkgLTUuMDUzMDUsMCAwLC00LjU1MTkxIC01LjA1MzA2LDAgLTAuMjc3OTIsLTUuNDI3MjUgLTEwLjM1ODc2LDAgLTkuNTUwMjgsMCAwLDUuNDUyMjcgLTUuMDUzMDUsMCAwLDQuOTI3MDUgLTUuMDUzMDYsMCAwLDQuOTUyMDYgLTUuMDUzMDYsMCAwLC01LjMyNzIzIC01LjA1MzA1LDAgMCwtNS4wMDIwNyAtMTAuMTA2MTEsMCAwLDUuMDAyMDcgLTUuMDUzMDYsMCAwLDUuMDAyMDkgLTUuMDUzMDYsMCAwLC0xMC4wMDQxNiA1LjA1MzA2LDAgMCwtMTAuMDA0MTcgNS4wNTMwNiwwIDAsLTUuMDAyMDkgNS4wNTMwNSwwIDAsLTEwLjAwNDE3IDUuMDUzMDYsMCAwLC0xNC45ODEyNCAtNS4wNTMwNiwwIDAsNS4wMDIwOSAtNS4wNTMwNSwwIDAsNS4wMDIwOCAtNS4wNTMwNiwwIDAsNC45NzcwNyAtNS4wNTMwNiwwLjA3NDkgMCw5LjkyOTE0IC01LjA1MzA1LDAgMCw1LjAwMjA5IC01LjA1MzA2LDAgMCwxMC4wMDQxNyAtNS4wNTMwNiwwIDAsMTAuMDA0MTYgLTUuMDI3NzksMCAwLDUuMDAyMDkgLTUuMDUzMDUsMCAwLDUuMDAyMDkgLTUuMDUzMDUsMCAwLDUuMDAyMDggLTUuMDUzMDYsMCAwLC0xMC4wMDQxNyA1LjA1MzA2LDAgMCwtNS4wMDIwOSA1LjA1MzA1LDAgMCwtMTUuMDA2MjUgLTI1LjI2NTI4LDAgMCw1LjAwMjA5IC01LjA1MzA1LDAgLTUuMDUzMDYsMCAwLDUuMDAyMDkgLTUuMDUzMDYsMCAwLDUuMDAyMDcgLTUuMDUzMDYsMCAwLDEwLjAwNDE4IC0xMC4xMDYxLDAgMCw1LjAwMjA4IC01LjAyNzgsMCAwLC01LjAwMjA4IC01LjA1MzA1LDAgMCwtNS4wMDIwOSAwLC01LjAwMjA5IDUuMDUzMDUsMCAwLC01LjAwMjA3IDUuMDI3OCwwIDAsMTAuMDA0MTYgNS4wNTMwNSwwIDAsLTUuMDAyMDkgNS4wNTMwNSwwIDAsLTEwLjAwNDE2IC01LjA1MzA1LDAgMCwtNS4wMDIwOSAtMTAuMDgwODUsMCAwLDUuMDAyMDkgLTUuMDUzMDUsMCAwLDUuMDAyMDkgLTUuMDUzMDYsMCAwLC0xMC4wMDQxOCA1LjA1MzA2LDAgMCwtMTAuMDA0MTcgNS4wNTMwNSwwIDAsLTUuMDAyMDggNS4wMjc4LDAgMCwtOS45NzkxNiA1LjA1MzA1LDAgMCwtMTUuMDA2MjQgLTUuMDUzMDUsMCAwLDUuMDAyMDggLTUuMDI3OCwwIDAsNS4wMDIwNyAtNS4wNTMwNSwwIDAsNS4wMDIwOSAtNS4wNTMwNiwwLjA1IDAsOS45MjkxNCAtNS4wNTMwNiwwIDAsNS4wMDIwOCAtNS4wNTMwNSwwIDAsMTAuMDA0MTcgLTUuMDUzMDYsMCAwLDEwLjAwNDE4IC01LjA1MzA1LDAgMCw1LjAwMjA3IC01LjA1MzA2LDAgMCw1LjAwMjA4IC01LjA1MzA2LDAgMCwtMTAuMDA0MTUgNS4wNTMwNiwwIDAsLTUuMDAyMDkgLTUuMDUzMDYsMCAtMC4yNzc5MiwtNS41MDIzIC0xMC4zNTg3NiwwIC05LjU3NTU0MywwIDAsNS41MDIzIC01LjAyNzc5LDAgMCw1LjAwMjA5IC01LjA1MzA2LDAgMCw1LjAwMjA3IC01LjA1MzA1LDAgMCwxNC45ODEyNCAtNS4wNTMwNiwwLjAyNSAwLDUuMDAyMDkgLTUuMDUzMDYsMCAwLDUuMDAyMDkgNS4wNTMwNiwwIDAsNC45NzcwNiAyMC4xODY5NiwwIDAsLTQuOTc3MDYgNS4wNTMwNiwwIDAsLTUuMDAyMDkgNS4wNTMwNTMsMCAwLDUuMDAyMDkgMTAuMTA2MTEsMCAwLC01LjAwMjA5IDEwLjEwNjEyLDAgMCwtNS4wMDIwOSA1LjA1MzA1LDAgMCwtNS4wMDIwOCA1LjEwMzU5LDAgLTAuMDUwNSwtNS4wMDIwOSA1LjA1MzA1LDAgMCw1LjAwMjA5IDAsMTUuMDA2MjYgNS4wNTMwNSwwIDAsNC45NzcwNiA1LjA1MzA2LDAgMCwtNC45NzcwNiAxMC4wODA4NSwwIDEwLjEwNjExLDAgMCw0Ljk3NzA2IDEwLjEwNjExLDAgMCwtNC45NzcwNiA1LjA1MzA2LDAgMCw0Ljk3NzA2IDIwLjIxMjIyLDAgNS4wNTMwNiwwIDAsLTQuOTc3MDYgMTAuMTA2MTEsMCAwLC01LjAwMjA5IDUuMDI3NzksMCAwLC01LjAwMjA5IDUuMTI4ODUsMCAtMC4wNzU3LC01LjAwMjA4IDUuMDUzMDYsMCAwLDUuMDAyMDggMCwxNC45ODEyNCA1LjA1MzA1LDAgMCw1LjAwMjA5IDUuMDUzMDYsMCAwLC01LjAwMjA5IDEwLjEwNjEyLDAgMCwtNC45MjcwNSA1LjA1MzA1LDAgMCw0LjkyNzA1IDIwLjIxMjIzLDAgMCwtNC45MjcwNSA1LjAyNzc5LDAgMCwtNC45NTIwNiA1LjA1MzA1LDAgMCwtNC45NTIwNyA1LjA1MzA2LDAgMCwtNC45MjcwNCAxMC4xMDYxMSwwIDAsOS43NTQwNSAtNS4wNTMwNiwwIDAsMTAuMDA0MTcgNS4wNTMwNiwwIDAsNS4wMDIwOSAxMC4xMDYxLDAgMCwtNS4wMDIwOSAxNS4xNTkxOCwwIDAsNS4wMDIwOSAxMC4xMDYxMSwwIDAsLTUuMDAyMDkgNS4wNTMwNiwwIDAsNS4wMDIwOSAyMC4xODY5NSwwIDUuMDUzMDUsMCAwLC01LjAwMjA5IDEwLjEwNjEyLDAgMCwtNC45NzcwNiA1LjA1MzA1LDAgMCwtNS4wMDIwOSA1LjEwMzYsMCAtMC4wNTA1LC01LjAwMjA5IDUuMDUzMDQsMCAwLDUuMDAyMDkgMCwxNC45ODEyNCA1LjA1MzA2LDAgMCw1LjAwMjA5IDUuMDUzMDYsMCAwLC01LjAwMjA5IDEwLjA4MDg1LDAgMCwtNS4wMDIwOSA0Ljk3NzI2LDAgMCw0LjU3NjkxIDIwLjIxMjIyLDAgMCwtNS4wMDIwOSA1LjA1MzA2LDAgMCwtNS4wMDIwOCA1LjA1MzA2LDAgMCwtNS4wMDIwNyA1LjA1MzA0LDAgMCwtMTAuMDA0MTggNS4wNTMwNiwwIDAsLTEwLjAwNDE3IDUuMDUzMDYsMCAwLC01LjAwMjA4IC01LjA1MzA2LDAgLTAuMzAzMTgsLTUuNDc3MjggLTEwLjMzMzUsMCAtOS41NzU1NCwwIDAsNS41MDIyOSAtNS4wNTMwNiwwIDAsNC45NzcwNyAtNS4wNTMwNiwwIDAsNS4wMDIwOCAtNC45NzcyNSwwIDAsLTQuNTUxODkgLTUuMDUzMDYsMCAwLC01LjAwMjA4IC0xMC4xMDYxLDAgMCw1LjAwMjA4IC01LjAyNzgsMCAwLDUuMDAyMDggLTUuMDUzMDYsMCAwLC0xMC4wMDQxNiA1LjA1MzA2LDAgMCwtMTAuMDA0MTggNS4wMjc4LDAgMCwtNS4wMDIwOCA1LjA1MzA1LDAgMCwtMTAuMDA0MTcgNS4wNTMwNSwwIDAsLTE0Ljk4MTI0IC01LjA1MzA1LDAgMCw1LjAwMjA4IC01LjA1MzA1LDAgMCw0Ljk3NzA4IC01LjAyNzgsMCAwLDUuMDAyMDggLTUuMDUzMDYsMC4wNzQ5IDAsOS45MjkxNCAtNS4wNTMwNiwwIDAsNS4wMDIwOCAtNS4wNTMwNCwwIDAsMTAuMDA0MTggLTUuMDUzMDUsMCAwLDEwLjAwNDE2IC01LjA1MzA2LDAgMCw1LjAwMjA4IC01LjA1MzA2LDAgMCw1LjAwMjA5IC01LjA1MzA2LDAgMCw1LjAwMjA5IC01LjA1MzA1LDAgMCwtMTAuMDA0MTggNS4wNTMwNSwwIDAsLTUuMDAyMDggNS4wNTMwNiwwIDAsLTE1LjAwNjI1IC0yNS4yNjUyOCwwIDAsNS4wMDIwOSAtNS4wMjc3OSwwIC01LjA1MzA2LDAgMCw1LjAwMjA5IC01LjA1MzA1LDAgMCw1LjAwMjA3IC01LjA1MzA1LDAgMCwxMC4wMDQxNyAtNS4wNTMwNiwwIDAsNS4wMDIwOSAtNS4wNTMwNiwwIC01LjA1MzA2LDAgMCwtMTAuMDA0MTggNS4wNTMwNiwwIDAsLTUuMDAyMDggNS4wNTMwNiwwIDAsLTUuMDAyMDcgNS4wNTMwNiwwIDAsLTUuMDI3MTEgLTUuMDUzMDYsMCAwLC05Ljk3OTE2IDUuMDUzMDYsMCAwLC01LjAwMjA4IDUuMDUzMDUsMCAwLC0xMC4wMDQxNiA1LjA1MzA1LDAgMCwtNS4wMDIwOSA1LjA1MzA2LDAgMCwtNS4wMDIwOSA1LjAyNzc5LDAgMCwtNS4wMDIwOCA1LjA1MzA2LDAgMCwtNS4wMDIwOCAxMC4xMDYxMSwwIDAsMTAuMDA0MTYgNS4wNTMwNSwwIDAsLTIwLjAwODMzIC0xNS4xNTkxNywwIHogbSAxMC4xMDYxMiwyMC4wMDgzNSAtNS4wNTMwNiwwIDAsNS4wMDIwNyAtNS4wNTMwNiwwIDAsNS4wMDIwOSAtNS4wNTMwNiwwIDAsNS4wMDIwOCAtNS4wMjc3OSwwIDAsNS4wMDIwOSAtNS4wNTMwNSwwIDAsNS4wMDIwOSAtNS4wNTMwNSwwIDAsNC45NzcwNyAtNS4wNTMwNiwwIDAsNS4wMDIwOSAxMC4xMDYxMSwwIDAsLTUuMDAyMDkgNS4wNTMwNSwwIDAsLTQuOTc3MDcgNS4wMjc3OSwwIDAsLTUuMDAyMDkgNS4wNTMwNiwwIDAsLTUuMDAyMDkgNS4wNTMwNiwwIDAsLTUuMDAyMDggNS4wNTMwNiwwIDAsLTEwLjAwNDE2IHogbSAtMjY3LjcxMDkxMywzMC4wMTI1IDEwLjEwNjExMywwIDAsMTAuMDA0MTYgLTUuMDUzMDYsMCAwLC00LjAyNjY3IC01LjA1MzA1MywwIDAsLTUuOTc3NDkgeiBtIDEwMS4wMzU4NTMsMCA1LjA1MzA2LDAgMCw1LjAwMjA3IC01LjA1MzA2LDAgMCwxMC4wMDQxOCAtNS4wNTMwNiwwIDAsNS4wMDIwOSAtNS4wNTMwNSwwIDAsMTAuMDA0MTYgLTEwLjEwNjExLDAgMCwtMTAuMDA0MTYgNS4wNTMwNiwwIDAsLTUuMDAyMDkgNS4wNTMwNSwwIDAsLTEwLjAwNDE4IDEwLjEwNjExLDAgMCwtNS4wMDIwNyB6IG0gOTUuOTU3NTMsMC40MjUxNyAwLDkuOTA0MTMgLTUuMDUzMDUsMCAwLC0zLjk3NjY2IC01LjA1MzA2LDAgMCwtNS45MDI0NSAxMC4xMDYxMSwtMC4wMjUgeiBtIDE2MS41NzE0Nyw0LjEyNjcyIDAsMTAuMDA0MTcgLTUuMDUzMDUsMCAwLC00LjAyNjY3IC01LjA1MzA2LDAgMCwtNS45NTI0OCAxMC4xMDYxMSwtMC4wMjUgeiBtIC05NS45MDcsMC40NTAxOCA1LjA1MzA2LDAgMCw1LjAwMjA5IC01LjA1MzA2LDAgMCwxMC4wMDQxOCAtNS4wNTMwNiwwIDAsNS4wMDIwOCAtNS4wNTMwNiwwIDAsMTAuMDA0MTYgLTEwLjA4MDg0LDAgMCwtMTAuMDA0MTYgNS4wNTMwNSwwIDAsLTUuMDAyMDggNS4wMjc3OSwwIDAsLTEwLjAwNDE4IDEwLjEwNjEyLDAgMCwtNS4wMDIwOSB6IG0gLTYwLjYxMTQxLDAuMzc1MTcgNS4wNTMwNiwwIDAsOS42MDQgLTUuMDUzMDYsMCAwLC05LjYwNCB6IG0gLTIwNy4wOTk1MDMsNC42MjY5MiA1LjA1MzA2LDAgMCw1LjAwMjA5IDUuMDUzMDUzLDAgMCw1LjAwMjA5IC01LjA1MzA1MywwIDAsNS4wMDIwOCAtNS4wNTMwNiwwIDAsNS4wMDIwOCAtNS4wMjc3OSwwIDAsLTEwLjAwNDE2IDUuMDI3NzksMCAwLC0xMC4wMDQxOCB6IG0gMTU2LjU5NDIxMywwIDUuMDUzMDUsMCAwLDEwLjAwNDE4IDUuMDUzMDYsMCAwLC01LjAwMjA5IDUuMDUzMDUsMCAwLDEwLjAwNDE3IC0xMC4xMDYxMSwwIDAsNS4wMDIwOCAtNS4wNTMwNSwwIDAsLTUuMDAyMDggLTUuMDUzMDYsMCAwLC01LjAwMjA4IDAsLTUuMDAyMDkgNS4wNTMwNiwwIDAsLTUuMDAyMDkgeiBtIDMwLjMxODMzLDAuMzI1MTQgNS4wMjc3OSwwIDAsNC45NTIwNyA1LjA1MzA1LDAgMCw0LjkyNzA1IC01LjA1MzA1LDAgMCw0Ljk1MjA3IC01LjAyNzc5LDAgMCw0Ljk1MjA2IC01LjA1MzA1LDAgMCwtOS44NzkxMiA1LjA1MzA1LDAgMCwtOS45MDQxMyB6IG0gMTYxLjU0NjE5LDQuMjI2NzYgNS4wNTMwNiwwIDAsNS4wMDIwOSA1LjA1MzA2LDAgMCw1LjAwMjA5IC01LjA1MzA2LDAgMCw1LjAwMjA3IC01LjA1MzA2LDAgMCw1LjAwMjA5IC01LjA1MzA2LDAgMCwtMTAuMDA0MTYgNS4wNTMwNiwwIDAsLTEwLjAwNDE4IHogbSAtMzAuMjQyNTQsMC40NTAxOSA1LjA1MzA2LDAgMCwxMC4wMDQxNyA1LjA1MzA2LDAgMCwtNS4wMDIwOCA0Ljk3NzI2LDAgMCw5LjU1Mzk3IC01LjA1MzA1LDAgMCwwLjQ1MDE5IC00Ljk3NzI3LDAgMCw0LjU1MTkgLTAuMDc1OCwwIDAsMC40NTAxOCAtNC45NzcyNywwIDAsLTUuMDAyMDggLTUuMDI3NzgsMCAwLC01LjAwMjA4IDAsLTUuMDAyMDggNS4wMjc3OCwwIDAsLTUuMDAyMDkgeiBtIC0zMDMuMDU3MDIsOS45NzkxNiAwLDAuMDI1MSAtNS4wNTMwNywwIDUuMDUzMDcsLTAuMDI1MSB6IgogICAgICAgLz4KICA8L2c+Cjwvc3ZnPgo=" alt="Logo von Kokakolako.de" />
		</header>
	</a>