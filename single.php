<?php/*
* Programmiert von Sascha Schnetz - http://www.awaits.eu
* Hinweis zu diesem Template:
* Template für Einzelseiten (z.B. über den Weiterlesen Link in Newsbeiträgen)
*/?>

<?php get_header(); ?>

	<div class="content_mitte">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!-- Start the Loop. -->
		<a id="c1"></a>
		<h2 class="csc-firstHeader"><?php the_title(); ?></h2>

		<div class="csc-textpic csc-textpic-intext-right">
			<?php if ( has_post_thumbnail() ) { ?>
			<div class="csc-textpic-imagewrap">
				<dl class="csc-textpic-image csc-textpic-firstcol csc-textpic-lastcol" style="width:360px;">
					<dt><?php the_post_thumbnail('medium'); ?>
<?php //<img src="./uploads/bilder/platzhalter_360x246.jpg" width="360" height="246" border="0" alt="Hier erscheint eine Beschreibung des Bildes. Foto: Name des Fotografen" title="Hier erscheint der Bildtitel. Foto: Name des Fotografen">
?>
					</dt>
					<dd class="csc-textpic-caption">Lorem ipsum dolor sit amet.</dd>
				</dl>
			</div>
			<?php } ?>
			<div class="csc-textpic-text">
				<?php the_content("mehr"); ?>
			</div>
		</div>
		<div class="tx-bitpagemenu-pi1">
		<?php edit_post_link('Artikel bearbeiten','',''); ?>
		</div>

		<?php endwhile; else : ?><!-- If there are no items in The Loop -->
			<p><?php _e( 'Leider gibt es keine passenden Einträge.' ); ?></p>
		<?php endif; ?><!-- Stop The Loop. -->
		<div class="cleaner"></div>
		<!-- End Themenbox -->
		
	</div> 
	<!-- End Content_Mitte -->

	<div class="content_rechts"></div>
	<div class="cleaner"></div>
</div>
<!-- End MITTE -->

<?php get_footer(); ?>