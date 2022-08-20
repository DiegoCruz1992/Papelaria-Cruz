<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>./assets/css/style.css">
  <?php wp_head() ?>
  <title>Papelaria Cruz</title>
</head>

<body>
  <header>
    <nav class="container">
      <div class="menu">
       <img src="<?php echo get_theme_file_uri('assets/img/logo2.png')?>" alt="logo papelaria Cruz">
        <ul>
          <li><a class="title" href="#home">Inicio</a></li>
          <li><a class="title" href="#about">Sobre</a></li>
          <li><a class="title" href="#products">Produtos</a></li>
          <li><a class="title" href="#contact">Contato</a></li>
        </ul>
      </div>
    </nav>
  </header>