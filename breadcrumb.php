<?php
  $title = get_the_title();
  if ($title != 'Home'):
    $url = get_bloginfo('url');
    $type = get_post_type();
    $obj = get_post_type_object($type);
    ?>
    <div class='breadcrumb'>
      <div class='breadcrumb__inner'>
        <div class='list'>
          <div class='item'><a href='<?php echo $url; ?>/'>Home</a></div>
          <div class='divider'>&rarr;</div>
          <?php if ($type != 'page'):
            // get page URL suffix from post type
            $suffix = '';
            switch ($type) {
              case 'beds':
                $suffix = 'beds';
                break;
              case 'casegoods':
                $suffix = 'bedroom-furniture';
                break;
              case 'dining':
                $suffix = 'dining';
                break;
              case 'lounge_chairs':
                $suffix = 'lounge-chairs';
                break;
              case 'occasional':
                $suffix = 'occasional';
                break;
              case 'promotional':
                $suffix = 'promotional';
                break;
            }
            ?>
            <div class='item'>
              <a href='<?php echo $url . '/' . $suffix; ?>/'>
                <?php echo $obj->labels->singular_name; ?>
              </a>
            </div>
            <div class='divider'>&rarr;</div>
          <?php endif; ?>
          <div class='item'><?php echo $title; ?></div>
        </div>
      </div>
    </div>
<?php endif; ?>
