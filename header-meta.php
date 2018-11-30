<meta charset="utf-8">
<meta name="description" content="">
<meta name="keywords" content="bedroom, bedding, furniture, beds">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<!-- FB OpenGraph -->
<meta property="og:url" content="<?php echo get_permalink(); ?>" />
<meta property="og:site_name" content="ANE Furniture"/>
<?php if (is_single()):
  $thumb = get_field('thumbnail_image');?>
<meta property="og:title" content="ANE Furniture - <?php echo get_the_title(); ?>"/>
<meta property="og:image" content="<?php echo $thumb['sizes']['large']; ?>"/>
<meta property="og:type" content="product" />
<?php else: ?>
<meta property="og:title" content="ANE Furniture"/>
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og-image.jpg"/>
<meta property="og:description" content="ANE Furniture has been importing quality timber furniture for over 15 years. Our head office is based in Sydney, Australia. Our factory, operating since 2004, is located in Guang Dong Province in China. Overseeing the production process from design to manufacture, we are able to maintain a high standard of workmanship, provide flexible terms and options for individual customers, and adapt to changing design trends. At ANE we have built a strong reputation for our dependability and timeliness. We manufacture to your needs. Simply talk to us about hows you would like us to build or deliver your order." />
<?php endif; ?>
