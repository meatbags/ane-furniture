<?php
  get_header();
  get_template_part('nav');
  get_template_part('breadcrumb');
  $query = new WP_Query(array('post_type' => 'documents', 'posts_per_page' => -1, 'order' => 'ASC', 'order_by' => 'menu_order'));

  // get user document privileges
  $user = wp_get_current_user();
  $groups = get_field('user_group', 'user_' . $user->ID);
?>

<div class='members'>
  <div class='members__inner'>
    <?php if (is_user_logged_in()):
      $user = wp_get_current_user(); ?>
      <div class='title'>Members Area</div>
      <div class='members-nav'>
        <div class='item'>
          <?php wp_loginout(home_url()); ?>
        </div>
        <div class='item'>
          <a href='<?php echo get_bloginfo('url'); ?>/wp-admin/' target='_blank'>
            <i class="fas fa-cog"></i>&nbsp;Settings
          </a>
        </div>
      </div>
      <div class='members-docs'>
        <div class='title'>Documents</div><br />
        <?php if ($query->have_posts()):
          while ($query->have_posts()):
            $query->the_post();
            $title = get_the_title();
            $docs = get_field('documents');
          ?>
          <div class='doc'>
            <div class='doc-title'><?php echo $title; ?></div>
            <div class='doc-files'>
              <?php foreach ($docs as $doc):
                $permissions = $doc['groups'];
                if ($groups && $permissions):
                  $res = false;
                  // check if user has permission for doc
                  foreach($groups as $name) {
                    if (in_array($name, $permissions)) {
                      $res = true;
                    }
                  }
                  if ($res):
                ?>
                    <div class='item'>
                      <div class='item-title'>
                        <?php echo $doc['document_title']; ?>
                      </div>
                      <div class='item-download'>
                        <a href='<?php echo $doc['file']['url']; ?>' download>
                          <i class="fas fa-file"></i>&nbsp;Download
                        </a>
                      </div>
                    </div>
                  <?php endif; ?>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class='title'>Catalogue</div><br />
    <?php else: ?>
      You are not logged in. <a href='<?php echo get_bloginfo('url'); ?>/login/'>Log in here</a>
    <?php endif; ?>
  </div>
</div>
<?php get_template_part('footer'); ?>
