<?php
  get_header();
  get_template_part('nav');
  get_template_part('breadcrumb');
  $url = get_bloginfo('url');
  if (have_posts()):
    while (have_posts()):
      the_post();
?>
<div class='about about-single'>
  <div class='about__inner'>
    <div class='content parallax parallax-slide'>
      <div class='title'>About Us</div><br /><br />
      <?php the_content(); ?>
      <br /><br />
      <a href='<?php echo $url; ?>/contact/'>Contact Us</a>&nbsp;&nbsp;&nbsp;
      <a href='<?php echo $url; ?>/contact/'>Directions</a>
    </div>
  </div>
</div>
<?php
    endwhile;
  endif;
get_template_part('cats');
get_template_part('footer');
?>
