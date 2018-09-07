<?php
  get_header();
  get_template_part('nav');
  $url = get_bloginfo('url');
?>
<div class='carousel'>
  { CAROUSEL HERE }
</div>
<?php get_template_part('cats'); ?>
<div id='about' class='about'>
  <div class='about__inner'>
    <?php
      $q = new WP_Query('pagename=about');
      while($q->have_posts()):
        $q->the_post(); ?>
        <div class='content parallax parallax-slide'>
          <div class='title'>About Us</div><br /><br />
          <?php the_content(); ?>
          <br /><br />
          <a href='<?php echo $url; ?>/contact/'>Contact Us</a>
          &nbsp;&nbsp;&nbsp;
          <a href='<?php echo $url; ?>/contact/'>Directions</a>
        </div>
      <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </div>
</div>
<?php get_template_part('footer'); ?>
