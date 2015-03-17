<?php get_header(); ?>
	<!-- header -->

		<div class="content-wrapper">
			
			<?php get_sidebar(); ?>
			<!-- sidebar -->
			<?php if (have_posts()) : ?>
  			<?php while (have_posts()) : the_post(); ?>

				<div class="post">
					<h1 class="post__h2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<?php the_content(); ?>
				</div>


  			<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
			    
			<?php else : ?>
			<?php endif; ?>
			<div class="page_pagination">
				<?php the_posts_pagination(array(
				    'end_size' => 2,
				    'mid_size' => 2,
				)) ?>
			</div>

		</div>

	</div>

<?php get_footer(); ?>
	<!-- footer -->