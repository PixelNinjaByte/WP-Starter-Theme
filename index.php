<?php get_header(); ?>

<main class="site-main">

    <?php
    if (have_posts()):
        while (have_posts()): the_post();
            get_template_part('template-parts/content');
        endwhile;
    else:
        echo "<p>No posts found.</p>";
    endif;
    ?>

</main>

<?php get_footer(); ?>
