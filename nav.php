<?php $url = get_bloginfo('url'); ?>

<div class='title-bar'>
  <div class='title-bar__inner'>
    <div class='logo' title='Home'>
      <a href='<?php echo $url; ?>'>
        <img src='<?php echo get_template_directory_uri(); ?>/img/logo.png' alt='ANE Logo' />
      </a>
    </div>
    <div class='title-bar-nav'>
      <div class='item mobile-hide'>
        <a href='<?php echo $url; ?>/'>
          <i class="fas fa-home"></i>
          <div class='msg'>Home</div>
        </a>
      </div>
      <div class='item'>
        <a href='<?php echo $url; ?>/about/'>
          <i class="fas fa-question"></i>
          <div class='msg'>About</div>
        </a>
      </div>
      <div class='item'>
        <a href='<?php echo $url; ?>/contact/'>
          <i class="fas fa-envelope"></i>
          <div class='msg'>Contact</div>
        </a>
      </div>
      <div class='item'>
        <?php if (is_user_logged_in()): ?>
          <a href='<?php echo $url; ?>/members/'>
            <i class="fas fa-user"></i>
            <div class='msg'>Members</div>
          </a>
        <?php else: ?>
          <a href='<?php echo $url; ?>/login/'>
            <i class="fas fa-user"></i>
            <div class='msg'>Log In</div>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<div class='nav'>
  <div class='nav__inner'>
    <?php $title = sanitize_title(get_the_title()); ?>
    <div data-subnav='#subnav-beds' class='<?php echo ($title === 'beds' ? 'item active' : 'item'); ?>'>
      <a href='<?php echo get_site_url(); ?>/beds/'>Beds</a>
    </div>
    <div data-subnav='#subnav-bedroom-furniture' class='<?php echo ($title === 'bedroom-furniture' ? 'item active' : 'item'); ?>'>
      <a href='<?php echo get_site_url(); ?>/bedroom-furniture/'><span class='mobile-hide'>Bedroom</span>&nbsp;Furniture</a>
    </div>
    <div data-subnav='#subnav-dining' class='<?php echo ($title === 'dining' ? 'item active' : 'item'); ?> mobile-hide'>
      <a href='<?php echo get_site_url(); ?>/dining/'>Dining</a>
    </div>
    <div data-subnav='#subnav-lounge-chairs' class='<?php echo ($title === 'lounge-chairs' ? 'item active' : 'item'); ?> mobile-hide'>
      <a href='<?php echo get_site_url(); ?>/lounge-chairs/'>Lounge & Chairs</a>
    </div>
    <div data-subnav='#subnav-occasional' class='<?php echo ($title === 'occasional' ? 'item active' : 'item'); ?> mobile-hide'>
      <a href='<?php echo get_site_url(); ?>/occasional/'>Occasional</a>
    </div>
    <div data-subnav='#subnav-promotional' class='<?php echo ($title === 'promotional' ? 'item active' : 'item'); ?>'>
      <a href='<?php echo get_site_url(); ?>/promotional/'>Promotional</a>
    </div>
  </div>
</div>

<div class='sub-nav'>
  <div class='sub-nav__inner'>
    <?php $link = get_site_url() . "/beds/"; ?>
    <div id='subnav-beds' class='pane'>
      <div class='pane__inner'>
        <div class='half'>
          <div class='title'>Bed Type</div>
          <div class='options'>
            <div class='item'><a href='<?php echo $link; ?>'>All Beds</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=upholstered'>Upholstered Beds</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=gaslift'>Gaslift</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=timber'>Timber Style Beds</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=storage'>Beds With Storage</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=kids'>Kids Beds</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=trundle'>Trundle Beds</a></div>
          </div>
        </div>
        <div class='half'>
          <div class='title'>Bed Sizes</div>
          <div class='options'>
            <div class='item'><a href='<?php echo $link; ?>?filter=single'>Single</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=kingsingle'>King Single</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=double'>Double</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=queen'>Queen</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=king'>King</a></div>
          </div>
        </div>
      </div>
    </div>

    <?php $link = get_site_url() . "/bedroom-furniture/"; ?>
    <div id='subnav-bedroom-furniture' class='pane'>
      <div class='pane__inner'>
        <div class='half'>
          <div class='title'>Product Type</div>
          <div class='options'>
            <div class='item'><a href='<?php echo $link; ?>'>All Bedroom Furniture</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=bedsidetables'>Bedside Tables</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=dressers'>Dressers & Mirrors</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=tallboys'>Tallboys & Lingerie Chests</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=blanketboxes'>Blanket Boxes</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=trundles'>Trundles</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=desks'>Desks</a></div>
          </div>
        </div>
        <div class='half'></div>
      </div>
    </div>

    <?php $link = get_site_url() . "/dining/"; ?>
    <div id='subnav-dining' class='pane'>
      <div class='pane__inner'>
        <div class='half'>
          <div class='title'>Product Type</div>
          <div class='options'>
            <div class='item'><a href='<?php echo $link; ?>'>All Products</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=diningsetting'>Dining Setting</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=diningtables'>Dining Tables</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=diningchairs'>Dining Chairs</a></div>
          </div>
        </div>
        <div class='half'></div>
      </div>
    </div>

    <!-- /lounge-chairs/ -->

    <?php $link = get_site_url() . "/occasional/"; ?>
    <div id='subnav-occasional' class='pane'>
      <div class='pane__inner'>
        <div class='half'>
          <div class='title'>Product Type</div>
          <div class='options'>
            <div class='item'><a href='<?php echo $link; ?>'>All Products</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=displaycabinets'>Display Cabinets</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=buffet'>Buffet</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=halltables'>Hall Table</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=entertainmentunits'>Entertainment Units</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=coffeetables'>Coffee Tables</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=lamptables'>Lamp Tables</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=bookcases'>Book Cases</a></div>
            <div class='item'><a href='<?php echo $link; ?>?filter=benchesdesks'>Benches & Desks</a></div>
          </div>
        </div>
        <div class='half'></div>
      </div>
    </div>
  </div>
</div>
