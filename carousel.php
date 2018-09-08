<?php
$q = new WP_Query(array(
  'post_count' => -1,
  'post_type' => 'any',
  'meta_query' => array(
    'relation' => 'AND',
    array(
      'key' => 'add_to_featured',
      'compare' => 'EXISTS'
    ),
    array(
      'key' => 'add_to_featured',
      'value' => '1',
      'compare' => '=='
    )
  )
));
if ($q->have_posts()): ?>
  <div class='carousel'>
    <div class='carousel__inner carousel-slider parallax-hide'><?php
      $count = 0;
      while ($q->have_posts()):
        $q->the_post();
        $img = get_field('thumbnail_image');
        $classText = ($count == 1) ? 'slide active' : 'slide';
        $count++;
      ?>
        <div class='<?php echo $classText; ?>'>
          <img src='<?php echo $img['sizes']['large']; ?>'/>
        </div>
      <?php endwhile; ?>
    </div>
    <div class='carousel-overlay'></div>
  </div>
<?php endif;
wp_reset_query(); ?>
