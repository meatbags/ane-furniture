<?php $url = get_bloginfo('url'); ?>

<div class='title-bar'>
  <div class='title-bar__inner'>
    <div class='logo' title='Home'>
      <a href='<?php echo $url; ?>'>
        <img src='<?php echo get_template_directory_uri(); ?>/img/logo.png' alt='ANE Logo' />
      </a>
    </div>
    <div class='title-bar-nav'>
      <div class='item mobile-hide'>
        <a href='<?php echo $url; ?>/'>
          <i class="fas fa-home"></i>
          <div class='msg'>Home</div>
        </a>
      </div>
      <div class='item'>
        <a href='<?php echo $url; ?>/about/'>
          <i class="fas fa-question"></i>
          <div class='msg'>About</div>
        </a>
      </div>
      <div class='item'>
        <a href='<?php echo $url; ?>/contact/'>
          <i class="fas fa-envelope"></i>
          <div class='msg'>Contact</div>
        </a>
      </div>
      <div class='item'>
        <?php if (is_user_logged_in()): ?>
          <a href='<?php echo $url; ?>/members/'>
            <i class="fas fa-user"></i>
            <div class='msg'>Members</div>
          </a>
        <?php else: ?>
          <a href='<?php echo $url; ?>/login/'>
            <i class="fas fa-user"></i>
            <div class='msg'>Log In</div>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<div class='nav'>
  <div class='nav__inner'>
    <?php
      $title = lcfirst(get_the_title());
      $slugs = array('Beds', 'Bedroom Furniture', 'Living & Dining', 'Lounge & Chairs', 'Promotion');
      foreach($slugs as $slug):
        $clean = sanitize_title($slug);
        $mobileHide = ($slug == 'Living & Dining' || $slug == 'Lounge & Chairs') ? ' mobile-hide' : '';
        ?>
      <div class='<?php echo ($title === $clean ? 'item active' : 'item'); ?><?php echo $mobileHide; ?>'>
        <div class='under'></div>
        <div class='over'>
          <a href='<?php echo get_site_url() . "/" . $clean; ?>/'>
            <?php echo $slug; ?>
          </a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
