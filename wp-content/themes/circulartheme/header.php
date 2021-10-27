<!doctype html>
<html lang='it'>
  <head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=, initial-scale=1.0' />
    <meta http-equiv='X-UA-Compatible' content='ie=edge' />

    <meta name='description' content='Prototipo di un sito web per un negozio di vestiti' />
    <meta name='keywords' content='negozio shop vestiti abiti usato riciclo' />
    <meta name='author' content='Michela Cerro' />
    <meta name='copyright' content='Program on WordPress. Theme by Michela Cerro.
    Test Logo from pngkey.com. Photos from Pexels by Anete Lusina, Antony Shkraba,
    Arina Krasnikova, Charlotte May, cottonbro, Daria Shevtsova, Dasha Musohranova,
    Diana Titenko, Dmitriy Ganin, George Milton, jasmin chew, julie aagaard, Karolina
    Grabowska, Karolina Ostrzolek, Kristina Paulshtite, Ksenia Chernaya, Liza Summer,
    maadhuri g, Madison Inouye, Maryia Plashchynskaya, Meruyert Gonullu, Miriam Alonso,
    Olga Lioncat, Pixebay, Richard Claire, RODNAE Productions, ROMAN ODINTSOV, Ron
    Lach, Rulo Davila, San Lion, Skylar Kang, Sorapong Chaipanya, Teona Swift, Vlada
    karpovich, Надежда Мустафаева' />

    <?php wp_head(); ?>
  </head>

  <body class='d-flex flex-column justify-content-between align-items-center'>
    <header class='p-3 w-100 d-flex justify-content-between align-items-center'>
      <a href='http://localhost/circular'>
        <img src='<?php echo get_template_directory_uri(); ?>/images/logo.png' alt='logo' class='logo' style='width: 90px;' />
      </a>
      <div>
        <button id='menu-icon' class='has-white-background-color border-0'>
        <!-- <button id='menu-icon' class='has-white-background-color border-0' data-target='#menu-block-out-header-container'> -->
          <span class='has-black-background-color'></span>
          <span class='has-black-background-color'></span>
          <span class='has-black-background-color'></span>
        </button>
        <?php wp_nav_menu(array(
            'theme_location'=>'primary',
            'container'=> false,
            'menu_class'=> 'nav',
            'menu_id' => 'menu-block-in-header'
          ));
        ?>
      </div>
    </header>
    <?php wp_nav_menu(array(
      'theme_location' => 'primary',
      'container' => false,
      'menu_class' => 'w-100 nav navbar-nav flex-column text-center p-3',
      'menu_id' => 'menu-block-out-header'
    ));
