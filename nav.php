<div class='title-bar'>
  <div class='title-bar__inner'>
    <div class='logo' title='Home'>
      <a href='<?php echo get_site_url(); ?>'>
        <img src='<?php echo get_template_directory_uri(); ?>/img/logo.png' alt='ANE Logo' />
      </a>
    </div>
    <div class='title-bar-nav'>
      <div class='item'>
        <i class="far fa-question-circle"></i>
        <div class='msg'>About</div>
      </div>
      <div class='item'>
        <i class="far fa-user"></i>
        <div class='msg'>Log In</div>
      </div>
      <div class='item'>
        <i class="far fa-envelope"></i>
        <div class='msg'>Contact</div>
      </div>
    </div>
  </div>
</div>

<div class='nav'>
  <div class='nav__inner'>
    <?php
      $title = lcfirst(get_the_title());
      $slugs = array('home', 'beds', 'cabinets', 'shelves', 'casegoods', 'tables');
      foreach($slugs as $slug): ?>
      <div class='<?php echo ($title === $slug ? 'item active' : 'item'); ?>'>
        <div class='under'></div>
        <div class='over'>
          <a href='<?php echo get_site_url() . "/" . $slug; ?>/'>
            <?php echo $slug; ?>
          </a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
