<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>

    <title>Site ths Giwtas</title>
</head>
<body>

<div id="slideout-menu">
    <ul>
        <li>
            <a href="<?php echo site_url(); ?>">Αρχική</a>
        </li>
        <li>
            <a href="<?php echo site_url('/blog'); ?>">Ποστ</a>
        </li>
        <li>
            <a href="<?php echo site_url('/projects'); ?>">Μαθήματα</a>
        </li>
        <li>
            <a href="<?php echo site_url('/about'); ?>">Σχετικά με εμάς</a>
        </li>

        <div class="searchbox-slide-menu">
            <?php get_search_form(); ?>
        </div>


        <!--        <li>-->
        <!--            <input type="text" placeholder="Search Here">-->
        <!--        </li>-->
    </ul>
</div>


<nav>
    <div id="logo-img">
        <a href="<?php echo site_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-image.png" alt="logo img">
        </a>
    </div>
    <div id="menu-icon">
        <i class="fas fa-bars"></i>
    </div>
    <ul>
        <li>
            <a href="<?php echo site_url(); ?>"
                <?php if (is_front_page()) echo 'class="active"' ?>
            >Αρχική</a>
        </li>
        <li>
            <a href="<?php echo site_url('/blog'); ?>"
                <?php if (get_post_type() == 'post') echo 'class="active"' ?>
            >Ποστ</a>
        </li>
        <li>
            <a href="<?php echo site_url('/projects'); ?>"
                <?php if (get_post_type() == 'projects') echo 'class="active"' ?>
            >Μαθήματα</a>
        </li>
        <li>
            <a href="<?php echo site_url('/about'); ?>"
                <?php if (is_page('about')) echo 'class="active"' ?>
            >Σχετικά με εμάς</a>
        </li>
        <li>
            <div id="search-icon">
                <i class="fas fa-search"></i>
            </div>
        </li>
    </ul>
</nav>


<div id="searchbox">
    <?php get_search_form(); ?>
</div>

<?php if (!is_front_page()) { ?>
<main>
<?php } ?>