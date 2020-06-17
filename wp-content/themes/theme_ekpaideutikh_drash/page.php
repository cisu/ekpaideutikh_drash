<!--    About page  -->

<?php get_header();

while (have_posts()){
the_post();
?>
<main>
    <h2 class="page-heading"><?php the_title(); ?></h2>
    <h2 class="page-heading"><a href="<?php echo site_url('/contact'); ?>">Επικοινωνήστε μαζί μας</a></h2>
<div id="post-container">
    <section id="blogpost">
        <div class="card">

            <?php if(has_post_thumbnail()) { ?>

            <div class="card-image">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
            </div>

            <?php } ?>

            <div class="card-description">
               <?php the_content(); ?>
            </div>
        </div>

    </section>

    <?php } ?>

    <aside id="sidebar">
       <?php dynamic_sidebar('main_sidedar') ?>
    </aside>
</div>


<!--   Έχω εδώ το main γιατί το footer μου έβγεε μαλακισμένα  -->



<?php get_footer(); ?>
