<?php get_header(); ?>

  <article class="col-md-12">

    <h1 class="ctitle"><?php _e( 'Latest Posts', 'wpeasy' ); ?></h1>
    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>

  </article>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
