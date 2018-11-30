<?php
  get_header();
  get_template_part('nav');
  get_template_part('breadcrumb');
?>

<div class='page-content'>
  <div class='page-content__inner'>
    <?php if (!is_search()): ?>
      <div class='page-title'><?php echo get_the_title(); ?><span class='aside'></span></div>
    <?php else: ?>
      <div class='page-title is-search'>Search: <span class='aside'><?php echo get_search_query(); ?></span></div>
    <?php endif; ?>
    <div class='no-product-found'>No products found.</div>
    <?php
    if (have_posts()):
      while (have_posts()):
        the_post();
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
