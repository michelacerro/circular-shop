<?php get_header(); ?>

<div class='row w-100 p-3'>

  <div class='col'>
    <!-- header section -->
    <h2 class='p-3 text-center'><?php the_archive_title(); ?></h2>
    <?php the_archive_description(); ?>

    <!-- posts section -->
    <div class='d-flex flex-wrap justify-content-center'>
      <?php
        if(have_posts()):
          while(have_posts()): the_post();
            get_template_part('content', get_post_format());
          endwhile;
        endif;
      ?>
    </div>

    <!-- links to posts section -->
    <div class='text-center mt-3 posts-links'>
      <p><?php posts_nav_link(' — ', '&laquo; Articoli più recenti', 'Articoli più vecchi &raquo;'); ?></p>
    </div>
  </div>

  <!-- sidebar -->
  <div class='col-12 col-md-3 col-lg-3 col-xl-2 m-2'>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
