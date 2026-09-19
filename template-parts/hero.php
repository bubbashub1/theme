<?php $title = isset($args['title']) ? $args['title'] : get_the_title(); $text = isset($args['text']) ? $args['text'] : ''; ?>
<section class="bh-hero"><div class="bh-wrap bh-hero__inner">
  <p class="bh-eyebrow"><?php esc_html_e('Bubba Hub','bubba-hub'); ?></p>
  <h1><?php echo esc_html($title); ?></h1>
  <?php if ($text) : ?><p><?php echo esc_html($text); ?></p><?php endif; ?>
</div></section>