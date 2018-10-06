<?php
// populate slider
$q = new WP_Query(array(
  'post_count' => -1,
  'post_type' => 'any',
  'meta_query' => array(
    'relation' => 'AND',
    array('key' => 'add_to_featured', 'compare' => 'EXISTS'),
    array('key' => 'add_to_featured', 'value' => '1', 'compare' => '==')
  )
));
if ($q->have_posts()): ?>
  <div class='carousel'>
    <div class='carousel__inner carousel-slider parallax-hide'><?php
      $count = 0;
      while ($q->have_posts()):
        $q->the_post();
        $title = get_the_title();
        $url = get_the_permalink();
        $img = get_field('thumbnail_image'); ?>
        <div data-index='<?php echo $count; ?>' class='slide <?php echo ($count == 2) ? 'active ': ''; ?>'>
          <img src='<?php echo $img['sizes']['large']; ?>'/>
          <div class='slide-title'>
            <a href='<?php echo $url; ?>'>
              <div class='title'><?php echo $title; ?></div>
              <div class='line'></div>
              <div class='link'>View Product</div>
            </a>
          </div>
        </div>
        <?php $count++; ?>
      <?php endwhile; ?>
    </div>
    <div class='carousel-overlay'></div>
    <div class='carousel-controls'>
      <div class='carousel-left'><i class="fas fa-chevron-left"></i></div>
      <div class='carousel-right'><i class="fas fa-chevron-right"></i></div>
    </div>
  </div>
<?php endif;
wp_reset_query(); ?>
