<?php
  get_header();
  get_template_part('nav');
  get_template_part('breadcrumb');
  $slug = lcfirst(get_the_title());
  $query = new WP_Query(array('post_type' => $slug, 'posts_per_page' => -1, 'order' => 'ASC', 'order_by' => 'menu_order'));
?>

<div class='page-content'>
  <div class='page-content__inner'>
    <div class='page-title'><?php echo get_the_title(); ?></div>
    <?php
    if ($query->have_posts()):
      while ($query->have_posts()):
        $query->the_post();
        $title = get_the_title();
        $thumb = get_field('thumbnail_image');
        $link = get_the_permalink();
        ?>
        <div class='product-item parallax-hide'>
          <a href='<?php echo $link; ?>'>
            <div class='product-item__image'>
              <img src='<?php echo $thumb['sizes']['medium']; ?>' alt='' />
            </div>
            <div class='product-item__title'>
              <div class='text'>
                <?php echo $title; ?>
                <div class='line'></div>
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
