<?php
  $url = get_bloginfo('url') . '/';
  $temp = get_template_directory_uri() . '/';
  $cats = [
    ['beds', 'Beds', 'beds/'],
    ['suites', 'Bedroom Furniture', 'bedroom-furniture/'],
    ['shelves', 'Tallboys', 'bedroom-furniture/?filter=tallboys'],
    ['drawers', 'Bedside', 'bedroom-furniture/?filter=bedsidetables'],
    ['cabinets', 'Entertainment', 'occasional/?filter=entertainmentunits'],
    ['tables', 'Dining', 'dining/'],
    ['coffeetables', 'Coffee Tables', 'occasional/?filter=coffeetables'],
    ['wardrobes', 'Dressers', 'bedroom-furniture/?filter=dressers']
  ];
  $classText = (get_the_title() == 'Home') ? 'cat parallax-hide' : 'cat';
?>

<div class='categories'>
  <div class='categories__inner'>
    <?php
      foreach ($cats as $cat):
        $title = $cat[1];
        $link = $url . $cat[2];
        $imageUrl = $temp . 'img/' . $cat[0] . '.png';
        ?>
    <div class='<?php echo $classText; ?>'>
      <a href='<?php echo $link; ?>'>
        <div class='cat__inner'>
          <div class='cat-image'><img src='<?php echo $imageUrl; ?>' alt=''/></div>
          <div class='cat-name'><?php echo $title; ?></div>
        </div>
      </a>
    </div>
    <?php endforeach; ?>
  </div>
</div>
