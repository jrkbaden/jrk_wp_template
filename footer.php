<?php/*
* Programmiert von Sascha Schnetz - http://www.awaits.eu
* Hinweis zu diesem Template:
* Footer der Webseite
*/?>

<!-- UNTEN -->
<div class="unten">
	<div class="footer_navi">
	<p class="copyright">
		<a href="http://creativecommons.org/licenses/by-sa/3.0/de/" rel="license"><img src="<?php echo get_template_directory_uri(); ?>/pics/cc-by-sa-80x15.png" style="border-width:0" alt="Creative Commons Lizenzvertrag"><?php //Original unter http://i.creativecommons.org/l/by-sa/3.0/de/80x15.png ?></a>
	</p>
	<?php wp_nav_menu( array( 'theme_location' => 'menu1' ) ); ?>
	<div class="cleaner"></div>
</div>

<?php wp_footer(); ?>
<!-- End UNTEN -->

</body>
</html>