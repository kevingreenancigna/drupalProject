<?php

/**
 * @file
 * Display Suite 1 column super-stacked template.
 */
?>
  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
  <header>
    <?php print $top_left; ?>
    <?php print $top_right; ?>
  </header>
  <section>
    <?php print $main; ?>
  </section>
  <footer>
    <?php print $footer; ?>
  </footer>


<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
