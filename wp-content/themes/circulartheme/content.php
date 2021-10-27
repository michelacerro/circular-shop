<div class='m-2 p-3 preview-post-container has-aqua-green-background-color'>
  <article id='post-<?php the_ID(); ?>' <?php post_class('h-100 d-flex flex-column justify-content-between text-center has-white-color'); ?>>
      <div class='mb-3'><?php the_time('j F Y'); ?>
        <?php the_title(sprintf('<h3 class="preview-post-title mt-2"><a href="%s">', esc_url(get_permalink())),'</a></h3>'); ?>
      </div>
      <?php if(has_post_thumbnail()): ?>
        <div class='h-100 d-flex justify-content-center align-items-end'><?php the_post_thumbnail('full'); ?></div>
      <?php endif; ?>
  </article>
</div>
