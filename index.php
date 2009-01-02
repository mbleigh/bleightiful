<?php get_header(); ?>
<div id="wrapper">
	<div id="content">

	<?php if (have_posts()) : ?>
    <div class="hfeed">
		<?php while (have_posts()) : the_post(); ?>

			<div class="post hentry" id="post-<?php the_ID(); ?>">
			  <span class="date published updated" title=""><?php the_time('F jS, Y') ?></span>
			  				
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" class="entry-title" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

				<div class="entry-content">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata">Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('Older Posts') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Posts') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Page Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
    </div>
	<?php endif; ?>
	</div>
  </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
</div>