<?php
  get_header();
  get_template_part('nav');
?>
<div class='carousel'>
  { CAROUSEL HERE }
</div>
<?php get_template_part('cats'); ?>
<div id='about' class='about'>
  <div class='about__inner'>
    <?php
      $q = new WP_Query( 'pagename=about' );
      while($q->have_posts()):
        $q->the_post(); ?>
        <div class='content parallax parallax-shadow'>
          <div class='title'>About Us</div><br />
          <?php the_content(); ?>
        </div>
      <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </div>
</div>
<?php get_template_part('footer'); ?>
