<?php get_header(); ?>

<div class='row justify-content-md-center mw-100 p-3'>

  <!-- article -->
  <div class='col'>
    <?php
      if(have_posts()):
        while(have_posts()): the_post(); ?>

          <article id='post-<?php the_ID(); ?>' <?php post_class('px-3'); ?>>

            <!-- header section -->
            <div class='d-flex justify-content-between'>
              <div>
                <div><?php the_time('j F Y'); ?></div>
                <h1 class='post-title has-aqua-green-color'><?php the_title(); ?></h1>
                <div class='my-5'>
                  <div class='post-category'><?php the_category(''); ?></div>
                  <small class='post-tag'><?php the_tags(''); ?></small>
                </div>
              </div>

              <div class='responsive-thumbnail'>
                <?php if(has_post_thumbnail()): ?>
                  <div class='m-1'><?php the_post_thumbnail('full'); ?></div>
                <?php endif; ?>
              </div>
            </div>

            <!-- text section -->
            <?php the_content(); ?>

            <!-- links to posts section -->
            <div class='d-flex justify-content-between posts-links'>
              <div>
                <?php previous_post_link(); ?>
              </div>
              <div>
                <?php next_post_link(); ?>
              </div>
            </div>

            <hr/>

            <!-- comments section -->
            <?php
              if(comments_open()): comments_template();
            else: echo '<h4 class="text-center mt-2">Mi spiace, i commenti sono chiusi al momento.</h4>';
              endif;
            ?>
          </article>

        <?php endwhile;
      endif;
    ?>
  </div> <!-- end article -->

  <!-- sidebar -->
  <div class='col-12 col-md-3 col-xl-2 m-2'>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
