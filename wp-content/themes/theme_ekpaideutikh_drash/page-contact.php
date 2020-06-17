<!--    About page  -->

<?php get_header();

while (have_posts()){
the_post();
?>
<main>
    <h2 class="page-heading"><?php the_title(); ?></h2>

    <div id="post-container">




                <div class="card-description">
                    <?php the_content(); ?>
                </div>




        <?php } ?>


    </div>


    <!--   Έχω εδώ το main γιατί το footer μου έβγεε μαλακισμένα  -->




