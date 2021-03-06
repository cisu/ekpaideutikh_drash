<!--    blogpost page   -->

<?php get_header();

while (have_posts()){
the_post();
?>

    <h2 class="page-heading"><?php the_title(); ?></h2>
<div id="post-container">
    <section id="blogpost">
        <div class="card">
            <div class="card-meta-blogpost">
                Δημιουργήθηκε από <?php the_author(); ?> στις <?php the_time('F j Y'); ?>
                <?php if(get_post_type() == 'post'){ ?>
                 στην κατηγορία
                <a href="#"><?php echo get_the_category_list(', ') ?></a>
                <?php } ?>
            </div>
            <div class="card-image">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
            </div>
            <div class="card-description">
                <?php the_content(); ?>
            </div>
        </div>

        <div id="comments-section">
            <?php

            $fields = array(

                'author' =>
                    '<input placeholder="Όνομα" id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) .
                    '" size="30"' . $aria_req . ' />',

                'email' =>
                    '<input placeholder="Email" id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) .
                    '" size="30"' . $aria_req . ' />',

            );

            $args = array(
                'title_reply' => 'Μοίρασε τις σκέψεις σου.',
                'fields' => $fields,
                'comment_field' => '<textarea placeholder="Το σχόλιο σας" id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
                    '</textarea>',
                'comment_notes_before' => '<p class="comment-notes">Το email σας δεν θα δημοσιευτεί. Όλα τα πεδία χρειάζονται να συμπληρωθούν.</p>'
            );

            comment_form($args);

            $comments_number = get_comments_number();

            if ($comments_number != 0) {
                ?>

                <div class="comments">
                    <h3>Όλα τα σχόλια.</h3>
                    <ol class="all-comments">
                        <?php

                        $comments = get_comments(array(
                            'post_id' => $post->ID,
                            'status' => 'approve'
                        ));

                        wp_list_comments(array(
                            'per_page' => 15
                        ), $comments);

                        ?>
                    </ol>
                </div>


                <?php
            }

            ?>
        </div>
    </section>

    <?php } ?>

<!--  sidebar  -->

    <aside id="sidebar">
       <?php dynamic_sidebar('main_sidebar') ?>
    </aside>
</div>

<?php get_footer(); ?>