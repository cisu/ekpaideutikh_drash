<?php get_header(); ?>

<!--    render the <main> from header(if is not the front page)-->


    <a href="<?php echo site_url('/blog'); ?>">
        <h2 class="page-heading">Όλα τα μαθήματα</h2>
        <!--        < ? php  the_archive_title(); ?> kai sou deixnei to titlo tou archive -->
    </a>

    <section>

        <?php

        while (have_posts()) {
            the_post();

            ?>

            <div class="card">
                <div class="card-image">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="post image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <div class="card-meta">
                        Δημιουργήθηκε από <?php the_author(); ?> στις <?php the_time('F j Y,'); ?> στην κατηγορία
                        <a href="#"><?php echo get_the_category_list(',') ?></a>
                    </div>
                    <p>
                        <?php echo wp_trim_words(the_excerpt(), 30); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
                </div>
            </div>

        <?php }
        wp_reset_query();
        ?>

    </section>

    <div class="pagination">
        <?php echo paginate_links(); ?>
    </div>

    <?php get_footer(); ?>


