/*
* Template Name: Main page
*/
<?php get_header(); ?>

<div class="content">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
    
    <?php
    render_theme_section('hero', 'hero_');
    render_theme_section('gallery', 'gallery_');
    ?>

    <?php get_template_part('templates/story'); ?>
    <?php get_template_part('templates/about'); ?>
    <?php get_template_part('templates/stages'); ?>
    <?php get_template_part('templates/cost'); ?>
</div>

<div class="overlay"></div>
<div class="modal-cost">
    <div class="modal-cost__content">
        <img class="modal-cost__image" src="" alt="">
        <button class="modal-cost__btn-close" type="button">x</button>
    </div>
</div>
<?php get_footer(); ?>