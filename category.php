<?php
  get_header();
  get_template_part('nav');
?>

<div class='page-title'>
  <div class='page-title__inner'>
    <a href='<?php echo get_bloginfo('url'); ?>/'>Home</a>
    &nbsp;&nbsp;&rarr;&nbsp;&nbsp;
    Category: <?php single_cat_title(); ?></div>
</div>
<div class='page-content'>
  <div class='page-content__inner'>
    <?php
    if (have_posts()):
      while (have_posts()):
        the_post();
        $title = get_the_title();
        $thumb = get_field('thumbnail_image');
        $link = get_the_permalink();
        ?>
        <div class='product-item parallax-hide'>
          <a href='<?php echo $link; ?>'>
            <div class='product-item__image'>
              <img src='<?php echo $thumb['sizes']['medium']; ?>' alt=''/>
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
      No products currently available.&nbsp;<a href='<?php echo get_bloginfo('url'); ?>'>Keep searching</a>
    <?php
    endif;
    ?>
  </div>
</div>

<?php get_template_part('footer'); ?>
