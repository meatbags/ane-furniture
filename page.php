<?php
  get_header();
  get_template_part('nav');
  get_template_part('breadcrumb');
  $slug = lcfirst(get_the_title());
  $query = new WP_Query(array('post_type' => $slug, 'post_count' => -1, 'order' => 'ASC', 'order_by' => 'menu_order'));
?>

<div class='page-content'>
  <div class='page-content__inner'>
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
              <span class='eye'>&rarr;&nbsp;</span><?php echo $title; ?>
            </div>
          </a>
          <div class='product-item__border'></div>
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
