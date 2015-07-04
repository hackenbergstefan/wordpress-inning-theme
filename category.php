<?php get_header(); ?>

	<main role="main">
        <div class="page-title"><?php single_cat_title(); ?></div>
		<!-- section -->
		<section>
			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
