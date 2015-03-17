<?php get_header(); ?>
	<!-- header -->

		<div class="content-wrapper">
			
			<?php get_sidebar(); ?>
			<!-- sidebar -->
  			<?php while (have_posts()) : the_post(); ?>

					<div class="post">
						<h1 class="post__h2"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>

					<div class="post">
						<?php comments_template(); ?>
					</div>

			<?php endwhile; ?>
			<div class="previous_next_posts">
				<?php previous_post_link('Предыдущая - %link <br>'); ?>
				<?php next_post_link('Следующая - %link'); ?>
				<?php posts_nav_link(); ?>
			</div>

		</div>

	</div>

<?php get_footer(); ?>
	<!-- footer -->