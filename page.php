<?php/*
* Programmiert von Sascha Schnetz - http://www.awaits.eu
* Hinweis zu diesem Template:
* Template für Standard-Seiten wie z.B. Impressum, Kontakt, ...
*/?>

<?php get_header(); ?>

	<div class="content_mitte">
	
	<?php
  		$ref_post = empty($post->post_parent) ? $post->ID : $post->post_parent;
 		$children = wp_list_pages('title_li=&child_of='.$ref_post.'&echo=0');
  		if ($children) {
  		  echo "<ul class='mobile_submenu'>
				$children
			</ul>";
  		}
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!-- Start the Loop. -->
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

		
		<?php if (get_the_title() == "Start") { ?> 
		<div class="cleaner"></div><br><hr><br>
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
		<?php } ?>
		<div class="cleaner"></div>
		<!-- End Themenbox -->
		
	</div> 
	<!-- End Content_Mitte -->
	<div class="cleaner"></div>
</div>
<!-- End MITTE -->

<?php get_footer(); ?>