<?php get_header(); ?>

<!--    render the <main> from header(if is not the front page)-->


<h2 class="page-heading">Αποτελέσματα αναζήτησης: <?php echo get_search_query(); ?></h2>

<?php if (have_posts()) { ?>


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
                        Δημιουργήθηκε από <?php the_author(); ?>
                        στις <?php the_time('F j Y,'); ?> <?php if (get_post_type() == 'post') { ?>
                            στην κατηγορία
                            <a href="#"><?php echo get_the_category_list(', ') ?></a>
                        <?php } ?>
                    </div>
                    <p>
                        <?php echo wp_trim_words(the_excerpt(), 30); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Διάβασε περισσότερα</a>
                </div>
            </div>

        <?php }
        wp_reset_query();
        ?>

    </section>

    <?php
} else {?>
    <div class="no-results">
        <h2>Δεν βρέθηκαν αποτελέσματα στην αναζήτηση</h2>
        <h3>Μην ανησυχείτε</h3>
        <h3>Κοίτα τα παρακάτω links:</h3>
        <ul>
            <li><a href="<?php echo site_url('/blog') ?>">Όλα τα Post</a></li>
            <li><a href="<?php echo site_url('/projects') ?>">Λίστα Μαθημάτων</a></li>
            <li><a href="<?php echo site_url('/about') ?>">Σχετικά με την ΕΚΠΑΙΔΕΥΤΙΚΗ ΔΡΑΣΗ</a></li>
            <li><a href="<?php echo site_url('/home') ?>">Αρχική</a></li>
        </ul>
    </div>
<?php
}
?>

<div class="pagination">
    <?php echo paginate_links(); ?>
</div>

<?php get_footer(); ?>



