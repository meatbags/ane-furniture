<?php
  get_header();
  get_template_part('nav');
  get_template_part('breadcrumb');
?>
<div class='login'>
  <div class='login__inner'>

    <div class='pane'>
      <div class='pane-half'>
        <div class='pane-content'>
          <img src='<?php echo get_template_directory_uri(); ?>/img/logo.png' alt='ANE Logo' />
          <div class='msg'>ANE Member Login</div>
        </div>
      </div>
      <div class='pane-half'>
        <div class='pane-content'>
          <?php
            if (!is_user_logged_in()) {
              $args = array(
                'redirect' => admin_url(),
                'form_id' => 'loginform-custom',
                'label_username' => __( 'Username:' ),
                'label_password' => __( 'Password:' ),
                'label_remember' => __( 'Remember me' ),
                'label_log_in' => __( 'Log In' ),
                'remember' => true
              );
              wp_login_form( $args );
            } else {
              wp_loginout( home_url() ); ?>
              <br />
              <a href='<?php echo get_bloginfo('url'); ?>/wp-admin/' target='_blank'>Members Area</a>
              <?php
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_template_part('footer'); ?>
