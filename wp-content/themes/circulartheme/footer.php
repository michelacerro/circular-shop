<?php
  if(is_front_page()): $footer_border = '';
  else: $footer_border = 'mt-4 border-top';
  endif;
?>

    <footer class='w-100 p-3 row align-items-center <?php echo $footer_border; ?>'>
      <div class='col text-center'>
        <h3>Circular Shop</h3>
        <p>Via dei Ciclamini, 5 - Torino (TO)</p>
        <p>+39 019 7246 234 <br/> info@circularshop.it</p>
      </div>

      <div class='col text-center'>
        <a href='http://localhost/circular'>
          <img src='<?php echo get_template_directory_uri(); ?>/images/logo.png' alt='logo' class='logo' style='width: 90px;' />
        </a>
        <?php wp_nav_menu(array(
            'theme_location'=>'secondary',
            'container'=> false,
            'menu_class'=>'nav flex-column'
          ));
        ?>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
