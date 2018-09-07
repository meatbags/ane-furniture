<?php
  get_header();
  get_template_part('nav');
  $url = get_bloginfo('url') . '/';
  $temp = get_template_directory_uri() . '/';
?>
<div class='carousel'>
  { CAROUSEL HERE }
</div>
<div class='categories'>
  <div class='categories__inner'>
    <?php
      $cats = array('beds', 'suites', 'cabinets', 'shelves', 'drawers', 'tables', 'coffeetables', 'wardrobes');
      foreach ($cats as $cat):
        $catImageUrl = $temp . 'img/' . $cat . '.png';
        $catUrl = $url . 'category/' . $cat;
        ?>
    <div class='cat parallax-hide'>
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
<div class='about'>
  <div class='about__inner'>
    { ABOUT TEXT HERE }
  </div>
</div>
<?php get_template_part('footer'); ?>
