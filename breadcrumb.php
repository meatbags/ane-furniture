<?php
  $title = get_the_title();
  if ($title != 'Home'):
    $url = get_bloginfo('url');
    $type = get_post_type();
    ?>
    <div class='breadcrumb'>
      <div class='breadcrumb__inner'>
        <div class='list'>
          <div class='item'><a href='<?php echo $url; ?>/'>Home</a></div>
          <div class='divider'>&rarr;</div>
          <?php if ($type != 'page' && $type != 'category'): ?>
            <div class='item'>
              <a href='<?php echo $url . '/' . $type; ?>'>
                <?php echo get_post_type(); ?>
              </a>
            </div>
            <div class='divider'>&rarr;</div>
          <?php endif; ?>
          <div class='item'><?php echo $title; ?></div>
        </div>
      </div>
    </div>
<?php endif; ?>
