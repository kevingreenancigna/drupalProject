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
  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="col-offset-md-12">
            <div class="col-md-6">
              <?php print $top_left; ?>
            </div>
            <div id="image" class="col-md-6">
              <div class="img-circle center-block"> </div>
              <?php print $top_right; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<section>
  <div class="container">
    <div class="row">
      <?php print $main; ?>
    </div>
  </div>
</section>
<footer>
  <div class="container">
    <div class="row">
      <div id="social">
        <div class="col-md-6">
          <p><a href="#"><span class="fa fa-facebook" aria-hidden="true"> </span> Find us on Facebook</a></p>
        </div>
        <div class="col-md-6">
          <p><a href="#"><span class="fa fa-twitter" aria-hidden="true"> </span> Follow us on Twitter</a></p>
        </div>
      </div>
    </div>
    <div class="row">
      <p>&copy; 2015 Cigna.</p>
    </div>
  </div>
</footer>


<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
