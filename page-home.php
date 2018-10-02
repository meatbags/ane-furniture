<?php
  $url = get_bloginfo('url');
  get_header();
  get_template_part('nav');
?>

<div class='home-page-graphic'></div>
<?php get_template_part('carousel'); ?>
<div class='home-page-graphic alt'></div>

<?php get_template_part('cats'); ?>

<div id='about' class='about'>
  <div class='about__inner'>
    <?php
      $q = new WP_Query('pagename=about');
      while($q->have_posts()):
        $q->the_post(); ?>
        <div class='content parallax parallax-slide'>
          <div class='title'>About Us</div><br />
          <?php the_content(); ?>
          <br />
          <a href='<?php echo $url; ?>/contact/'>Contact Us</a>
          &nbsp;&nbsp;&nbsp;
          <a href='<?php echo $url; ?>/contact/'>Directions</a>
        </div>
      <?php
      endwhile;
      wp_reset_query();
    ?>
  </div>
</div>
<?php get_template_part('footer'); ?>
