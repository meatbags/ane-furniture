<?php
  get_header();
  get_template_part('nav');
  get_template_part('breadcrumb');

  // get appropriate slug
  $slug = '';
  switch(sanitize_title(get_the_title())) {
    case 'beds':
      $slug = 'beds';
      break;
    case 'bedroom-furniture':
      $slug = 'casegoods';
      break;
    case 'dining':
      $slug = 'dining';
      break;
    case 'lounge-chairs':
      $slug = 'lounge_chairs';
      break;
    case 'occasional':
      $slug = 'occasional';
      break;
    case 'promotional':
      $slug = 'promotional';
      break;
  }

  $query = new WP_Query(array('post_type' => $slug, 'posts_per_page' => -1, 'order' => 'ASC', 'order_by' => 'menu_order'));
?>

<div class='page-content'>
  <div class='page-content__inner'>
    <div class='page-title'><?php echo get_the_title(); ?><span class='aside'></span></div>
    <div class='no-product-found'>No products found.</div>
    <?php
    if ($query->have_posts()):
      while ($query->have_posts()):
        $query->the_post();
        $title = get_the_title();
        $thumb = get_field('thumbnail_image');
        $link = get_the_permalink();
        $type = get_field('product_type');
        $size = get_field('product_size');
        $filters = $type ? 'filter-' . implode(' filter-', $type) : '';
        if ($size) {
          $filters .= ' filter-' . implode(' filter-', $size);
        }
        ?>
        <div class='product-item parallax-hide <?php echo $filters; ?>'>
          <a href='<?php echo $link; ?>'>
            <div class='product-item__image'>
              <img src='<?php echo $thumb['sizes']['medium']; ?>' alt='' />
            </div>
            <div class='product-item__title'>
              <div class='text'>
                <?php echo $title; ?>
                <div class='line'></div>
                <div class='view-prompt'>View Product</div>
              </div>
            </div>
          </a>
        </div>
        <?php
      endwhile;
    else: ?>
      <?php get_template_part('no-products'); ?>
    <?php
    endif;
    ?>
  </div>
</div>

<?php get_template_part('cats'); ?>
<?php get_template_part('footer'); ?>
