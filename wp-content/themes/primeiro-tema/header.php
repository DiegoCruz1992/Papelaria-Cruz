<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>./assets/css/style.css">
  <?php wp_head() ?>

  <title>Papelaria Cruz</title>
</head>

<body>
  <header id="home">
    <nav>
      <div class="menu">
        <!-- <img src="<?php //echo get_theme_file_uri('assets/img/logo2.png')
                        ?>" alt="logo papelaria Cruz"> -->
        <img class="img-logo" src="<?= get_field('logo_header'); ?>" alt="logo papelaria Cruz">
        <ul>
          
          <li><a class="title" href="#about">Sobre</a></li>
          <li><a class="title" href="#products">Produtos</a></li>
          <li><a class="title" href="#footer">Contato</a></li>
        </ul>
      </div>
    </nav>
  </header>