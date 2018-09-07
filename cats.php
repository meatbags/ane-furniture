<?php
  $url = get_bloginfo('url') . '/';
  $temp = get_template_directory_uri() . '/';
  $cats = array('beds', 'suites', 'cabinets', 'shelves', 'drawers', 'tables', 'coffeetables', 'wardrobes');
  $classText = (get_the_title() == 'Home') ? 'cat parallax-hide' : 'cat';
?>

<div class='categories'>
  <div class='categories__inner'>
    <?php
      foreach ($cats as $cat):
        $catImageUrl = $temp . 'img/' . $cat . '.png';
        $catUrl = $url . 'category/' . $cat;
        ?>
    <div class='<?php echo $classText; ?>'>
      <a href='<?php echo $catUrl; ?>'>
        <div class='cat__inner'>
          <div class='cat-image'>
            <img src='<?php echo $catImageUrl; ?>' alt=''/>
          </div>
          <div class='cat-name'>
            <?php echo $cat; ?>
          </div>
        </div>
      </a>
    </div>
    <?php endforeach; ?>
  </div>
</div>
