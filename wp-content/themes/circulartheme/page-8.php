<?php get_header(); ?>

<div class='container'>
  <div class='flex flex-column align-items-center has-white-color has-aqua-green-background-color p-5'>
      <?php
        if(have_posts()):
          while(have_posts()): the_post();
            the_content();
          endwhile;
        endif;
      ?>
  </div>
</div>

<?php get_footer(); ?>
