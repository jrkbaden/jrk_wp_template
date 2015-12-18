<?php 
/*
** Programmiert von Sascha Schnetz - http://www.awaits.eu
** Hinweis zu diesem Template:
** Header der Webseite
**/
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>	<?php echo get_the_title(); ?> </title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>


<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/text.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/druck.css" media="print">
<link type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/pics/favicon.ico" rel="shortcut icon">

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascript/mootools.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascript/mininavi.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascript/standard.js"></script>
<script type="text/javascript">
/*<![CDATA[*/ 
<!--
function openPic(url,winName,winParams){
	var theWindow = window.open(url,winName,winParams);
	if (theWindow){theWindow.focus();}
} 
// -->
/*]]>*/
</script>

</head>


<body <?php body_class(); ?> >


<div id="page">

<!-- OBEN -->
<div class="oben">
	
	<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Home"></a></div>
	<div class="content_oben">
		<div id="menu1"><?php wp_nav_menu( array( 'theme_location' => 'menu1' ) ); ?></div>

		<div id="suche"><?php include (TEMPLATEPATH . '/searchform.php'); ?></div>

		<div id="miniNavi">
			<div id="toolTip" class="toolTip">&nbsp;</div>
			<div id="btnKlein" class="btn klein">&nbsp;</div>
			<div id="btnMittel" class="btn mittel">&nbsp;</div>
			<div id="btnGross" class="btn gross">&nbsp;</div>
			<div id="btnKontrast" class="btn kontrast">&nbsp;</div>
		</div>
		<div class="cleaner"></div>
		<div id="menu2">
			<?php wp_nav_menu( array( 'theme_location' => 'menu2' ) ); ?>
			<?php /*<div id="meinjrk"><a href="http://www.mein-jrk.de/" title="Mein-JRK">mein-jrk.de</a></div>*/?>
			<?php
			$ref_post = empty($post->post_parent) ? $post->ID : $post->post_parent;
 			$children = wp_list_pages('title_li=&child_of='.$ref_post.'&echo=0');
  			if ($children) {
  		  		echo "<ul class='desktop_submenu'>
					$children
					</ul>";
  			}?>
		</div><!-- End Menu2 & MeinJRK Button -->
		<div class="cleaner"></div>
	</div> <!-- End CONTENT OBEN -->
	
</div> <!-- End OBEN -->

<!-- MITTE -->
<div class="mitte">
	<?php get_sidebar(); ?>