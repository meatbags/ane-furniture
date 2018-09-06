<?php
  $title = get_the_title();
  if ($title != 'Home'):
    $url = get_bloginfo('url');
    $type = get_post_type();
    ?>
    <div class='breadcrumb'>
      <div class='breadcrumb__inner'>
        <div class='item'><a href='<?php echo $url; ?>/'>Home</a></div>/
        <?php if ($type != 'page'): ?>
          <div class='item'>
            <a href='<?php echo $url . '/' . $type; ?>'>
              <?php echo get_post_type(); ?>
            </a>
          </div> /
        <?php endif; ?>
        <div class='item'><?php echo $title; ?></div>
      </div>
    </div>
<?php endif; ?>
