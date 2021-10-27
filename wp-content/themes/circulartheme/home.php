<?php get_header(); ?>

<div class='row justify-content-md-center w-100 p-3'>
  <div class='col'>

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

    <!-- link to posts section -->
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
