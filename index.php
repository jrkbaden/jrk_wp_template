<?php/*
* Programmiert von Sascha Schnetz - http://www.awaits.eu
* Hinweis zu diesem Template:
* Startseite
*/?>

<?php get_header(); ?>

<div class="content_mitte">
		
		<?php
			$page = get_page_by_title('Start');
			
			$args = array(
  				'post_type' => 'page',
  				'post__in' => array($page->ID)
  			);
			query_posts($args);
		?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!-- Start the Loop. -->

		<div class="csc-textpic csc-textpic-intext-right">
			<?php if ( has_post_thumbnail() ) { ?>
			<div class="csc-textpic-imagewrap">
				<dl class="csc-textpic-image csc-textpic-firstcol csc-textpic-lastcol" style="width:360px;">
					<dt><?php the_post_thumbnail('medium'); ?></dt>
					<?php if ( get_post(get_post_thumbnail_id())->post_excerpt ) { ?>
						<dd class="csc-textpic-caption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></dd>
					<?php } ?>
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

		<?php query_posts('category_name=Startseite'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!-- Start the Loop. -->
		<a id="c1"></a>
		<!--<h2 class="csc-firstHeader"><?php echo get_the_title(); ?>  </h2>-->

		<div class="csc-textpic csc-textpic-intext-right">
			<?php if ( has_post_thumbnail() ) { ?>
			<div class="csc-textpic-imagewrap">
				<dl class="csc-textpic-image csc-textpic-firstcol csc-textpic-lastcol" style="width:360px;">
					<dt><?php the_post_thumbnail('medium'); ?></dt>
					<?php if ( get_post(get_post_thumbnail_id())->post_excerpt ) { ?>
						<dd class="csc-textpic-caption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></dd>
					<?php } ?>
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
	<div class="cleaner"></div>
</div>
<!-- End MITTE -->

<?php get_footer(); ?>