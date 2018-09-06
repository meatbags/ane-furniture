<?php
get_header();
get_template_part('nav');
get_template_part('breadcrumb');

$var = get_fields();
$title = get_the_title();
$colours = $var['colour'];
$thumb = $var['thumbnail_image'];
$gallery = get_field('image_gallery');
$size = get_field('size');
$dimensions = get_field('dimensions'); // dimension_label, dimension_value
$desc = get_field('remarks');
$cats = get_field('categories');
$add = get_field('add_to_featured');



echo $title . $colours;
foreach($var as $k => $v) {
  //echo($k);
  //var_dump($v);
  echo '<br /><br />';
}
?>

<?php get_template_part('footer'); ?>
