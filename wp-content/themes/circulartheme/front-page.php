<?php get_header(); ?>

<div class='flex flex-column align-items-center w-100'>
    <?php
      if(have_posts()):
        while(have_posts()): the_post();
          the_content();
        endwhile;
      endif;
    ?>
</div>

<?php get_footer(); ?>
