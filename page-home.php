<?php get_header(); ?>
<?php get_template_part('nav'); ?>
<?php get_template_part('carousel'); ?>
<?php get_template_part('cats'); ?>

<div id='about' class='about'>
  <div class='about__inner'>
    <?php
      $url = get_bloginfo('url');
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
