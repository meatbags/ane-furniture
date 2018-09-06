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
        <div class='product-item'>
          <a href='<?php echo $link; ?>'>
            <?php echo $title; ?>
            <img src='<?php echo $thumb['sizes']['thumbnail']; ?>' alt='' />
          </a>
        </div>
        <?php
      endwhile;
    endif;
    ?>
  </div>
</div>

<?php get_template_part('footer'); ?>
