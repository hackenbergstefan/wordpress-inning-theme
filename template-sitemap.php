<?php /* Template Name: Sitemap Template */ get_header(); ?>

<main role="main">
    <div class="page-title"><?php the_title(); ?></div>
    <section>
        <div id="sitemap">
            <?php generate_sitemap(['Kontakt', 'Impressum']); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
