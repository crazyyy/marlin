<?php /* Template Name: Home Page  */ get_header(); ?>

  <article class="col-md-12">

    <h1 class="ctitle"><?php the_title(); ?></h1>
    <?php the_content(); ?>

  </article>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
