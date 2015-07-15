<?php

/**
 * @file
 * Display Suite 1 column template.
 */
?>
  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
  <h3 class="col-sm-12 col-md-4 col-lg-12"><span class="fa fa-phone" aria-hidden="true"> </span> <?php print $title; ?></h3>
  <?php print $ds_content; ?>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
