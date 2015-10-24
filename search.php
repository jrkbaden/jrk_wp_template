<?php/*
* Programmiert von Sascha Schnetz - http://www.awaits.eu
* Hinweis zu diesem Template:
* Template für die Suchseite
*/?>

<?php get_header(); ?>

	<div class="content_mitte">

	
<?php if($s=="Suchbegriff") : ?>
	<h2>Suche</h2>
	<p>Geb in das Suchfeld einen Begriff ein und klicke auf "Suchen", um nach die Webseite nach diesem Begriff zu durchsuchen.</p>
	<br>
	<?php get_search_form(); ?>
<?php else : ?>
	<?php if (have_posts()) : ?>
		<?php 
		global $wp_query;
		$total_results = $wp_query->found_posts; ?>
		<h2>Suchergebnisse</h2>
		<p class="info">Deine Suche mit dem Suchbegriff "<strong><?php echo $s ?></strong>" ergab <?php echo $total_results ?> treffer.</p>
 		<?php while (have_posts()) : the_post(); ?>

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
				<?php the_excerpt(); ?> 
			</div>
		<?php endwhile; ?>
  
	<?php else : ?>
		<h2>Die Suche war leider erfolglos...</h2>
		<p class="info">Deine Suche mit dem Suchbegriff "<strong><?php echo $s ?></strong>" ergab leider keine Treffer. Versuche es mit einer erneuten Suche.</p>
 	<?php endif; ?>

	<br>
	<?php get_search_form(); ?>
<?php endif; ?>	

	</div> 
	<!-- End Content_Mitte -->
	<div class="cleaner"></div>
</div>
<!-- End MITTE -->

<?php get_footer(); ?>