<?php get_header(); ?>

<main>
  

  <?php get_template_part("components/banner"); ?>
  <?php get_template_part("components/about"); ?>
  <div class="container">
  <?php get_template_part("components/store"); ?>
  <?php get_template_part("components/products"); ?>
  </div>
</main>

<?php get_footer(); ?>