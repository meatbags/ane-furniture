<?php
  get_header();
  get_template_part('nav');
  get_template_part('breadcrumb');
  $url = get_bloginfo('url');
  if (have_posts()):
    while (have_posts()):
      the_post();
?>
<div class='contact'>
  <div class='contact__inner'>
    <div class='title'><?php the_title(); ?></div><br /><br />
    <div class='pane'>
      <?php the_content(); ?>
      <br />
    </div>
    <div class='pane'>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.594979066464!2d150.87726905875925!3d-33.84855425513334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b1296ded8184ce1%3A0xd44920a22aa7e88a!2sANE+Furniture!5e0!3m2!1sen!2sau!4v1536723076699"></iframe>
    </div>
  </div>
</div>
<?php
    endwhile;
  endif;
get_template_part('cats');
get_template_part('footer');
?>
