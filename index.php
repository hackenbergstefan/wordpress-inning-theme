<?php get_header(); ?>

<?php
    if( is_home() ) {
        $args = array( 'category__in' => array(3) );
        $args = ( $wp_query && $wp_query->query ) ? array_merge( $wp_query->query , $args ) : $args;
        query_posts( $args );
    }
?>

	<main role="main">
        <?php $current_page = max(1, get_query_var('paged')); ?>

        <div class="page-title">Startseite<?php if($current_page>1){echo ' (' . $current_page . ')';}?></div>
		<!-- section -->
		<section>
            <?php 
                // show 'Startseite' only on first page
                if( $current_page <= 1 ):
            ?>
                <?php 
                    $startseite_query = new WP_Query('pagename=Startseite');
                    if( $startseite_query ){
                        $startseite_query->the_post();
                    }
                ?>
                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php the_content(); ?>

                    <?php edit_post_link(); ?>
                </article>
                <!-- /article -->
                <?php wp_reset_postdata(); ?>
            <?php
                endif; //endif( $current_page <= 1 ):
            ?>


			<?php get_template_part('loop_noexcerpt'); ?>

		</section>
		<!-- /section -->
		<?php get_template_part('pagination'); ?>

	</main>

<?php get_footer(); ?>
