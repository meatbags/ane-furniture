<?php
  get_header();
  get_template_part('nav');
  get_template_part('breadcrumb');
?>
<div class='login'>
  <div class='login__inner'>
    <div class='title'>Log In</div>
    <?php if (is_user_logged_in()) {
      wp_loginout(home_url());
    } else {
      $redirect = get_bloginfo('url') . '/members/';
      $args = array(
        'redirect' => $redirect,
        'form_id' => 'loginform-custom',
        'label_username' => __('Username:'),
        'label_password' => __('Password:'),
        'label_remember' => __('Remember me'),
        'label_log_in' => __('Log In'),
        'remember' => true
      );
      wp_login_form( $args );
    } ?>
  </div>
</div>
<?php get_template_part('footer'); ?>
