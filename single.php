<?php
get_header();
get_template_part('nav');
get_template_part('breadcrumb');

$var = get_fields();
$title = get_the_title();
$colours = $var['colour'];
$thumb = $var['thumbnail_image'];
$gallery = $var['image_gallery'];
$size = $var['size']; //et_field('size');
$dimensions = $var['dimensions']; //get_field('dimensions'); // dimension_label, dimension_value
$remarks = $var['remarks']; //get_field('remarks');
$number = get_field('product_reference_number');
?>

<div class='product'>
  <div class='product__inner'>

    <div class='product-title'>
      <?php echo $title; ?>
    </div>

    <div class='product-pane left'>
      <div class='gallery product-gallery'>
        <?php if ($gallery && sizeof($gallery) > 0): ?>
          <div class='gallery-images parallax-hide'>
            <?php
              $count = 0;
              foreach ($gallery as $img): ?>
              <div class='item <?php echo ($count++ == 0) ? 'active' : ''; ?>'>
                <img src='<?php echo $img['sizes']['large']; ?>' />
                <div class='item-title'>
                  <?php echo $img['title']; ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <?php if (sizeof($gallery) > 1): ?>
            <div class='gallery-nav parallax-hide'>
              <?php
                $count = 0;
                foreach ($gallery as $img): ?>
                <div class='item <?php echo ($count == 0) ? 'active' : '';?>' data-index='<?php echo $count; ?>'>
                  <img src='<?php echo $img['sizes']['thumbnail']; ?>' />
                </div>
                <?php $count++; ?>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>

    <div class='product-pane right'>
      <?php if ($number): ?>
        <div class='heading'>Reference Number</div>
        <div class='number'><?php echo $number; ?></div>
      <?php endif; ?>
      <?php if ($colours): ?>
        <div class='heading'>Colours</div>
        <div class='colours'><?php echo $colours; ?></div>
      <?php endif; ?>
      <?php if ($size): ?>
        <div class='heading'>Sizes</div>
        <div class='size'><?php echo $size; ?></div>
      <?php endif; ?>
      <?php if ($dimensions && sizeof($dimensions) > 0 && $dimensions[0]['dimension_label']): ?>
        <div class='heading'>Dimensions</div>
        <div class='dimensions'>
          <?php foreach ($dimensions as $d): ?>
            <div class='dimension'>
              <div class='dimension-label'><?php echo $d['dimension_label']; ?></div>
              <div class='dimension-value'><?php echo $d['dimension_value']; ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
      <?php if ($remarks): ?>
        <div class='heading'>Remarks</div>
        <div class='remarks'>
          <?php echo $remarks; ?>
        </div>
      <?php endif; ?>
      <div class='msg'>
        <a href='<?php echo get_bloginfo('url'); ?>/contact/'>Contact us for more information</a>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('cats'); ?>
<?php get_template_part('footer'); ?>
