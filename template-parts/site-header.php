<?php if ( ! defined('ABSPATH') ) { exit; } ?>
<header class="bh-header">
  <div class="bh-wrap bh-header__inner">
    <a class="bh-brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php bloginfo('name'); ?>">
      <?php if (has_custom_logo()) { the_custom_logo(); } else { bloginfo('name'); } ?>
    </a>
    <button class="bh-menu-toggle" type="button" aria-expanded="false" aria-controls="bh-primary-menu"><?php esc_html_e('Menu','bubba-hub'); ?></button>
    <nav id="bh-primary-menu" class="bh-nav" aria-label="<?php esc_attr_e('Primary navigation','bubba-hub'); ?>">
      <?php wp_nav_menu(array('theme_location'=>'primary','container'=>false,'fallback_cb'=>false)); ?>
    </nav>
  </div>
</header>