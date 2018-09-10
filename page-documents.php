<?php
  get_header();
  get_template_part('nav');
  get_template_part('breadcrumb');
?>
<div class='documents'>
  <div class='documents__inner'>
    <?php if (is_user_logged_in()):
      $user = wp_get_current_user(); ?>
      Documents
    <?php else: ?>
      You are not logged in. <a href='<?php echo get_bloginfo('url'); ?>/login/'>Log in here</a>
    <?php endif; ?>
  </div>
</div>
<?php get_template_part('footer'); ?>
